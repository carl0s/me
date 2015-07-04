=== Ajax Load More: SEO ===

Contributors: dcooney
Author: Darren Cooney
Author URI: http://connekthq.com/
Plugin URI: http://connekthq.com/ajax-load-more/seo/
Requires at least: 3.6.1
Tested up to: 3.9.1
Stable tag: trunk
Homepage: http://connekthq.com/ajax-load-more/seo/
Version: 1.2.2


== Copyright ==
Copyright 2015 Darren Cooney

This software is NOT to be distributed, but can be INCLUDED in WP themes: Premium or Contracted.
This software is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.


== Description ==

= Optimize your website URLs with the Ajax Load More Search Engine Optimization add-on! =

The SEO add-on will optimize your content for search engines and site visitors by generating unique paging URLs with each Ajax Load More query.

http://connekthq.com/plugins/ajax-load-more/seo/

== Installation ==

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `ajax-load-more-seo.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `ajax-load-more-seo.zip`.
2. Extract the `ajax-load-more-seo` directory to your computer.
3. Upload the `ajax-load-more-seo` directory to the `/wp-content/plugins/` directory.
4. Ensure Ajax Load More is installed prior to activating the plugin.
5. Activate the plugin in the Plugin dashboard.



== Changelog ==

= 1.2.2 =
* FIX - Undefined SEO variable.

= 1.2.1 =
* FIX - Undefined GA variable if in debug mode.
* FIX - Wrapping ga('send') function is isFunction() to protect against errors.

= 1.2 =
* UPDATE - Adding Google Analytics pageview support.
* UPDATE - Moved SEO settings and shortcode settings from core ALM to add-on.
* FIX - Fixed bug with Preloaded + SEO and scrolling to current page.

= 1.1.1 =
* FIX - Fixing bug where SEO scroll was not respected in ALM 2.6.1.

= 1.1 =
* UPDATE - Small performance updates to work with Preloaded and Cache.

= 1.0 =
* Initial Release.
