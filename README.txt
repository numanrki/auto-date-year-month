=== AADMY - Add Auto Date Month Year Into Posts ===
Contributors: numanrki
Tags: SEO, current year, previous year, next year, dynamic year, auto date,dynamic date, auto dates in posts
Author URI: https://wordpress.org/plugins/auto-date-year-month/
Author: https://numanrki.com
Donate link: https://bit.ly/aadmyCoffee
Requires at least: 4.7
Tested up to: 6.2
Stable tag: 1.1.0
Requires PHP: 7.0
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html


This WordPress plugin allows you to dynamically add current dates, years, months, and other time-related elements to your content. It helps to keep your content up-to-date and improve your SEO thus ensuring that your website's content is always fresh and relevant. With this plugin, you can easily add dynamic current time elements to your website without any coding knowledge.


== Description ==

This plugin adds the following short codes to your WordPress site:

* **[cy]** - Stands For [Current Year] This would output the current year, the previous year, and the next year in the post, like this: (e.g. 2023)
* **[py]** - Stands For [Previous Year] Outputs the previous year (e.g. 2022)
* **[ny]** - Stands For [Next Year] Outputs the next year (e.g. 2024)
* **[today]** - Stands For [Today Full Date] Outputs the Full Date, month and year  (e.g. November 09, 1994)
* **[cd]** - Stands For [Current Date] Outputs the Current Day  (e.g. 27)
* **[day]** - Stands For [day] Outputs the Current Day  (e.g. Monday)
* **[cm]** - Stands For [Current Month] Outputs the Current Month (e.g. December)
* **[nm]** - Stands For [Next Month] Outputs the name of next month  (e.g. This month is December when you use given shortcode output must be January)
* **[pm]** - Stands For [Previous Month] Outputs the name of previous month  (e.g. This month is December when you use given shortcode output must be November)

== Other Shortcodes ==
* **[fcr]** - Stands For [Full Copyrights] Outputs the Footer Copyrights with (All Rights Reserved) text.
* **[copy]** - Stands For [Just Copyrights Symbol] Outputs the © Symbol if user want show this symbol anywhere in where installed this plugin
* **[st]** - Stands For [Site Title] Outputs the Site URL with anchoring the Site Name 
* **[post_modified]** - This will output the update date of the post or page where the shortcode is placed.
* **[age dob="mm/dd/yyyy"]** With this code, you can use the shortcode [age dob="11/09/1994"] in your WordPress content to output the current age based on the provided date of birth.
* **Note:** Make sure to replace **'11/09/1994'** with the actual date of birth that you want to use.
* **[aadmy_event date="mm/dd/yyyy"]**  A numbers of years can be referred to using this short code. like **[aadmy_event date="04/12/2021"]** outputs the 1 years, 9 months, and 8 days ago
* Setting Shortcodes for Copy
* **[copy name="copy1" value="AADMY Auto Plugin"]** (You can set your own value within the **name=" "** attribute. i used copy1)
* Pasting the Copy shortcode value Here
* **[paste name="copy1"]**
* Similarly, you can create and use additional copy and paste shortcodes with unique names to store and retrieve other values as needed.

* This code is showing you how to create shortcodes for copying and pasting specific values.

* To set a value to be copied, you would use the shortcode **[copy]** and include a name and value attribute, like this: **[copy name="copy1" value="AADMY Auto Plugin"]**

* Then, when you want to paste that value somewhere else, you would use the shortcode **[paste]** and include the name attribute, like this: **[paste name="copy1"]**

* You can create and use additional copy and paste shortcodes with unique names to store and retrieve other values as needed.

Call Shortcodes with in php
* Use this: **echo do_shortcode('[shortcode_name]');**

Compatibility
* This plugin is compatible with WordPress versions 4.7 and higher, as well as with any WordPress theme.

==Full Guide==
* For more information and usage examples, you can visit our [plugin page](https://numanrki.com/aadmy-add-auto-date-month-year.html).

== Installation ==

* Download the plugin file. The plugin file will usually be in the form of a .zip file.

* Log in to your **WordPress dashboard**.

* Navigate to the **"Plugins"** section by clicking on the **"Plugins"** link in the left-hand menu.

* Click on the **"Add New"** button at the top of the page.

* Click on the **"Upload Plugin"** button.

* Choose the **.zip** file you downloaded in step 1, and then click on the **"Install Now"** button.

* Once the plugin has been installed, click on the **"Activate Plugin"** link to activate it.

* The plugin should now be installed and activated on your WordPress site. You can access the plugin's settings and options by clicking on the **"Settings"** link for the plugin on the **"Plugins"** page.

* **Note:** Some plugins may require additional steps to be fully configured and functional on your site. Be sure to read the documentation provided by the plugin developer for any additional instructions.


== Upgrade Notice ==

* Attention users of the (AADMY) Add Auto Date Month Year In Posts Dynamically plugin!

* We are excited to announce that a new version of our plugin is now available for upgrade. This update includes several new features and bug fixes to improve the overall performance of the plugin.

* Here are some of the highlights of this update:

* Feature 1: Dynamically Add Current Date, Day, Month, Year 
* Bug fix: Fix the Output and set it to localized

== Frequently Asked Questions ==

= Can I display the current month or day using your plugin? =
Yes, you can display the current month or day using the shortcodes [c_month] respectively. These shortcodes will automatically update to display the current month to the page is loaded.
= How do I add the shortcodes to my website? =
To add the shortcodes to your website, simply insert them into the content of your page or post where you want them to be displayed. You can also add the shortcodes to your theme's template files if you want them to be displayed on multiple pages or posts.
= Can I use your plugin to display the current time? =
No, our plugin does not have a feature to display the current time. However, this feature will be available to use in future updates. 


* If you have a problem with our plugin or have any questions, you can contact our support team by emailing salam@numanrki.com or by [visiting our support forum](https://wordpress.org/support/plugin/auto-date-year-month/). We will do our best to assist you and resolve any issues you may have.


== Screenshots ==

1. List of shortcodes
2. Table of shortcodes
3. Using of shortcodes
4. output of shortcodes

== Changelog ==

= 1.0.0 =
Initial Release: December 21, 2022

* Initial Release

= 1.0.1 =
Bugs Fixed and Some Other Changings: December 21, 2022

* Bugs Fixed
* Table and Menu Registered

= 1.0.2 =
Bugs Fixed and New shortcodes added: December 22, 2022

* Bugs Fixed and New shortcodes added
* Copy Symbol & Copyrights Text short code added.
* Show Last Modified Date using shortcode added

= 1.0.3 =
Bugs Fixed and New Shortcodes Added:December 23, 2022

* Bugs Fixed
* New shortcodes added
* Welcome Page Added

= 1.0.4 =
Bugs Fixed and New Shortcodes Added: January 05, 2023

* Bugs Fixed
* New shortcodes added
* SEO Plugins Support Added SEOPress/RankMath/YoastSEO

= 1.0.5 =
Bugs Fixed and New Shortcodes Added: January 10, 2023

* Bugs Fixed
* Age Calculator Added use shortcode to calculate The total age
* Custom period function added (combined) A duration of years, months, or days can be referred to using this short code.

= 1.0.6 =
Bugs Fixed and Shortcodes Changed: January 27, 2023

* Bugs Fixed
* All Shortcode changed long to short for handle characters issues

= 1.0.7 =
Bugs Fixed and New Shortcodes Added: March  16, 2023

* Bugs Fixed
* New Shortcode for Copy Pasting Added

= 1.0.8 =
Bugs Fixed and New Shortcodes Added: March  20, 2023

* Bugs Fixed

= 1.0.9 =
Bugs Fixed and New Shortcodes Added: March  28, 2023

* Bugs Fixed
* Main File Renamed
* Plugin Renamed
* Plugin Description Edited
* Session Removed from Copy/Paste