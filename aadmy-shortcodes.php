
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  padding-right: 15px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="aadmy-table">

<h2>(AADMY) Add Auto Date Month Year In Posts/Pages Dynamically Shortcodes List</h2>

<table>
  <tr>
    <th>Purpose</th>
    <th>e.g.</th>
    <th>ShortCodes</th>
  </tr>
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
<h2>(AADMY) Extra Shortcodes List (Coming Soon)</h2>
<table>
<tr>
    <th>Purpose</th>
    <th>e.g.</th>
    <th>ShortCodes</th>
  </tr>
  <!-- <tr>
    <td>Site Title with Anchor</td>
    <td><?php echo do_shortcode('[s_title]'); ?></td>
    <td><b>[s_title]</b></td>
  </tr>
  <tr>
    <td>Copy Right Symbol</td>
    <td><?php echo do_shortcode('[copy]'); ?></td>
    <td><b>[copy]</b></td>
  </tr>
  <tr>
    <td>Show Full Copy Rights Text</td>
    <td><?php echo do_shortcode('[f_copyrights]'); ?></td>
    <td><b>[f_copyrights]</b></td>
  </tr> -->
</table>
    </div>