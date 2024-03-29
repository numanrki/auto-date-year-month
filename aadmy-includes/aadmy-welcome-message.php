<html>
<?php
  $css_path = plugins_url( '/css/addmy-style.css', __FILE__ );
?>
  <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>">
    <body>
    <div class="welcome-page-wrap">
  <h1>Welcome to the AADMY Add Auto Date Month Year Plugin</h1>
  <p>Thank you for installing our plugin. With this plugin, you can easily add auto dates, months, and years to your WordPress posts and pages using shortcodes. Some of the shortcodes that you can use include:</p>
  <div style="display: flex; align-items: center; justify-content: center;">
  <table style="width: 1000px;" class="styled-table">
  <thead>
    <tr class="active-row">
      <th>Purpose</th>
      <th>e.g.</th>
      <th>ShortCodes</th>
    </tr>
  </thead>
  <tr>
    <td>Current Year</td>
    <td><?php echo do_shortcode('[cy]'); ?></td>
    <td><b>[cy]</b></td>
  </tr>
  <tr>
  <td>Previous Year</td>
    <td><?php echo do_shortcode('[py]'); ?></td>
    <td><b>[py]</b></td>
  </tr>
  <tr>
    <td>Next Year</td>
    <td><?php echo do_shortcode('[ny]'); ?></td>
    <td><b>[ny]</b></td>
  </tr>
  <tr>
    <td>Current Day</td>
    <td><?php echo do_shortcode('[day]'); ?></td>
    <td><b>[day]</b></td>
  </tr>
  <tr>
    <td>Current Date</td>
    <td><?php echo do_shortcode('[cd]'); ?></td>
    <td><b>[cd]</b></td>
  </tr>
  <tr>
    <td>Current Month</td>
    <td><?php echo do_shortcode('[cm]'); ?></td>
    <td><b>[cm]</b></td>
  </tr>
  <tr>
    <td>Previous Month</td>
    <td><?php echo do_shortcode('[pm]'); ?></td>
    <td><b>[pm]</b></td>
  </tr>
  <tr>
    <td>Next Month</td>
    <td><?php echo do_shortcode('[nm]'); ?></td>
    <td><b>[nm]</b></td>
  </tr>
  <tr>
    <td>Full Date</td>
    <td><?php echo do_shortcode('[today]'); ?></td>
    <td><b>[today]</b></td>
  </tr>

</table>

</div>
  <p>For more information and usage examples, you can visit our <strong><a class="underlined-link" href="https://bit.ly/AadmyGuide" target="_blank">plugin page</a></strong>.</p>
  <p>If you find this plugin useful, please consider buying us a coffee as a token of your appreciation. We rely on donations to keep our plugin development going and your support is greatly appreciated.</p>
  <a class="donate-button" href="https://bit.ly/aadmyCoffee" target="_blank">Buy me a coffee</a>
</div>

<div class="button-aadmy-bottom-container">
    <?php
        $aadmy_support_url = 'https://wordpress.org/support/plugin/auto-date-year-month/';
        $aadmy_review_url = 'https://wordpress.org/support/plugin/auto-date-year-month/reviews/#new-post';
        $aadmy_plugin_url = 'https://bit.ly/AadmyGuide';
        $aadmy_version = constant('Auto_Date_Year_Month_AADMY');
    ?>
    
    <a href="<?php echo $aadmy_support_url; ?>" target="_blank" class="button-aadmy-bottom">Support</a>
    <a href="<?php echo $aadmy_review_url; ?>" target="_blank" class="button-aadmy-bottom">Leave Review</a>
    <a href="<?php echo $aadmy_plugin_url; ?>" target="_blank" class="button-aadmy-bottom">Plugin Page</a>
	<p style="text-align:center; font-size: 12px; color: #666;">AADMY Plugin Version: <?php echo $aadmy_version; ?></p>
</div>

    </body>
  </html>
