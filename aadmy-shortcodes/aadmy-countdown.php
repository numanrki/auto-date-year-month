<?php

// Countdown Full shortocde function
function aadmy_countdown($atts) {
    // Extract the 'date' attribute and ensure the user provides it
    $attributes = shortcode_atts(array(
        'date' => '', // No default date, user must input the date
    ), $atts);

    // Check if the user provided a date
    if (empty($attributes['date'])) {
        return "Error: Please provide a valid date.";
    }

    // Get the target date from user input
    $target_date = new DateTime($attributes['date']);
    $target_timestamp = $target_date->getTimestamp() * 1000; // Convert to milliseconds for JavaScript

    // Output HTML with JavaScript-enabled countdown container
    return '
        <div id="aadmy-countdown" data-target="' . $target_timestamp . '"></div>
        <script>
            (function() {
                var countdown = document.getElementById("aadmy-countdown");
                var targetDate = countdown.getAttribute("data-target");

                function updateCountdown() {
                    var now = new Date().getTime();
                    var timeLeft = targetDate - now;

                    // Calculate time components
                    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    // Display the result in full format
                    countdown.innerHTML = days + " days, " + hours + " hours, " + minutes + " minutes, " + seconds + " seconds";

                    // If the countdown is over, display a message
                    if (timeLeft < 0) {
                        clearInterval(countdownTimer);
                        countdown.innerHTML = "The countdown has ended!";
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
        return "Error: Please provide a valid date.";
    }

    // Get the target date from user input
    $target_date = new DateTime($attributes['date']);
    $target_timestamp = $target_date->getTimestamp() * 1000; // Convert to milliseconds for JavaScript

    // Output HTML with JavaScript-enabled countdown container
    return '
        <div id="aadmy-simple-countdown" data-target="' . $target_timestamp . '"></div>
        <script>
            (function() {
                var countdown = document.getElementById("aadmy-simple-countdown");
                var targetDate = countdown.getAttribute("data-target");

                function updateSimpleCountdown() {
                    var now = new Date().getTime();
                    var timeLeft = targetDate - now;

                    // Calculate time components
                    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    // Display the result in short format
                    countdown.innerHTML = days + "d, " + hours + "h, " + minutes + "m, " + seconds + "s";

                    // If the countdown is over, display a message
                    if (timeLeft < 0) {
                        clearInterval(countdownTimer);
                        countdown.innerHTML = "The countdown has ended!";
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
