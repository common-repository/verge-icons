=== Verge Icons ===
Contributors: vergemedia
Tags: icons, fonticons, fontawesome
Requires at least: 3.8
Tested up to: 4.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Lightweight icons ready for integrations.

== Description ==

This plugin brings to WordPress various font icons for further customizations.
You can use a shortcode or implement integration with your theme or plugin by
using VergeIconsHelper.

###Features:

* Add icons with shortcode
* Integrate icons to theme or plugin

== Frequently Asked Questions ==

Shortcode usage:
You have to provide at least icon class name <vendor>-icon-<shortcut>

* [vergeicon color="#20202B" icon="fa-icon-home" font="32px" padding="10px"]

== Integration ==

Getting an array of all icons:
$icons = new VergeIcons;
$icons->icons();

== Helpers ==

1. Validate if plugin available, use constant VERGE_ICONS_ACTIVE
2. Getting an array of all available icons - VergeIconsHelper::getIcons()
3. Perhaps you need to render dropdown - VergeIconsHelper::getDropdown()

* $className for setting select box class
* $name for setting selectbox name
* $selected for setting selected value

== Installation ==

1. Go to the Plugins Menu in WordPress
2. Search for "Verge Icons"
3. Click "Install"

== Screenshots ==

Not available

== Changelog ==

= 1.0 =

* Initial release

== Upgrade Notice ==

== Credits ==

Fontawesome - http://fontawesome.io

Icomoon - https://icomoon.io
