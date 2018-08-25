=== Header Cleanup ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: header, cleanup, remove, meta, junk
Requires at least: 4.4
Tested up to: 4.9
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.1.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: HDRCLN

Cleans up most of the unnecessary junk meta included by default in the WordPress header including generator, RSD, shortlink, previous and next, etc.

== Description ==

Cleans up most of the unnecessary junk meta included by default in the WordPress header including generator, RSD, shortlink, previous and next, etc.

* [**Join our FREE Facebook group for support!**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/header-cleanup-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/header-cleanup)
* [Plugin GitHub](https://github.com/littlebizzy/header-cleanup)

*Our related OSS projects:*

* [SlickStack (LEMP stack automation)](https://slickstack.io)
* [WP Lite boilerplate](https://wplite.org)
* [Starter Theme](https://starter.littlebizzy.com)


#### The Long Version ####

WordPress Core includes several meta items in the header that many sites don't require. For cleaner and simpler code, this plugin is recommended to help simplify your header for SEO and general code cleanliness.

The problem with many "cleanup" plugins with WordPress is that they don't focus on one purpose, but rather mix and match various goals in a confusing manner; for example they might remove some "junk code" from the header, but also totally disable the functionality of a built-in Core function too such as the REST API or RSS feeds. Since our goal is to be hyper organized and clear about each of our plugin's goals, keep in mind that this plugin's sole purpose is to cleanup source code in the header and is not meant to actually disable any functionality. Instead, if you wish to disable certain functions, you can install this plugin alonside our other plugins such as Disable Emojis, Disable XML-RPC, Disable Embeds, Disable REST API, Disable Feeds, etc.

All of the following are completely removed:

* `rsd_link`
* `wp_generator` 
* `wc_generator_tag`
* `wlwmanifest_link`
* `wp_shortlink_wp_head`
* `start_post_rel_link`
* `parent_post_rel_link`
* `index_rel_link`
* `adjacent_posts_rel_link`
* `adjacent_posts_rel_link_wp_head`
* `feed_links`
* `feed_links_extra`
* `rest_output_link_wp_head`
* `wp_resource_hints`

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

#### Plugin Features ####

* Settings Page: No
* Premium Version Available: Yes ([SEO Genius](https://www.littlebizzy.com/plugins/seo-genius))
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Creates New Tables: No
* Database Queries: Backend (Options API)
* Must-Use Support: Yes (Use With [Autoloader](https://github.com/littlebizzy/autoloader))
* Multisite Support: No
* Uninstalls Data: Yes

#### Nag Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 6 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 9 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may annoy or confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community while providing valuable (free) recommendations for optimizing their website.

If you feel that these notices are too annoying, than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel, or even consider developing your own plugins for WordPress, if supporting free plugin authors is too frustrating for you. A final alternative would be to place the defined constant mentioned below inside of your `wp-config.php` file to manually hide this plugin's nag notices:

    define('DISABLE_NAG_NOTICES', true);

Note: This defined constant will only affect the notices mentioned above, and will not affect any other notices generated by this plugin or other plugins, such as one-time notices that communicate with admin-level users.

#### Inspiration ####

* [WP Head Cleanup](https://wordpress.org/plugins/wp-head-cleanup/)
* [Clean Up WP Head](https://wordpress.org/plugins/clean-up-wp-head/)
* [WP Helper Master](https://wordpress.org/plugins/wp-helper-master/)
* [Remove WP Meta Tags](https://wordpress.org/plugins/remove-wp-meta-tags/)
* [WP Head Cleaner](https://wordpress.org/plugins/wp-head-cleaner/)
* [WP Head Section Cleaner](https://wordpress.org/plugins/wp-head-section-cleaner/)
* [Useless Header Remover](https://wordpress.org/plugins/useless-headers-remover/)
* [Remove WP Version And Shortlink](https://wordpress.org/plugins/remove-wp-version-and-shortlink/)
* [WS Header Cleaner](https://wordpress.org/plugins/ws-header-cleaner/)

#### Free Plugins ####

* [404 To Homepage](https://wordpress.org/plugins/404-to-homepage-littlebizzy/)
* [Autoloader](https://github.com/littlebizzy/autoloader)
* [CloudFlare](https://wordpress.org/plugins/cf-littlebizzy/)
* [Delete Expired Transients](https://wordpress.org/plugins/delete-expired-transients-littlebizzy/)
* [Disable Admin-AJAX](https://wordpress.org/plugins/disable-admin-ajax-littlebizzy/)
* [Disable Author Pages](https://wordpress.org/plugins/disable-author-pages-littlebizzy/)
* [Disable Cart Fragments](https://wordpress.org/plugins/disable-cart-fragments-littlebizzy/)
* [Disable Embeds](https://wordpress.org/plugins/disable-embeds-littlebizzy/)
* [Disable Emojis](https://wordpress.org/plugins/disable-emojis-littlebizzy/)
* [Disable Empty Trash](https://wordpress.org/plugins/disable-empty-trash-littlebizzy/)
* [Disable Image Compression](https://wordpress.org/plugins/disable-image-compression-littlebizzy/)
* [Disable jQuery Migrate](https://wordpress.org/plugins/disable-jq-migrate-littlebizzy/)
* [Disable Search](https://wordpress.org/plugins/disable-search-littlebizzy/)
* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Disable WooCommerce Styles](https://wordpress.org/plugins/disable-wc-styles-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [Download Media](https://wordpress.org/plugins/download-media-littlebizzy/)
* [Download Plugin](https://wordpress.org/plugins/download-plugin-littlebizzy/)
* [Download Theme](https://wordpress.org/plugins/download-theme-littlebizzy/)
* [Duplicate Post](https://wordpress.org/plugins/duplicate-post-littlebizzy/)
* [Enable Subtitles](https://wordpress.org/plugins/enable-subtitles-littlebizzy/)
* [Export Database](https://wordpress.org/plugins/export-database-littlebizzy/)
* [Facebook Pixel](https://wordpress.org/plugins/fb-pixel-littlebizzy/)
* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Force Strong Hashing](https://wordpress.org/plugins/force-strong-hashing-littlebizzy/)
* [Google Analytics](https://wordpress.org/plugins/ga-littlebizzy/)
* [Header Cleanup](https://wordpress.org/plugins/header-cleanup-littlebizzy/)
* [Index Autoload](https://wordpress.org/plugins/index-autoload-littlebizzy/)
* [Maintenance Mode](https://wordpress.org/plugins/maintenance-mode-littlebizzy/)
* [Profile Change Alerts](https://wordpress.org/plugins/profile-change-alerts-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [StatCounter](https://wordpress.org/plugins/sc-littlebizzy/)
* [View Defined Constants](https://wordpress.org/plugins/view-defined-constants-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Premium Plugins ####

* [**Members Only**](https://www.littlebizzy.com/members)
* [Dunning Master](https://www.littlebizzy.com/plugins/dunning-master)
* [Genghis Khan](https://www.littlebizzy.com/plugins/genghis-khan)
* [Great Migration](https://www.littlebizzy.com/plugins/great-migration)
* [Security Guard](https://www.littlebizzy.com/plugins/security-guard)
* [SEO Genius](https://www.littlebizzy.com/plugins/seo-genius)
* [Speed Demon](https://www.littlebizzy.com/plugins/speed-demon)

#### Special Thanks ####

* [Alex Georgiou](https://www.alexgeorgiou.gr)
* [Automattic](https://automattic.com)
* [Brad Touesnard](https://bradt.ca)
* [Daniel Auener](http://www.danielauener.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Greg Rickaby](https://gregrickaby.com)
* [Matt Mullenweg](https://ma.tt)
* [Mika Epstein](https://halfelf.org)
* [Mike Garrett](https://mikengarrett.com)
* [Samuel Wood](http://ottopress.com)
* [Scott Reilly](http://coffee2code.com)
* [Jan Dembowski](https://profiles.wordpress.org/jdembowski)
* [Jeff Starr](https://perishablepress.com)
* [Jeff Chandler](https://jeffc.me)
* [Jeff Matson](https://jeffmatson.net)
* [Jeremy Wagner](https://jeremywagner.me)
* [John James Jacoby](https://jjj.blog)
* [Leland Fiegel](https://leland.me)
* [Paul Irish](https://www.paulirish.com)
* [Rahul Bansal](https://profiles.wordpress.org/rahul286)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [Ryan Hellyer](https://geek.hellyer.kiwi)
* [WP Chat](https://wpchat.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above mentioned goals in mind, thanks!

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

= 1.1.1 =
* updated plugin meta

= 1.1.0 =
* versioning correction (major changes in 1.0.2)
* (no code changes)

= 1.0.2 =
* disables `rest_output_link_wp_head`
* disables `wp_resource_hints`
* added recommended plugins notice
* added rating request notice
* added warning for Multisite installations
* optimized plugin code

= 1.0.1 =
* fix: `PHP Notice: Undefined index: woocommerce in ../header-cleanup-littlebizzy/core/cleaner.php`
* (better support for non-WooCommerce and older WooCommerce versions)

= 1.0.0 =
* initial release
* plugin uses PHP namespaces
* object oriented code
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
