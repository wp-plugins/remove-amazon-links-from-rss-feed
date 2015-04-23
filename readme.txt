=== Plugin Name ===
Contributors: philmcdonnell
Donate link: http://philmcdonnell.com/donate
Tags: amazon, rss, affiliate, links
Requires at least: 3.0
Tested up to: 4.1.2
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes all links to Amazon.com/Amzn.to in the RSS feed.

== Description ==

Removes all links to Amazon.com/Amzn.to in the RSS feed so you will be in compliance with Amazon's Affiliate TOS. According to Amazon you may not use their affiliate links in any email, rss feed, etc. All the original links will still appear within a normal blog post or page.

*Special thanks to Gretchen Louise (gretchenlouise.com) for alpha/beta testing this for me.

== Installation ==

1. Upload remove-amazon-links-from-rss-feed.php` to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy Amazon.com/Amzn.to link free rss feeds

== Frequently Asked Questions ==

= No questions yet =

New release so no questions yet.

== Screenshots ==

N/A

== Changelog ==
= 1.2
* Added the removal of Amzn.to links as well.

= 1.1.1 =
* Fix a spelling mistake in readme file.

= 1.1 =
* First public release on WordPress.org.
* Updated preg_replace to leave everything including html between the removed Amazon <a href> </a> (before it was not working if it encountered any html nested tags).

= 1.0 =
* First private beta release.



