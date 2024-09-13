<?php
// Function to display the admin notice for donations with customizable dismissal time
function aadmy_admin_notice($time_in_minutes = 4320) {
    // Convert time from minutes to seconds
    $time_in_seconds = $time_in_minutes * 60;

    // Check if the cookie exists and if it's still within the valid time period
    if (!isset($_COOKIE['aadmy_donation_notice']) || time() - $_COOKIE['aadmy_donation_notice'] > $time_in_seconds) {
        ?>
        <div class="notice notice-success is-dismissible aadmy-donation-notice">
            <p>
                <strong>Thank you for using the AADMY Auto Date Year Month Plugin!</strong> 
                If you find it useful, please consider 
                <a href="https://buymeacoffee.com/numanrki" target="_blank" style="color: #E60023; font-weight: bold;">making a donation</a>
                to support its ongoing development.
                <a href="#" class="aadmy-hide-72-hours" style="float:right; font-size: 0.9em;">(Hide for <?php echo $time_in_minutes/60; ?> hours)</a>
            </p>
        </div>

        <script type="text/javascript">
            (function($) {
                // Set the cookie to hide the notice for the configured time period when "Hide for X hours" is clicked
                $(document).on('click', '.aadmy-hide-72-hours', function(e) {
                    e.preventDefault(); // Prevent default link behavior

                    var date = new Date();
                    date.setTime(date.getTime() + (<?php echo $time_in_seconds; ?> * 1000)); // Configured time from now
                    document.cookie = "aadmy_donation_notice=" + Math.floor(Date.now() / 1000) + "; expires=" + date.toUTCString() + "; path=/";

                    // Hide the notice immediately after clicking "Hide for X hours"
                    $(this).closest('.aadmy-donation-notice').fadeOut();
                });

                // Default dismiss behavior when the cross button is clicked
                $(document).on('click', '.aadmy-donation-notice .notice-dismiss', function() {
                    // This will only dismiss the notice for the current session (without setting the cookie)
                    $(this).closest('.aadmy-donation-notice').fadeOut();
                });
            })(jQuery);
        </script>
        <?php
    }
}
add_action('admin_notices', function() {
   
    aadmy_admin_notice(4320); // Example: 60 minutes for testing, change this value as per your requirement
});
