=== Somatic Site Config ===

Contributors: somatic
Tags: CMS, custom post type, metabox, custom taxonomy
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Boilerplate plugin for configuring the Somatic Framework for a particular site installation

== Description ==

Use this plugin as a template to declare all the customizations that depend on the Somatic Framework. Custom Post Types, Taxonomies, Metboxes, etc. are all specific to a single website. Such declarations of data structures shouldn't live in a theme (which determines the public-facing appearance), but should live in a custom plugin.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

== Changelog ==

= 1.0 =
* First Attempt