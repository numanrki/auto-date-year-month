=== AADMY - Add Auto Date Month Year Into Posts ===
Contributors: numanrki, sallubhatti2, arslanrki
Tags: SEO, current year, year, shortcode, current year shortcode, copyright, copyright shortcode, trademark, copyright symbol, trademark shortcode, trademark symbol, symbol shortcode
Author URI: https://wordpress.org/plugins/auto-date-year-month/
Author: https://numanrki.com
Donate link: https://bit.ly/aadmyCoffee
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.1.7
Requires PHP: 7.0
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

== Description ==
This WordPress plugin allows you to dynamically add current dates, years, months, and other time-related elements to your content. It helps to keep your content up-to-date and improve your SEO thus ensuring that your website's content is always fresh and relevant. With this plugin, you can easily add dynamic current time elements to your website without any coding knowledge.

* This plugin adds the following short codes to your WordPress Blog/Site:

* **[cy]** - Stands For [Current Year] This would output the current year, the previous year, and the next year in the post, like this: (e.g. 2024)
* **[py]** - Stands For [Previous Year] Outputs the previous year (e.g. 2023)
* **[ny]** - Stands For [Next Year] Outputs the next year (e.g. 2025)
* **[today]** - Stands For [Today Full Date] Outputs the Full Date, month and year  (e.g. November 09, 1994)
* **[tomorrow]** Stands For Next Day Full Date e.g, (Today is **April 16, 2024** it will show the **April 17, 2024** using simple shortcode **[tomorrow]**)
* **[cd]** - Stands For [Current Date] Outputs the Current Day  (e.g. 27)
* **[pd]** - Stands For [Previous day] Outputs the Previous Day  (e.g. Thursday)
* **[day]** - Stands For [day] Outputs the Current Day  (e.g. Friday)
* **[nd]** - Stands For [Next day] Outputs the Previous Day  (e.g. Saturday)
* **[cm]** - Stands For [Current Month] Outputs the Current Month (e.g. December)
* **[nm]** - Stands For [Next Month] Outputs the name of next month  (e.g. This month is December when you use given shortcode output must be January)
* **[pm]** - Stands For [Previous Month] Outputs the name of previous month  (e.g. This month is December when you use given shortcode output must be November)

== [offset] ==
* This shortcode will display a previous or future date based on an offset from the current date. Usage: **[offset date="OFFSET"]**, where **"OFFSET"** is an integer representing the number of days before **(-)** or after **(+)** the current date. Examples:
1. **[offset date="-1"]** will display the previous date based on the user's timezone. Example output: **"May 4, 2023"**.
2. **[offset date="0"]** is equivalent to **[today]** and will display the current date. Example output: **"May 5, 2023"**.
3. **[offset date="1"]** will display the next date based on the user's timezone. Example output: **"May 6, 2023"**.
4. **[offset date="365"]** will display the date one year from the current date based on the user's timezone. Example output: **"May 5, 2024"**.

Note that the date format is "F j, Y" (e.g. "May 5, 2023"). You can modify this format by editing the `show_previous_dates()` function in the `functions.php` file.

== Other Shortcodes ==
* **[fcr]** - Stands For [Full Copyrights] Outputs the Footer Copyrights with (All Rights Reserved) text.
* **[c]** - Stands For [Just Copyrights Symbol] Outputs the © Symbol if user want show this symbol anywhere in where installed this plugin
* **[st]** - Stands For [Site Title] Outputs the Site URL with anchoring the Site Name 
* **[post_modified]**: Use this shortcode to display the updated date of a post or page. It will show the date in the format "Month Day, Year" (e.g., May 27, 2023).
* **[post_mdt]**: Use this shortcode to display the updated date and time of a post or page. It will show the date in the format "Month Day, Year" and the time in a 12-hour format with AM/PM (e.g., May 27, 2023 at 3:21 PM).
* **[age dob="mm/dd/yyyy"]** With this code, you can use the shortcode **[age dob="11/09/1994"]** in your WordPress content to output the current age based on the provided date of birth.
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

Call Shortcodes with PHP
* Use this: **echo do_shortcode('[shortcode_name]');**

== Compatibility ==
* This plugin is compatible with WordPress versions 4.7 and higher, as well as with any WordPress theme.

== Full Guide ==
* For more information and usage examples, you can visit our [plugin page](https://numanrki.com/aadmy-add-auto-date-month-year.html).
* If you have a problem with our plugin or have any questions, you can contact our support team by emailing dm@numanrki.com or by [visiting our support forum](https://wordpress.org/support/plugin/auto-date-year-month/). We will do our best to assist you and resolve any issues you may have.

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
Yes, you can display the current month or day using the shortcodes **[cm]** respectively. These shortcodes will automatically update to display the current month to the page is loaded.
= How do I add the shortcodes to my website? =
To add the shortcodes to your website, simply insert them into the content of your page or post where you want them to be displayed. You can also add the shortcodes to your theme's template files if you want them to be displayed on multiple pages or posts.
= Can I use your plugin to display the current time? =
No, our plugin does not have a feature to display the current time. However, this feature will be available to use in future updates. 
= How do I Add Current Year in WordPress? or How do I show year in WordPress? =
To add the current year in WordPress, you can use the AADMY plugin and insert the **[cy]** shortcode in your posts or pages. The plugin will automatically display the current year.
= How can I Display the last updated date on my WordPress Posts and Pages? =
To display the last updated date on your WordPress posts and pages, you can use the shortcode **[post_modified]**. Simply add this shortcode to the desired location within your post or page, and the last modified date will be automatically displayed. This is a great way to let your visitors know when your content was last updated, which can help to build trust and credibility with your audience.
= How can I use a dynamic copyright year in WordPress? =
To use a dynamic copyright year in WordPress, you can use the shortcode **[fcr]**, which stands for "Full Copyrights Year." This shortcode will automatically display the current year in your copyright notice, so you don't have to manually update it each year. However, make sure that you have installed the AADMY plugin, which provides this functionality.
= How can I make my WordPress post dynamic? =
To make your WordPress post dynamic, you can use the  [AADMY Plugin](https://wordpress.org/plugins/auto-date-year-month), which provides several dynamic shortcodes to display content dynamically. These shortcodes allow you to insert dynamic elements such as the current date, time, user information, and more. By using these shortcodes, you can make your WordPress post more engaging and personalized for your audience.
= How do I add a date to my WordPress posts? =
To add a date to your WordPress posts, you can use the shortcode [today], which displays the current date dynamically based on your timezone settings in WordPress. Simply insert this shortcode within your post where you want to display the date, and it will automatically update to show the current date whenever the post is viewed.


== Screenshots ==

1. List of shortcodes
2. Table of shortcodes
3. Using of shortcodes
4. output of shortcodes

== Changelog ==

bbbbb

= 1.1.6 =
Shortcodes Enabled For: Jan 10, 2024
SEO Plugins (Yoast, RankMath, SEOPress)
Shortcode Enabled For Elementor Elements
Some Minor Bugs Fixed

= 1.1.5 =
Freemius SDK Version Updated To 2.6.1

= 1.1.4 =
Latest WordPress 6.4 Support Added: Oct 28, 2023
New Abilities Added
Tomorrow Full Date Added e.g, (Today is **September 30, 2023** it will show the **October 01, 2023** using simple shortcode **[tomorrow]**)

= 1.1.3 =
Latest WordPress Support Added: Aug 30, 2023

= 1.1.2 =
Bugs Fixed and Minro Changes Added: May 27, 2023

Two Post Modified Functions are Added (With Date & With Date and Time)
Next and Previous Days Added for Next day use [nd] and for previous Day use [pd]
= 1.1.1 =
Bugs Fixed and Major Changes Added: May 05, 2023

FCR Function Updated (Bug Fixed)
Offset date Function Added
Major Changes
= 1.1.0 =
Bugs Fixed and Minor Changes Added: April 05, 2023

Bugs Fixed
README.txt Updated
FAQ Updated
Contributors Added
Style Rearranged
Useless Files Removed
Welcome Page Edited
= 1.0.9 =
Bugs Fixed and Major Changes Added: April 02, 2023

Bugs Fixed
Main File Renamed
Plugin Renamed
Plugin Description Edited
Session Removed from Copy/Paste
Freemius SDK updated to v2.5.6
= 1.0.8 =
Bugs Fixed and New Shortcodes Added: March 20, 2023

Bugs Fixed
= 1.0.7 =
Bugs Fixed and New Shortcodes Added: March 16, 2023

Bugs Fixed
New Shortcode for Copy Pasting Added
= 1.0.6 =
Bugs Fixed and Shortcodes Changed: January 27, 2023

Bugs Fixed
All Shortcode changed long to short for handle characters issues
= 1.0.5 =
Bugs Fixed and New Shortcodes Added: January 10, 2023

Bugs Fixed
Age Calculator Added use shortcode to calculate The total age
Custom period function added (combined) A duration of years, months, or days can be referred to using this short code.
= 1.0.4 =
Bugs Fixed and New Shortcodes Added: January 05, 2023

Bugs Fixed
New shortcodes added
SEO Plugins Support Added SEOPress/RankMath/YoastSEO
= 1.0.3 =
Bugs Fixed and New Shortcodes Added: December 23, 2022

Bugs Fixed
New shortcodes added
Welcome Page Added
= 1.0.2 =
Bugs Fixed and New shortcodes added: December 22, 2022

Bugs Fixed and New shortcodes added
Copy Symbol & Copyrights Text short code added.
Show Last Modified Date using shortcode added
= 1.0.1 =
Bugs Fixed and Some Other Changings: December 21, 2022

Bugs Fixed
Table and Menu Registered
= 1.0.0 =
Initial Release: December 21, 2022

Initial Release
Now the versions are listed from latest to oldest.