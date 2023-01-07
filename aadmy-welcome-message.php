<html>

<style>
  body{
    background-color: #ffffff;
  }
      .welcome-page-wrap {
    width: 80%; /* Set the width of the welcome page to 80% */
    margin: 0 auto; /* Center the welcome page */
    font-family: Arial, sans-serif; /* Set the font for the welcome page */
  }
  
  h1 {
    text-align: center; /* Center the heading */
    font-size: 2em; /* Set the font size to 2em */
    margin: 20px 0; /* Add a margin of 20px at the top and bottom of the heading */
    font-family: 'Roboto', sans-serif;
    text-shadow: 2px 2px 2px rgba(0,0,0,0.5);
  }
  
  p {
    font-size: 1.2em; /* Set the font size to 1.2em */
    line-height: 1.5; /* Set the line height to 1.5 */
    margin: 20px 0; /* Add a margin of 20px at the top and bottom of the paragraphs */
  }
  
  ul {
    list-style: none; /* Remove the bullet points from the list */
    margin: 0; /* Remove the margin from the list */
    padding: 0; /* Remove the padding from the list */
  }
  
  li {
    font-size: 1.2em; /* Set the font size to 1.2em */
    margin: 10px 0; /* Add a margin of 10px at the top and bottom of the list items */
  }
  
  a {
    color: #45a049; /* Set the color of the links to black */
    text-decoration: none; /* Remove the underline from the links */
    text-decoration: underline;
  }
  
  a:hover {
    color: #000; /* Set the color of the links on hover to grey */
    text-decoration: underline;
  }
  
  .donate-button {
    display: inline-block; /* Display the button as an inline block */
    padding: 10px 20px; /* Add padding to the button */
    border: none; /* Remove the border from the button */
    border-radius: 4px; /* Add rounded corners to the button */
    background-color: #262484; /* Set the background color of the button to green */
    color: #FEDD04; /* Set the text color of the button to white */
    font-size: 1.2em; /* Set the font size of the button to 1.2em */
    text-align: center; /* Center the text of the button */
    cursor: pointer; /* Change the cursor to a pointer when hovering over the button */
  }
  
  .donate-button:hover {
    color: #262484;
    background-color: #FEDD04; /* Set the background color of the button on hover to a slightly darker green */
  }
  
  table {
  border: 1px solid black;
  font-family: Arial, sans-serif;
  background-color: #fff;
  align-items: center;
  
}
th {
  background-color: #262484;
  font-weight: bold;
  color: #FEDD04;
  border: 0.5px solid #FEDD04;
}
td {
  border: 0.5px solid #FEDD04;
  padding: 10px;
  text-align: center;
}

      </style>
    <body>
    <div class="welcome-page-wrap">
  <h1>Welcome to the AADMY Add Auto Date Month Year Plugin</h1>
  <p>Thank you for installing our plugin. With this plugin, you can easily add auto dates, months, and years to your WordPress posts and pages using shortcodes. Some of the shortcodes that you can use include:</p>
  <div style="display: flex; align-items: center; justify-content: center;">
  <table style="width: 800px;">
  <thead>
    <tr>
      <th>Purpose</th>
      <th>e.g.</th>
      <th>ShortCodes</th>
    </tr>
  </thead>
  <tr>
    <td>Current Year</td>
    <td><?php echo do_shortcode('[c_year]'); ?></td>
    <td><b>[c_year]</b></td>
  </tr>
  <tr>
  <td>Previous Year</td>
    <td><?php echo do_shortcode('[p_year]'); ?></td>
    <td><b>[p_year]</b></td>
  </tr>
  <tr>
    <td>Next Year</td>
    <td><?php echo do_shortcode('[n_year]'); ?></td>
    <td><b>[n_year]</b></td>
  </tr>
  <tr>
    <td>Current Day</td>
    <td><?php echo do_shortcode('[c_day]'); ?></td>
    <td><b>[c_day]</b></td>
  </tr>
  <tr>
    <td>Current Date</td>
    <td><?php echo do_shortcode('[c_date]'); ?></td>
    <td><b>[c_date]</b></td>
  </tr>
  <tr>
    <td>Current Month</td>
    <td><?php echo do_shortcode('[c_month]'); ?></td>
    <td><b>[c_month]</b></td>
  </tr>
  <tr>
    <td>Previous Month</td>
    <td><?php echo do_shortcode('[p_month]'); ?></td>
    <td><b>[p_month]</b></td>
  </tr>
  <tr>
    <td>Next Month</td>
    <td><?php echo do_shortcode('[n_month]'); ?></td>
    <td><b>[n_month]</b></td>
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
  <a class="donate-button" href="https://bit.ly/aadmyDonation" target="_blank">Buy me a coffee</a>
</div>
    </body>
  </html>
