

# WordPress MegaWalker

A custom WordPress nav walker that helps you create a Bootstrap "MegaMenu" by adding new option fields to the WordPress built in menu manager.

## Notes
These are utility classes that are intended to format your WordPress theme menu with the correct syntax and CSS classes to create a MegaMenu utilizing the Bootstrap dropdown navigation. It does not include the required Bootstrap JS and CSS files - you will have to include them manually in your theme.
Along with the files mentioned in the installation instructions. 

## Screenshots 
Coming soon. 

## Installation
1. Add the included `MenuFields.php` file to your themes `functions.php` 
2. Add the `navbar-megamenu` class to your bootstrap nav menu in your theme (usually in the header), it should look similar to:
```
<nav class="navbar navbar-light bg-faded rounded navbar-expand-md primary_navigation navbar-megamenu">
```
3. Add the contents of `styles.css` to your themes stylesheet 
4. Add or update any `wp_nav_menu()` functions in your theme (often found in `header.php`) to use the new walker by adding a `'walker'` item to the wp_nav_menu args array.

```php
wp_nav_menu( array(
    'theme_location' => 'primary_navigation', // This is your themes menu location
    'menu' => 'Primary Navigation', 
    'menu_class' => 'nav navbar-nav mr-auto', // Adds the nav class
    'depth' => 3, // Supports 3 levels of depth 
    'echo' => TRUE,
    'fallback_cb' => '__return_empty_string',
    'walker' => new MegaWalker(), // This is our new walker class
) );
```

## Roots Sage theme support
If you're using the [Roots Sage](https://roots.io/sage/) theme, follow the instructions in the included `themefiles/sage` directory. 

## Displaying the Menu
To display the menu you must associate your menu with your theme location.

After completing the installation steps above, this adds fields to the Menu Manager to let you quickly and easily build a MegaMenu with Bootstrap.
Visit Appearance > Menus in your dashboard. You'll see the following extra fields in your menu editor: 
* **Activate Megamenu** - Turns a menu item into a MegaMenu. 
* **Column Divider** - Adding this to a sub-menu item in your mega menu to start a new column
* **Featured Image** - Pulls the featured image from a page
* **Inline Divider** - Adds inline divider, a horizontal line
* **Description** - Choose to display the built-in Descriptions field, can be turned on in Screen Options (top right of your screen)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Originally based on [WordPress-MegaMenu](https://github.com/Alecaddd/WordPress-MegaMenu) by [Alecaddd](https://github.com/Alecaddd)
