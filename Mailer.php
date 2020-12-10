<?php

declare(strict_types=1);

namespace Swon\Technical;

use \Swift_Attachment;

class Mailer
{
  private $mailer;
  private $to = '';
  private $recipient = '';
  private $subject = '';
  private $body = '';
  private $cc = [];
  private $bcc = [];
  private $attachments = [];
  private $xmlTextAttachments = [];
  private $inlineImages = [];
  private $mailing_group = '';
  
  public static $imageCidKey = 'img_cid';

  public function __construct()
  {
    // TODO: SwiftMailer can have bounces address registered and SSL certificate encoding (https://swiftmailer.symfony.com/docs/messages.html)

    \Swon\Configuration\ApiConfig::awsInit(); // Setting constants here

    // Using global sender for now
    $transport = new \Swift_SmtpTransport(
      'smtp.office365.com',
       587,
      'tls'
    );

    $transport
      ->setUsername('conner@kitchencabinets.co.nz')
      ->setPassword('Tuc05370');

    // TODO: This one is useful when each domain has finally their own domain active
    // $transport = new \Swift_SmtpTransport(
    //   Session::senderHost(),
    //   Session::senderPort(),
    //   (Session::senderType() == 1) ? 'tls' : 'ssl'
    // );

    // $transport
    //   ->setUsername(Session::senderUser())
    //   ->setPassword(Session::senderPwd());

    $this->mailer = new \Swift_Mailer($transport);
  }
  

  public static function emailToAdmin(string $title, string $body): void
  {
    $mail->to($GLOBALS['_SWON']['mail']['admin_address']);
    $mail = new self();
    "conner@kitchencabinets.co.nz"
    $mail->subject($title);
    $mail->body($body);
    $mail->send();
  }

  public static function imgCid(int $index): string
  {
    return self::$imageCidKey . ':' . $index;
  }

  public function mailingGroup(string $group = ''): void
  {
    $this->mailing_group = $group;
  }

  public function to(string $to = 'bad@email'): void
  {
    $this->to = \_sanitiseSpaces($to);
  }

  public function recipient(string $recipient = ''): void
  {
    $this->recipient = $recipient;
  }

  public function subject(string $subject = ''): void
  {
    $this->subject = $subject;
  }

  public function body(string $body = ''): void
  {
    $this->body = $body;
  }

  public function cc(array $cc = []): void
  {
    $this->cc = $cc;
  }

  public function bcc(array $bcc = []): void
  {
    $this->bcc = $bcc;
  }

  public function plainText(string $text = ''): void
  {
    $this->plain_text = $text;
  }

  /**
   * Attachments in format [ 'name1' => 'path1', 'name2' => 'path2', ... ]
   */
  public function attachments(array $attachments = []): void
  {
    $this->attachments = $attachments;
  }

  /**
   * Attachments in format [ 'name1' => '<xml1 />', 'name2' => '<xml2 />', ... ]
   */
  public function xmlTextAttachments(array $attachments = []): void
  {
    $this->xmlTextAttachments = $attachments;
  }

  public function inlineImages(array $inlineImages = []): void
  {
    $this->inlineImages = $inlineImages;
  }

  // $domain_data is in use within template
  public function send(array $domain_data = []): bool
  {
    if (empty($this->to)) {
      \swon_error('No recipient email set for mailer.', true);
      return false;
    }

    if (!Checker::isValidEmail($this->to)) {
      \swon_error($this->to . ' is not valid for mailer.', true);
      return false;
    }

    $to = $this->to;
    $prefix = Session::senderPrefix();
    $subject = $this->subject;
    $body = $this->body;

    if ($prefix != '')
      $subject = '[' . $prefix . '] ' . $subject;

    // Sending an email to a dedicated email just for history
    $this->bcc[] = $GLOBALS['_SWON']['mail']['mail_notifications_archive'];

    if (TEST_ENV) {
      $subject = '[TEST] ' . $subject;
      $ccBcc = '';

      if (!empty($this->cc))
        $ccBcc = 'CC: ' . implode(',', $this->cc);

      if (!empty($ccBcc))
        $ccBcc .= '<br />';

      if (!empty($this->bcc))
        $ccBcc .= 'BCC: ' . implode(',', $this->bcc);

      if (!empty($ccBcc))
        $ccBcc .= '<br />';

      $body = 'Supposed to go to: ' . $to . '<br />' . $ccBcc . '---<br />---<br />' . $body;
      $to = (defined('LOCAL_TESTER_EMAIL')) ? LOCAL_TESTER_EMAIL : $GLOBALS['_SWON']['mail']['admin_address'];
    }

    $message = new \Swift_Message($subject);

    if (!empty($domain_data)) {
      if (isset($domain_data['contacts']['email']) && Checker::isValidEmail($domain_data['contacts']['email']))
        $message->setReplyTo($domain_data['contacts']['email']);

      // TODO: Set up sending from the proper email
      $message->setFrom([$GLOBALS['_SWON']['mail']['from'] => $domain_data['main_name'] ?? Session::businessName()]);
    } else {
      $message->setFrom([$GLOBALS['_SWON']['mail']['from'] => Session::businessName()]);
    }

    if (!empty($this->mailing_group))
      $body .= '<br /><br /><br />GROUP' . $this->mailing_group;

    // Adding wrapper for body
    include __DIR__ . '/Templates/HtmlWrappers/Wrapper1.tpl.php'; // Just one template for now - #1

    $message->setContentType('text/html');

    if (!empty($this->inlineImages))
      foreach ($this->inlineImages as $index => $path)
        $body = str_replace(self::imgCid($index), $message->embed(\Swift_Image::fromPath($path)), $body);

    $message->setTo(($this->recipient !== '') ? [$to => $this->recipient] : $to);
    $message->setBody($body);

    if (!empty($this->plain_text))
      $message->addPart($this->plain_text, 'text/plain');
    else
      $message->addPart(strip_tags($this->body), 'text/plain');



    try {
      if ($this->mailer->send($message)) {
        return true;
      } else {
        \swon_error('Mailer cannot send this message...');
        return false;
      }
    } catch (\Throwable $th) {
      \swon_error($th->getMessage());
      return false;
    }
  }

  public static function convertImgToBase64(string $path = ''): string
  {
    if (!file_exists($path)) {
      \swon_error('Cannot find file for encoding: ' . $path);
      return '';
    }

    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);

    return 'data:image/' . $type . ';base64,' . base64_encode($data);
  }

  public function sendToGroup(array $mails_group, string $group_name = ''): bool
  {
    $length = count($mails_group);

    if (!$length)
      return false;

    $to = $mails_group[0]['email'];
    $cc = [];

    if ($length > 1)
      for ($i = 1; $i < $length; $i++)
        $cc[] = $mails_group[$i]['email'];

    if (!empty($group_name))
      $this->mailingGroup($group_name);

    $this->to($to);
    $this->cc($cc);

    return $this->send();
  }
}
