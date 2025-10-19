<?php

// Countdown Full shortcode function
function aadmy_countdown($atts) {
    // Extract the 'date' attribute and ensure the user provides it
    $attributes = shortcode_atts(array(
        'date' => '', // No default date, user must input the date
    ), $atts);

    // Check if the user provided a date
    if (empty($attributes['date'])) {
        return __('Error: Please provide a valid date.', 'aadmy-plugin');
    }

    // Get the target date from user input and localize it
    $target_date = new DateTime($attributes['date']);
    $target_timestamp = $target_date->getTimestamp(); // Get timestamp in seconds

    // Output HTML with JavaScript-enabled countdown container
    return '
        <span class="aadmy-countdown-wrapper" style="display: inline;">
            <span id="aadmy-countdown" data-target="' . $target_timestamp . '" data-localized-date="' . esc_attr($target_date->format('Y-m-d H:i:s')) . '"></span>
        </span>
        <script>
            (function() {
                var countdown = document.getElementById("aadmy-countdown");
                var targetDate = parseInt(countdown.getAttribute("data-target"), 10) * 1000; // Convert to milliseconds

                function updateCountdown() {
                    var now = new Date().getTime();
                    var timeLeft = targetDate - now;

                    // Calculate time components
                    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    // Display the result in full format without overriding styles
                    countdown.textContent = days + " ' . __('days', 'aadmy-plugin') . ', " + hours + " ' . __('hours', 'aadmy-plugin') . ', " + minutes + " ' . __('minutes', 'aadmy-plugin') . ', " + seconds + " ' . __('seconds', 'aadmy-plugin') . '";

                    // If the countdown is over, display a message
                    if (timeLeft < 0) {
                        clearInterval(countdownTimer);
                        countdown.textContent = "' . __('The countdown has ended!', 'aadmy-plugin') . '";
                    }
                }

                // Update countdown every second
                var countdownTimer = setInterval(updateCountdown, 1000);
                updateCountdown(); // Initial call to display the countdown immediately
            })();
        </script>';
}

// Register the shortcode for detailed countdown
add_shortcode('countdown', 'aadmy_countdown');

// Countdown Short Function
function aadmy_countdown_simple($atts) {
    // Extract the 'date' attribute and ensure the user provides it
    $attributes = shortcode_atts(array(
        'date' => '', // No default date, user must input the date
    ), $atts);

    // Check if the user provided a date
    if (empty($attributes['date'])) {
        return __('Error: Please provide a valid date.', 'aadmy-plugin');
    }

    // Get the target date from user input and localize it
    $target_date = new DateTime($attributes['date']);
    $target_timestamp = $target_date->getTimestamp(); // Get timestamp in seconds

    // Output HTML with JavaScript-enabled countdown container
    return '
        <span class="aadmy-countdown-wrapper" style="display: inline;">
            <span id="aadmy-simple-countdown" data-target="' . $target_timestamp . '" data-localized-date="' . esc_attr($target_date->format('Y-m-d H:i:s')) . '"></span>
        </span>
        <script>
            (function() {
                var countdown = document.getElementById("aadmy-simple-countdown");
                var targetDate = parseInt(countdown.getAttribute("data-target"), 10) * 1000; // Convert to milliseconds

                function updateSimpleCountdown() {
                    var now = new Date().getTime();
                    var timeLeft = targetDate - now;

                    // Calculate time components
                    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    // Display the result in short format without overriding styles
                    countdown.textContent = days + "d, " + hours + "h, " + minutes + "m, " + seconds + "s";

                    // If the countdown is over, display a message
                    if (timeLeft < 0) {
                        clearInterval(countdownTimer);
                        countdown.textContent = "' . __('The countdown has ended!', 'aadmy-plugin') . '";
                    }
                }

                // Update countdown every second
                var countdownTimer = setInterval(updateSimpleCountdown, 1000);
                updateSimpleCountdown(); // Initial call to display the countdown immediately
            })();
        </script>';
}

// Register the shortcode for simple countdown
add_shortcode('cdown_short', 'aadmy_countdown_simple');

