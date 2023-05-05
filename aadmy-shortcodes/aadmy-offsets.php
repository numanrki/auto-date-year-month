<?php
function show_previous_dates_aadmy( $atts ) {
    $atts = shortcode_atts( array(
        'date' => '-1',
    ), $atts );

    $timezone = get_option( 'timezone_string' );
    if ( empty( $timezone ) ) {
        $timezone = 'UTC'; // Default to UTC timezone if not set in WordPress settings
    }
    $now = new DateTime( 'now', new DateTimeZone( $timezone ) );
    $offset = intval( $atts['date'] );
    $prev_date = $now->modify( "{$offset} day" )->format( 'F d, Y' );

    return $prev_date;
}
add_shortcode( 'offset', 'show_previous_dates_aadmy' );