<?php

  declare(strict_types=1);

  namespace Swon\Technical\Templates\Emails;

  use \Swon\Technical\Mailer;

  $website_url = 'https://' . $_SERVER['SERVER_NAME'];
  $uploads_url = $website_url . '/content/uploads/';

  // TODO: These values should come from the database
  $catalogue_file_path = '2020-11/catalogue_november_2020.pdf';
  $planner_sheet_file_path = '2020-02/kitchen-planner.pdf';

  $catalogue = $uploads_url . $catalogue_file_path;
  $sheet = $uploads_url . $planner_sheet_file_path;

  // NOT NEEDED AS OF NOW
  // $contacts = \_domain()['contacts'] ?? [];
  // $phone = '';
  // $email = '';

  // if (isset($contacts[ContactDetailType::$_PHONE][0]))
  //   $phone = $contacts[ContactDetailType::$_PHONE][0]['value'];

  // if (isset($contacts[ContactDetailType::$_EMAIL][0]))
  //   $email = $contacts[ContactDetailType::$_EMAIL][0]['value'];

  include 'CatalogueRequestCss.tpl.php';

?>
  <center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
      <tr>
        <td align="center" valign="top" id="bodyCell">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td align="center" valign="top" id="templateBody" data-template-container>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                  <tr>
                    <td valign="top" class="bodyContainer">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%; min-width: 100%" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnTextContent" style="
                                        padding: 30px 18px 20px;
                                        color: #222222;
                                        font-family: 'Helvetica Neue',
                                          Helvetica, Arial, Verdana,
                                          sans-serif;
                                        font-size: 14px;
                                        font-style: normal;
                                        font-weight: normal;
                                        line-height: 150%;
                                        text-align: center;
                                      ">
                                      <span style="font-size: 16px">Thanks for taking a look at our
                                        catalogue!<br />
                                        Some of our helpful tools are below to
                                        help you with your new kitchen.</span><br />
                                      &nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding: 9px">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnCaptionRightContentInner" style="padding: 0 9px">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" width="264">
                                        <tbody>
                                          <tr>
                                            <td class="mcnCaptionRightImageContent" align="center" valign="top">
                                              <img alt="" src="<?= Mailer::imgCid(0) ?>" width="251" style="max-width: 251px" class="mcnImage" />
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264">
                                        <tbody>
                                          <tr>
                                            <td valign="top" class="mcnTextContent" style="text-align: left">
                                              <span style="color: #000000"><strong>Online Catalogue &amp;
                                                  Style Guide</strong><br />
                                                <br />
                                                Our digital catalogue &amp;
                                                style guide is a fantastic
                                                introduction to planning your
                                                kitchen with us, showing all
                                                cabinets and styles we have on
                                                offer.</span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="
                                padding-top: 0;
                                padding-right: 18px;
                                padding-bottom: 18px;
                                padding-left: 18px;
                              " valign="top" align="right" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="
                                  border-collapse: separate !important;
                                  border: 1px solid #cc0000;
                                  border-radius: 3px;
                                  background-color: #cc0000;
                                ">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="
                                        font-family: Tahoma, Verdana, Segoe,
                                          sans-serif;
                                        font-size: 18px;
                                        padding: 8px;
                                      ">
                                      <a class="mcnButton" title="Download Catalogue" href="<?= $catalogue ?>" target="_blank" style="
                                          font-weight: normal;
                                          letter-spacing: -0.5px;
                                          line-height: 100%;
                                          text-align: center;
                                          text-decoration: none;
                                          color: #ffffff;
                                        ">Download Catalogue</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding: 9px">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnCaptionRightContentInner" style="padding: 0 9px">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" width="264">
                                        <tbody>
                                          <tr>
                                            <td class="mcnCaptionRightImageContent" align="center" valign="top">
                                              <img alt="" src="<?= Mailer::imgCid(1) ?>" width="251" style="max-width: 251px" class="mcnImage" />
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264">
                                        <tbody>
                                          <tr>
                                            <td valign="top" class="mcnTextContent" style="text-align: left">
                                              <span style="color: #000000"><strong>Free Online 3D Planner Tool</strong><br />
                                                <br />
                                                Used to calculate measurements and visualise your kitchen. This tool provides you with renders of your kitchen, elevation plans and a quote!</span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="
                                padding-top: 0;
                                padding-right: 18px;
                                padding-bottom: 18px;
                                padding-left: 18px;
                              " valign="top" align="right" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="
                                  border-collapse: separate !important;
                                  border: 1px solid #cc0000;
                                  border-radius: 3px;
                                  background-color: #cc0000;
                                ">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="
                                        font-family: Tahoma, Verdana, Segoe,
                                          sans-serif;
                                        font-size: 18px;
                                        padding: 8px;
                                      ">
                                      <a class="mcnButton" title="Launch 3D Planner" href="https://www.kitchencabinets.co.nz/page/3d-kitchen-planner-usage-manual" target="_blank" style="
                                          font-weight: normal;
                                          letter-spacing: -0.5px;
                                          line-height: 100%;
                                          text-align: center;
                                          text-decoration: none;
                                          color: #ffffff;
                                        ">Launch 3D Planner</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding:9px;">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnCaptionRightContentInner" style="padding:0 9px ;">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" width="264">
                                        <tbody>
                                          <tr>
                                            <td class="mcnCaptionRightImageContent" align="center" valign="top">
                                              <a href="<?= $sheet ?>" title="" class="" target="_blank">
                                                <img alt="" src="<?= Mailer::imgCid(2) ?>" width="264" style="max-width:615px;" class="mcnImage">
                                              </a>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264">
                                        <tbody>
                                          <tr>
                                            <td valign="top" class="mcnTextContent" style="text-align: left;">
                                              <span style="color:#000000"><strong>Kitchen Planning Sheet</strong><br>
                                                <br>
                                                Prefer pencil and paper?<br>
                                                Print out our kitchen planning sheet - no online tools required!</span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                        <tbody class="mcnDividerBlockOuter">
                          <tr>
                            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 8px 18px;">
                              <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px none #C5C5C5;">
                                <tbody>
                                  <tr>
                                    <td>
                                      <span></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="right" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border: 1px solid #CC0000;border-radius: 3px;background-color: #CC0000;">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 18px; padding: 8px;">
                                      <a class="mcnButton " title="Launch 3D Planner" href="<?= $sheet ?>" target="_blank" style="font-weight: normal;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Download Planning sheet</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                        <tbody class="mcnDividerBlockOuter">
                          <tr>
                            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 8px 18px;">
                              <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px none #C5C5C5;">
                                <tbody>
                                  <tr>
                                    <td>
                                      <span></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding: 9px">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnCaptionRightContentInner" style="padding: 0 9px">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" width="264">
                                        <tbody>
                                          <tr>
                                            <td class="mcnCaptionRightImageContent" align="center" valign="top">
                                              <img alt="" src="<?= Mailer::imgCid(3) ?>" width="251" style="max-width: 251px" class="mcnImage" />
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264">
                                        <tbody>
                                          <tr>
                                            <td valign="top" class="mcnTextContent" style="text-align: left">
                                              <span style="color: #000000"><strong>Assembly Videos</strong><br />
                                                <br />
                                                Can’t quite wrap your head
                                                around assembling your new
                                                cabinets?<br />
                                                Look at our step by step
                                                assembly videos to help you
                                                through it.</span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="
                                padding-top: 0;
                                padding-right: 18px;
                                padding-bottom: 18px;
                                padding-left: 18px;
                              " valign="top" align="right" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="
                                  border-collapse: separate !important;
                                  border: 1px solid #cc0000;
                                  border-radius: 3px;
                                  background-color: #cc0000;
                                ">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="
                                        font-family: Tahoma, Verdana, Segoe,
                                          sans-serif;
                                        font-size: 18px;
                                        padding: 8px;
                                      ">
                                      <a class="mcnButton" title="Browse Assembly Videos" href="https://www.youtube.com/channel/UCHGCOTXEl0YQbH0nyH8SlCA" target="_blank" style="
                                          font-weight: normal;
                                          letter-spacing: -0.5px;
                                          line-height: 100%;
                                          text-align: center;
                                          text-decoration: none;
                                          color: #ffffff;
                                        ">Browse Assembly Videos</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                        <tbody class="mcnCaptionBlockOuter">
                          <tr>
                            <td class="mcnCaptionBlockInner" valign="top" style="padding: 9px">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightContentOuter" width="100%">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnCaptionRightContentInner" style="padding: 0 9px">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionRightImageContentContainer" width="264">
                                        <tbody>
                                          <tr>
                                            <td class="mcnCaptionRightImageContent" align="center" valign="top">
                                              <img alt="" src="<?= Mailer::imgCid(4) ?>" width="251" style="max-width: 251px" class="mcnImage" />
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="mcnCaptionRightTextContentContainer" align="right" border="0" cellpadding="0" cellspacing="0" width="264">
                                        <tbody>
                                          <tr>
                                            <td valign="top" class="mcnTextContent" style="text-align: left">
                                              <span style="color: #000000"><strong>Have Feedback?</strong><br />
                                                <br />
                                                How did we do? Love your
                                                kitchen? Something we can
                                                improve on?<br />
                                                <br />
                                                Let us know, we would love to
                                                hear from you!</span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%">
                        <tbody class="mcnButtonBlockOuter">
                          <tr>
                            <td style="
                                padding-top: 0;
                                padding-right: 18px;
                                padding-bottom: 18px;
                                padding-left: 18px;
                              " valign="top" align="right" class="mcnButtonBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="
                                  border-collapse: separate !important;
                                  border: 1px solid #cc0000;
                                  border-radius: 3px;
                                  background-color: #cc0000;
                                ">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="middle" class="mcnButtonContent" style="
                                        font-family: Tahoma, Verdana, Segoe,
                                          sans-serif;
                                        font-size: 18px;
                                        padding: 8px;
                                      ">
                                      <a class="mcnButton" title="Send Us Feedback" href="mailto:info@kitchencabinets.co.nz?subject=Customer%20Feedback" target="_blank" style="
                                          font-weight: normal;
                                          letter-spacing: -0.5px;
                                          line-height: 100%;
                                          text-align: center;
                                          text-decoration: none;
                                          color: #ffffff;
                                        ">Send Us Feedback</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width: 100%">
                        <tbody class="mcnFollowBlockOuter">
                          <tr>
                            <td align="center" valign="top" style="padding: 9px" class="mcnFollowBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width: 100%">
                                <tbody>
                                  <tr>
                                    <td align="center" style="
                                        padding-left: 9px;
                                        padding-right: 9px;
                                      ">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%" class="mcnFollowContent">
                                        <tbody>
                                          <tr>
                                            <td align="center" valign="top" style="
                                                padding-top: 9px;
                                                padding-right: 9px;
                                                padding-left: 9px;
                                              ">
                                              <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                  <tr>
                                                    <td align="center" valign="top">
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="
                                                          display: inline;
                                                        ">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="
                                                                padding-right: 10px;
                                                                padding-bottom: 9px;
                                                              " class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="
                                                                        padding-top: 5px;
                                                                        padding-right: 10px;
                                                                        padding-bottom: 5px;
                                                                        padding-left: 9px;
                                                                      ">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="https://www.facebook.com/KitchenCabinetsNZ/" target="_blank"><img src="<?= Mailer::imgCid(5) ?>" alt="Facebook" style="
                                                                                    display: block;
                                                                                  " height="24" width="24" class="" /></a>
                                                                            </td>
                                                                            <td align="left" valign="middle" class="mcnFollowTextContent" style="
                                                                                padding-left: 5px;
                                                                              ">
                                                                              <a href="https://www.facebook.com/KitchenCabinetsNZ/" target="" style="
                                                                                  font-family: Arial;
                                                                                  font-size: 11px;
                                                                                  text-decoration: none;
                                                                                  color: #202020;
                                                                                  font-weight: normal;
                                                                                ">Facebook</a>
                                                                            </td>
                                                                          </tr>
                                                                        </tbody>
                                                                      </table>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="
                                                          display: inline;
                                                        ">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="
                                                                padding-right: 10px;
                                                                padding-bottom: 9px;
                                                              " class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="
                                                                        padding-top: 5px;
                                                                        padding-right: 10px;
                                                                        padding-bottom: 5px;
                                                                        padding-left: 9px;
                                                                      ">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="http://www.kitchencabinets.co.nz" target="_blank"><img src="<?= Mailer::imgCid(7) ?>" alt="Website" style="
                                                                                    display: block;
                                                                                  " height="24" width="24" class="" /></a>
                                                                            </td>
                                                                            <td align="left" valign="middle" class="mcnFollowTextContent" style="
                                                                                padding-left: 5px;
                                                                              ">
                                                                              <a href="http://www.kitchencabinets.co.nz" target="" style="
                                                                                  font-family: Arial;
                                                                                  font-size: 11px;
                                                                                  text-decoration: none;
                                                                                  color: #202020;
                                                                                  font-weight: normal;
                                                                                ">Website</a>
                                                                            </td>
                                                                          </tr>
                                                                        </tbody>
                                                                      </table>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="
                                                          display: inline;
                                                        ">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="
                                                                padding-right: 0;
                                                                padding-bottom: 9px;
                                                              " class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="
                                                                        padding-top: 5px;
                                                                        padding-right: 10px;
                                                                        padding-bottom: 5px;
                                                                        padding-left: 9px;
                                                                      ">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="mailto:info@kitchencabinets.co.nz" target="_blank"><img src="<?= Mailer::imgCid(6) ?>" alt="Email" style="
                                                                                    display: block;
                                                                                  " height="24" width="24" class="" /></a>
                                                                            </td>
                                                                            <td align="left" valign="middle" class="mcnFollowTextContent" style="
                                                                                padding-left: 5px;
                                                                              ">
                                                                              <a href="mailto:info@kitchencabinets.co.nz" target="" style="
                                                                                  font-family: Arial;
                                                                                  font-size: 11px;
                                                                                  text-decoration: none;
                                                                                  color: #202020;
                                                                                  font-weight: normal;
                                                                                ">Email</a>
                                                                            </td>
                                                                          </tr>
                                                                        </tbody>
                                                                      </table>
                                                                    </td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" valign="top" id="templateFooter" data-template-container>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                  <tr>
                    <td valign="top" class="footerContainer">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%; min-width: 100%" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>
                                    <td valign="top" class="mcnTextContent" style="
                                        padding-top: 0;
                                        padding-right: 18px;
                                        padding-bottom: 9px;
                                        padding-left: 18px;
                                      ">
                                      <p>
                                        <strong>Our showroom:</strong><br />
                                        <a href="https://www.google.com/maps/place/Kitchen+Cabinets+and+Stones+Ltd/@-36.756017,174.703392,15z/data=!4m5!3m4!1s0x0:0xe2e54047dcb0b1ba!8m2!3d-36.756017!4d174.703392">243-249 Bush Road, Rosedale, Auckland 0632</a>
                                      </p>
                                      <p>&nbsp;</p>
                                      <p>
                                        <strong>
                                          <a href="https://www.kitchencabinets.co.nz/page/contact-us">Click here to see more showrooms</a>
                                        </strong>
                                      </p>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>
