<?php 
# retrieve from file
$filename = 'enewsletter';
$section = unserialize(file_get_contents($filename)); 
?>

<html>
  <head>
    <title>CSM Alumni Association eNewsletter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">
        .eNewsletterDiv .content li {
        margin-top: 2px;
        }
        .eNewsletterDiv .content a {
        text-decoration: none;
        color: #0D0D85;
        font-size: 15px;
        }
        .eNewsletterDiv a:hover {
        text-decoration: underline;
        }
        .eNewsletterDiv a:visited {
        color: #2957B5;
        }
    </style>
  </head>
  <body topmargin="0" leftmargin="0" bgcolor="#dddddd" marginheight="0" marginwidth="0">
    <div class="eNewsletterDiv">
      <table border="0" cellpadding="0" cellspacing="0" width="98%">
          <tbody>
            <tr>
              <td valign="top">
                <!-- Header Section -->
                <table style="margin-top: 10px; border-top: 3px double rgb(85, 85, 85); border-left: 3px double rgb(85, 85, 85); border-right: 3px double rgb(85, 85, 85);" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="600" align="center">
                  <tbody>
                    <tr>
                      <td class="header-image" style="margin: 0px; padding: 0px; font-family: Georgia; font-style: italic;" bgcolor="#cc9e54" valign="top" width="600">
                      <a href="http://minesonline.net/s/840/NHindex.aspx?pgid=2006" target="_blank" style="font-size: 25px;">
                      <!-- Header Image -->
                      <img class="header_image" alt="Colorado School of Mines Alumni Association" style="border-bottom: 1px solid rgb(85, 85, 85);" src="https://admin.imodules.com/s/840/images/editor/enewsletter/banner_generic.jpg" height="113" width="600"></a></td>
                    </tr>
                    <tr>
                      <td cellpadding="0" style="font-size: 0px;" bgcolor="#cc9e54" height="1" valign="top" width="600">
                      <img src="https://admin.imodules.com/s/840/images/editor/general/spacer.gif" alt="" height="1" width="600"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
              <tr>
                <td>
                  <!-- Content Section -->
                  <table style="background: none repeat scroll 0% 0% rgb(255, 255, 255); border-left: 3px double rgb(85, 85, 85); border-right: 3px double rgb(85, 85, 85); border-bottom: 1px double rgb(85, 85, 85);" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="600" align="center">
                    <tbody>
                      <?php for($i = 0; $i < $section["count"]; $i++) {
                        if($i == 0) { ?>
                          <tr>
                            <td colspan="2" style="font-size: 0px;" bgcolor="#cc9e54" height="1" valign="top" width="600">
                              <img alt="" src="https://admin.imodules.com/s/840/images/editor/general/spacer.gif" height="1" width="600">
                            </td>
                          </tr>
                          <tr class="title In_the_News" bgcolor="#cc9e54">
                            <td style="border-bottom: 1px solid rgb(85, 85, 85); padding: 0px 10px 2px; font-family: arial; font-weight: bold; text-transform: uppercase;" valign="center" width="150"><?php if($section[$i]["link"]) echo '<a href="' . $section[$i]["link"] . '" target="_blank" style="color: #000000; text-decoration: none;">'; ?><?php echo $section[$i]["name"]; ?><?php if($section[$i]["link"]) echo '</a>' ?></td>
                            <td style="border-bottom: 1px solid rgb(85, 85, 85); padding: 0px; margin: 0px; font-family: arial; font-weight: bold; text-align: right;" valign="top" width="450">
                              <table class="social-media" style="font-family: verdana; margin: 0px 10px 1px;" border="0" cellpadding="2" cellspacing="0" align="right">
                                <tbody>
                                  <tr>
                                    <td><a href="https://www.facebook.com/pages/Colorado-School-of-Mines-Alumni/286112261448522" target="_blank"><img src="https://admin.imodules.com/s/840/images/editor/general/social_media/facebook17.jpg" alt="facebook" border="0" height="17" width="17"></a></td>
                                    <td><a href="https://plus.google.com/u/2/b/116786632222030135639/" target="_blank"><img src="https://admin.imodules.com/s/840/images/editor/general/social_media/googleplus17.jpg" alt="Google+" border="0" height="17" width="17"></a></td>
                                    <td><a href="http://www.linkedin.com/groups?home=&amp;gid=77057&amp;trk=anet_ug_hm" target="_blank"><img src="https://admin.imodules.com/s/840/images/editor/general/social_media/linkedin17.jpg" alt="linkedin" border="0" height="17" width="17"></a></td>
                                    <td><a href="https://twitter.com/#%21/MinesAlumni" target="_blank"><img src="https://admin.imodules.com/s/840/images/editor/general/social_media/twitter17.jpg" alt="twitter" border="0" height="17" width="17"></a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                      <?php } else { ?>
                        <tr class="title <?php echo $section[$i]["name"]; ?>" bgcolor="#cc9e54">
                          <td style="border-top: 1px solid rgb(85, 85, 85); border-bottom: 1px solid rgb(85, 85, 85); padding: 2px 10px; font-family: arial; font-weight: bold; text-transform: uppercase;" colspan="2" valign="top" width="600"><?php if($section[$i]["link"]) echo '<a href="' . $section[$i]["link"] . '" target="_blank" style="color: #000000; text-decoration: none;">'; ?><?php echo $section[$i]["name"]; ?><?php if($section[$i]["link"]) echo '</a>' ?></td>
                        </tr>
                      <?php } ?>
                        <tr class="content <?php echo $section[$i]["name"]; ?>" bgcolor="#dde8ea">
                          <td class="content-image" width="150" align="center">
                          <a href="<?php echo $section[$i]["secImageLink"]; ?>" target="_blank"><img src="<?php echo $section[$i]["secImage"]; ?>" style="border: 1px solid rgb(0, 0, 0); padding: 1px; background: none repeat scroll 0% 0% rgb(255, 255, 255);" vspace="15" width="100"></a>
                          </td>
                          <td width="475">
                          <ul style="margin: 5px 25px 15px; padding: 0px; font-family: tahoma; font-size: 15px; list-style-type: circle;">
                            <?php for($j = 0; $j < $section[$i]["lines"]; $j++) { ?>
                              <?php $lineTitle = 'line' . $j; ?>
                              <li>
                                <a href="<?php echo $section[$i][$lineTitle]["link"]; ?>" target="_blank"><?php echo $section[$i][$lineTitle]["text"]; ?></a>
                              </li>
                            <?php } ?>
                          </ul>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                      <td valign="top">
                      <!-- Footer -->
                      <table style="background: none repeat scroll 0% 0% rgb(213, 203, 173); margin-bottom: 10px; border-left: 3px double rgb(85, 85, 85); border-bottom: 3px double rgb(85, 85, 85); border-right: 3px double rgb(85, 85, 85); padding: 0px; font-family: Verdana; font-size: 12px;" bgcolor="#d5cbad" border="0" cellpadding="0" cellspacing="0" width="600" align="center">
                          <tbody>
                              <tr style="background: none repeat scroll 0% 0% rgb(221, 232, 234);" bgcolor="#dde8ea">
                                  <td class="footer-personal" style="border-right: 1px solid rgb(85, 85, 85); padding: 5px 15px 5px 5px;" bgcolor="#d5cbad" valign="top" width="190">
                                  <p class="title" style="margin: 2px -5px 5px 10px; border-bottom: 1px solid rgb(85, 85, 85); font-weight: bold;" align="right">My Info</p>
                                  <p style="padding: 1px;" align="right">##Salutation## ##Last Name##<br>
                                  ##Home Street 2##
                                  ##Home Street 1##<br>
                                  ##Home Phone##<br>
                                  ##Job Title##<br>
                                  ##Business Company Name Line 1##</p>
                                  <p style="margin-bottom: 3px;" align="right"><a href="http://minesonline.net/s/840/NHindex.aspx?pgid=1372" target="_blank" style="padding: 1px; text-decoration: none; color: rgb(30, 66, 100);">-update my info-</a></p>
                                  <p style="margin: 0pt; font-size: 9px;" align="right">Authenticator ID: ##Authenticator_id##</p>
                                  </td>
                                  <td style="padding-left: 12px;" bgcolor="#d5cbad" valign="middle" width="410">
                                  <table class="footer-resources" style="font-family: verdana;" bgcolor="#d5cbad" border="0" cellpadding="4" cellspacing="0">
                                      <tbody>
                                          <tr bgcolor="#d5cbad">
                                              <td valign="top">
                                              <a href="http://minesonline.net/" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">minesalumni.com</a>
                                              </td>
                                              <td valign="top">
                                              <br>
                                              </td>
                                              <td valign="top">
                                              <a href="http://minesmagazine.com/" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">minesmagazine.com</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td valign="top">
                                              <a href="http://minesmagazine.com/?feed=rss2" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;"><span style="font-style: italic;">Mines</span> magazine RSS <img src="https://admin.imodules.com/s/840/images/editor/general/rss-20px.jpg" style="" border="0" height="12" width="12"></a>
                                              </td>
                                              <td valign="top">
                                              <br>
                                              </td>
                                              <td valign="top">
                                              <a href="http://minesonline.net/controls/cms_v2/components/rss/rss.aspx?calcid=745" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Events RSS <img src="https://admin.imodules.com/s/840/images/editor/general/rss-20px.jpg" style="" border="0" height="12" width="12"></a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td valign="top">
                                              <a href="https://secure.imodules.com/s/840/NHindex.aspx?sid=840&amp;gid=1&amp;pgid=344&amp;cid=864&amp;" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Update Membership</a>
                                              </td>
                                              <td valign="top">
                                              <br>
                                              </td>
                                              <td valign="top">
                                              <a href="http://minesonline.net/s/840/index.aspx?sid=840&amp;gid=1&amp;pgid=213&amp;from=mt&amp;cid=287" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Class Notes</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td valign="top">
                                              <a href="http://www.mines.edu/" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">CSM Website</a>
                                              </td>
                                              <td valign="top">
                                              <br>
                                              </td>
                                              <td valign="top">
                                              <a href="http://minesonline.net/s/840/index.aspx?sid=840&amp;gid=1&amp;pgid=6&amp;cid=41" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Online Directory</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td valign="top">
                                              <a href="http://minesonline.net/s/840/index.aspx?sid=840&amp;gid=1&amp;pgid=859" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Post or Search for a Job</a>
                                              </td>
                                              <td valign="top">
                                              <br>
                                              </td>
                                              <td>
                                              <a href="http://minesonline.net/s/840/NHindex.aspx?sid=840&amp;gid=1&amp;pgid=369" target="_blank" style="text-decoration: none; color: rgb(30, 66, 100); font-size: 15px;">Buy Mines Plates</a>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  </td>
                              </tr>
                              <tr style="background: none repeat scroll 0% 0% rgb(213, 203, 173);">
                                  <td colspan="2" style="font-size: 0px;" bgcolor="#d5cbad" height="10" valign="top" width="600">
                                  <img src="https://admin.imodules.com/s/840/images/editor/general/spacer.gif" height="1" width="600">
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </body>
</html>