<html>
<?php
  $css_path = plugins_url( '/css/addmy-style.css', __FILE__ );
  $js_path = plugins_url( '/js/aadmy-script.js', __FILE__ ); // Path to the JS file
?>
<link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>">



  <body>
    <div class="welcome-page-wrap">
    <div style="text-align: center; margin-bottom: -35px;">
    <a href="https://wordpress.org/plugins/auto-date-year-month/" target="_blank"><img src="<?php echo plugins_url('/aadmy-assets/logos/aadmy-logo.svg', dirname(__FILE__)); ?>" alt="AADMY Logo"></a>
</div>
      <h1>Welcome to the AADMY Add Auto Date Month Year Plugin</h1>
      <p>Thank you for installing our plugin. With this plugin, you can easily add auto dates, months, and years to your WordPress posts and pages using shortcodes. Some of the shortcodes that you can use include:</p>
      
      <div style="display: flex; align-items: center; justify-content: center;">
        <table style="width: 1000px;" class="styled-table">
          <thead>
            <tr class="active-row">
              <th>Purpose</th>
              <th>e.g.</th>
              <th>ShortCodes</th>
              <th>Copy</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Current Year</td>
              <td><?php echo do_shortcode('[cy]'); ?></td>
              <td><b>[cy]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[cy]')">Copy</a></td>
            </tr>
            <tr>
              <td>Previous Year</td>
              <td><?php echo do_shortcode('[py]'); ?></td>
              <td><b>[py]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[py]')">Copy</a></td>
            </tr>
            <tr>
              <td>Next Year</td>
              <td><?php echo do_shortcode('[ny]'); ?></td>
              <td><b>[ny]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[ny]')">Copy</a></td>
            </tr>
            <tr>
              <td>Current Day</td>
              <td><?php echo do_shortcode('[day]'); ?></td>
              <td><b>[day]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[day]')">Copy</a></td>
            </tr>
            <tr>
              <td>Current Date</td>
              <td><?php echo do_shortcode('[cd]'); ?></td>
              <td><b>[cd]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[cd]')">Copy</a></td>
            </tr>
            <tr>
              <td>Current Month</td>
              <td><?php echo do_shortcode('[cm]'); ?></td>
              <td><b>[cm]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[cm]')">Copy</a></td>
            </tr>
            <tr>
              <td>Previous Month</td>
              <td><?php echo do_shortcode('[pm]'); ?></td>
              <td><b>[pm]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[pm]')">Copy</a></td>
            </tr>
            <tr>
              <td>Next Month</td>
              <td><?php echo do_shortcode('[nm]'); ?></td>
              <td><b>[nm]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[nm]')">Copy</a></td>
            </tr>
            <tr>
              <td>Full Date</td>
              <td><?php echo do_shortcode('[today]'); ?></td>
              <td><b>[today]</b></td>
              <td><a href="#" class="copy-link" onclick="copyShortcodeAadmy(this, '[today]')">Copy</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <p>For more information and usage examples, you can visit our <strong><a class="underlined-link" href="https://bit.ly/AadmyGuide" target="_blank">plugin page</a></strong>.</p>
      <p>If you find this plugin useful, please consider buying us a coffee as a token of your appreciation. We rely on donations to keep our plugin development going and your support is greatly appreciated.</p>
      
    </div>

    <div class="button-aadmy-bottom-container">
      <?php
        $aadmy_support_url = 'https://wordpress.org/support/plugin/auto-date-year-month/';
        $aadmy_review_url = 'https://wordpress.org/support/plugin/auto-date-year-month/reviews/#new-post';
        $aadmy_plugin_url = 'https://bit.ly/AadmyGuide';
        $aadmy_version = constant('Auto_Date_Year_Month_AADMY');
        $facebook_follow_url = 'https://www.facebook.com/aadmyWP'; // Add Facebook page URL here
      ?>
       <a href="https://www.buymeacoffee.com/numanrki"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=☕&slug=numanrki&button_colour=ff0027&font_colour=ffffff&font_family=Cookie&outline_colour=ffffff&coffee_colour=FFDD00" /></a>
      <br>
      <br>
      <a href="<?php echo $aadmy_support_url; ?>" target="_blank" class="button-aadmy-bottom">Support</a>
      <a href="<?php echo $aadmy_review_url; ?>" target="_blank" class="button-aadmy-bottom">Leave Review</a>
      <a href="<?php echo $aadmy_plugin_url; ?>" target="_blank" class="button-aadmy-bottom">Plugin Page</a>
      <a href="<?php echo $facebook_follow_url; ?>" target="_blank" class="button-aadmy-bottom facebook-btn">Follow on Facebook</a>
      <p style="text-align:center; font-size: 12px; color: #666;">AADMY Plugin Version: <?php echo $aadmy_version; ?></p>
    </div>

    <script src="<?php echo $js_path; ?>"></script> <!-- Include JS File -->
  </body>
</html>
