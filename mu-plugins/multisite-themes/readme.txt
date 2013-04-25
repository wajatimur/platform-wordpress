=== Multisite Themes ===
Contributors: maxaud
Donate link: http://playforward.net/multisite-themes.html
Tags: multisite, themes, multi-site, theme, directory, site, wpmu, wpms, multisite themes, network
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 1.3

Adds the ability to have different themes available to different NETWORKS in a multisite atmoshpere.

== Description ==

**(NOTE: Before saying this plugin is broken, please understand what this plugin does. It's meant for WordPress installs that have multiple NETWORKS.)**

Adds the ability to have different themes available to different NETWORKS in a multisite atmoshpere.

WordPress allows for multiple "networks", these are not to be confused with sites. A network holds blogs underneath of it.

This plugin will allow you to separate themes into different directories so they're only accessable and viewable to the networks you choose.

The plugin will attempt to create a directory in the /wp-content/ directory named /ms-themes/. If it fails to create it, then you will need to make one.

In the /ms-themes/ directory you will create a folder for each network that you want to allow only certain themes to.

**Example:**  
If you have a theme named "Snarfer Theme", and you want to only allow it to be viewable/available to the network (and all sites on that network) with the site_id of 7, you would place the snarfer theme directory in /wp-content/ms-themes/7/

**Future releases:**  

* Network option to turn off auto creation on/off network directories, index.php files.
* Network option to display network ID in the footer of sites so network admins can easily tell what network a site is under.

== Installation ==

Drop into either your /mu-plugins/ directory, or your plugins directory and activate it.

1. Upload `ms-themes.php` to the `/wp-content/plugins/` directory, or the `/wp-content/mu-plugins/` directory.
1. Activate the plugin network-wide through the 'Plugins' menu in WordPress (if placed in the the `/wp-content/plugins/` directory)
1. Place theme files in their appropriate network directories in `/wp-content/ms-themes/`

== Frequently Asked Questions ==

= Why? =

I was providing clients with wpmu/wpms sites and I needed a way to make only certain themes available to certain network admins.

= This is already doable when you edit a blog in the admin! =

This is a common misconception.
Technically it's not. 
Remember, a network is different than a site. A network contains sites.
A network can be at Domain1.com while you have another network at Domain2.com, both with different sites underneath of them

== Screenshots ==


== Changelog ==

= 1.3 =

* Changed function hook as recommended by Daniel Bachhuber: http://wordpress.org/support/profile/danielbachhuber
* Changed files to reflect name changes that WordPress 3.0 brought fourth when inegration MU. Changed "Site" to "Network" and "Blog" to "Site."


= 1.2 =

* Auto creation of the /ms-themes/ directory
* Auto creation of /index.php in /ms-themes/ directory (prevents directory from being indexed)
* Auto creation of /index.php in /ms-themes/## directory where ## is the site's id (prevents directory from being indexed)
* The newly created /index.php files redirect to the site's domain when you navigate to them


= 1.1 =

* Fixed some coding errors.

= 1.0 =

* First Release.

== Upgrade Notice ==

= 1.1 =

Fixed some coding errors.