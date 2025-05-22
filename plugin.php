<?php

/**
 * Plugin Name: WinuSoft Elements for Breakdance
 * Plugin URI: https://winusoft.co.uk/
 * Description: Sweet elements for Breakdance Builder.
 * Author: Phe Ledwell, WinuSoft Web Development
 * Author URI: https://winusoft.co.uk/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace WinuSoftCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'WinuSoftCustomElements',
        'element',
        'WinuSoft Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'WinuSoftCustomElements',
        'macro',
        'WinuSoft Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'WinuSoftCustomElements',
        'preset',
        'WinuSoft Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
