Bootstrap - ACF Flexible Content Fields
================

WordPress plugin that sets up ACF Flexible Content sections for use with Bootstrap. Includes Carousels, Accordions, and Tabs.

## Requirements

* [WordPress](http://wordpress.org/)
* [Advanced Custom Fields](http://www.advancedcustomfields.com/)
* Advanced Custom Fields - Repeater [(PAID PLUGIN)](http://www.advancedcustomfields.com/add-ons/repeater-field/)
* Advanced Custom Fields - Flexible Content [(PAID PLUGIN)](http://www.advancedcustomfields.com/add-ons/flexible-content-field/)
* Adding a hook to your theme

## Installation

1. Download this plugin and place it in your `plugins` folder in your WordPress installation
Alternatively, if you are using [Composer](https://getcomposer.org) to load plugins, you can add this code to your composer.json file:

		{
			"type": "vcs",
			"url": "https://github.com/kalenjohnson/wp-bootstrap-acf.git"
		}

2. And then add this to the "require" list:

		"kalenjohnson/wp-bootstrap-acf": "dev-master"

3. You will need to either add the PHP code in `import/php/bootstrap-acf.php` to your theme, or preferably importing the custom fields with the [WordPress Importer](https://wordpress.org/plugins/wordpress-importer/) and importing the `import/xml/bootstrap-acf.xml` file.

4. Finally, add this hook to your theme where you would like the fields displayed: `<?php do_action('bootstrap-acf'); ?>`
This should be placed outside the `.container` class, at the moment the Carousel has the option to be full-width or be within a `.container`. Tabs and Accordions are automatically set up in a `.container`.


## To-Do
* Add a Modal section. Would like to be able to incorporate text/images/video correctly.
* Add more sections, and most likely setting up plain content sections as well as column sizing.
* Check for template files in the theme. At the moment, each section is being handled within this plugin. That obviously will not do for many themes. I would like to set something up similar to how Woocommerce' theme checks work
* Shortcodes, possibly. For smaller Bootstrap things like buttons, tooltips, would need a way to call a modal, etc.
