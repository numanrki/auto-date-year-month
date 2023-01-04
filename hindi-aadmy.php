<?php

  // Function to generate the current day of the week in Hindi
function current_day_of_week_in_hindi_shortcode_aadmy() {
  // Get the current day of the week
  $day_of_week = date('l');
  // Convert the day of the week to Hindi words
  $hindi_day_of_week = convert_english_day_to_hindi_day_aadmy($day_of_week);
  // Return the day of the week in Hindi
  return $hindi_day_of_week;
}

// Register the shortcode
add_shortcode('c_day_hi', 'current_day_of_week_in_hindi_shortcode_aadmy');

// Function to convert English days to Hindi days
function convert_english_day_to_hindi_day($english_day) {
  // Array of English days and their corresponding Hindi days
  $days = array(
    'Sunday' => 'रविवार',
    'Monday' => 'सोमवार',
    'Tuesday' => 'मंगलवार',
    'Wednesday' => 'बुधवार',
    'Thursday' => 'गुरुवार',
    'Friday' => 'शुक्रवार',
    'Saturday' => 'शनिवार',
  );
  // Return the Hindi day for the given English day
  return $days[$english_day];
}

    // Function to generate the current month in Hindi
function current_month_in_hindi_shortcode_aadmy() {
  // Get the current month
  $month = date('n');
  // Convert the month to Hindi words
  $hindi_month = convert_number_to_hindi_month_aadmy($month);
  // Return the month in Hindi
  return $hindi_month;
}

// Register the shortcode
add_shortcode('c_month_hi', 'current_month_in_hindi_shortcode_aadmy');

// Function to convert numbers to Hindi months
function convert_number_to_hindi_month_aadmy($number) {
  // Hindi words for months
  $hindi_months = array(
    '1' => 'जनवरी',
    '2' => 'फरवरी',
    '3' => 'मार्च',
    '4' => 'अप्रैल',
    '5' => 'मई',
    '6' => 'जून',
    '7' => 'जुलाई',
    '8' => 'अगस्त',
    '9' => 'सितम्बर',
    '10' => 'अक्टूबर',
    '11' => 'नवंबर',
    '12' => 'दिसम्बर',
  );
  // Get the Hindi month
  $hindi_month = $hindi_months[$number];
  // Return the Hindi month
  return $hindi_month;
}
