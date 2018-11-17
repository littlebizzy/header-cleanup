=== Header Cleanup ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: header, cleanup, remove, meta, junk
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.2.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: HDRCLN

Cleans up most of the unnecessary junk meta included by default in the WordPress header including generator, RSD, shortlink, previous and next, etc.

== Description ==

Cleans up most of the unnecessary junk meta included by default in the WordPress header including generator, RSD, shortlink, previous and next, etc.

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/header-cleanup-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/header-cleanup)
* [Plugin GitHub](https://github.com/littlebizzy/header-cleanup)

#### Current Features ####

WordPress Core includes several meta items in the header that many sites don't require. For cleaner and simpler code, this plugin is recommended to help simplify your header for SEO and general code cleanliness.

The problem with many "cleanup" plugins with WordPress is that they don't focus on one purpose, but rather mix and match various goals in a confusing manner; for example they might remove some "junk code" from the header, but also totally disable the functionality of a built-in Core function too such as the REST API or RSS feeds. Since our goal is to be hyper organized and clear about each of our plugin's goals, keep in mind that this plugin's sole purpose is to cleanup source code in the header and is not meant to actually disable any functionality. Instead, if you wish to disable certain functions, you can install this plugin alonside our other plugins such as Disable Emojis, Disable XML-RPC, Disable Embeds, Disable REST API, Disable Feeds, etc. (some of these functions' header data is not removed by this plugin to prevent breaking their functionality).

Removes all of the following code:

* Removes `rsd_link`
* Removes `wp_generator` 
* Removes `wc_generator_tag`
* Removes `wlwmanifest_link`
* Removes `wp_shortlink_wp_head`
* Removes `start_post_rel_link`
* Removes `parent_post_rel_link`
* Removes `index_rel_link`
* Removes `adjacent_posts_rel_link`
* Removes `adjacent_posts_rel_link_wp_head`
* Removes `feed_links`
* Removes `feed_links_extra`
* Removes `rest_output_link_wp_head`
* Removes `wp_resource_hints`

Partially inspired by: 

* [WP Head Cleanup](https://wordpress.org/plugins/wp-head-cleanup/)
* [Clean Up WP Head](https://wordpress.org/plugins/clean-up-wp-head/)
* [WP Helper Master](https://wordpress.org/plugins/wp-helper-master/)
* [Remove WP Meta Tags](https://wordpress.org/plugins/remove-wp-meta-tags/)
* [WP Head Cleaner](https://wordpress.org/plugins/wp-head-cleaner/)
* [WP Head Section Cleaner](https://wordpress.org/plugins/wp-head-section-cleaner/)
* [Useless Header Remover](https://wordpress.org/plugins/useless-headers-remover/)
* [Remove WP Version And Shortlink](https://wordpress.org/plugins/remove-wp-version-and-shortlink/)
* [WS Header Cleaner](https://wordpress.org/plugins/ws-header-cleaner/)

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);

#### Technical Details ####

* Prefix: HDRCLN
* Parent Plugin: [**Speed Demon**](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
  * Creates New WP Cron Jobs: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/header-cleanup-littlebizzy`
2. Activate via WP Admin > Plugins
3. Check header source code to verify cleanup

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is no settings page for top speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.2.0 =
* tested with WP 5.0
* updated plugin meta

= 1.1.2 =
* updated recommended plugins

= 1.1.1 =
* updated plugin meta

= 1.1.0 =
* versioning correction (major changes in 1.0.2)
* no code changes

= 1.0.2 =
* disables `rest_output_link_wp_head`
* disables `wp_resource_hints`
* added recommended plugins notice
* added rating request notice
* added warning for Multisite installations
* optimized plugin code

= 1.0.1 =
* fixed: `PHP Notice: Undefined index: woocommerce in ../header-cleanup-littlebizzy/core/cleaner.php`
* (better support for non-WooCommerce sites and older WooCommerce versions)

= 1.0.0 =
* initial release
* tested with PHP 7.0
* plugin uses PHP namespaces
* object-oriented codebase
* disables `rsd_link`
* disables `wp_generator` 
* disables `wc_generator_tag`
* disables `wlwmanifest_link`
* disables `wp_shortlink_wp_head`
* disables `start_post_rel_link`
* disables `parent_post_rel_link`
* disables `index_rel_link`
* disables `adjacent_posts_rel_link`
* disables `adjacent_posts_rel_link_wp_head`
* disables `feed_links`
* disables `feed_links_extra`
