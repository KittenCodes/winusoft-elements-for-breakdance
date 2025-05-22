<?php

namespace WinuSoftCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WinuSoftCustomElements\\SlideMenuTrigger",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SlideMenuTrigger extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'BarsIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Slide Menu Trigger';
    }

    static function className()
    {
        return 'winusoft-slide-menu-trigger';
    }

    static function category()
    {
        return 'other';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return __CLASS__;
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "icon",
        "Icon",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 6, 'max' => 80, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "style",
        "Style",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'none', 'text' => 'None'], ['text' => 'Solid', 'value' => 'solid'], ['text' => 'Outline', 'value' => 'outline']]],
        false,
        false,
        [],
      ), c(
        "corners",
        "Corners",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'square', 'text' => 'Square'], ['text' => 'Round', 'value' => 'round'], ['text' => 'Custom', 'value' => 'custom']], 'condition' => [[['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['solid, outline']]]]],
        false,
        false,
        [],
      ), c(
        "radius",
        "Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 0, 'max' => 140, 'step' => 1], 'condition' => [[['path' => '%%CURRENTPATH%%.corners', 'operand' => 'is one of', 'value' => ['custom']]]]],
        false,
        false,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'em', 'rem'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 0, 'max' => 120, 'step' => 1], 'condition' => [[['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['solid, outline']]]]],
        true,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'condition' => [[['path' => '%%CURRENTPATH%%.style', 'operand' => 'is one of', 'value' => ['solid, outline']]]]],
        false,
        true,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'color', 'layout' => 'inline', 'condition' => [[['path' => '%%CURRENTPATH%%.style', 'operand' => 'equals', 'value' => 'outline']]]],
        false,
        true,
        [],
      ), c(
        "outline_width",
        "Outline Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 1, 'max' => 10, 'step' => 1], 'condition' => [[['path' => '%%CURRENTPATH%%.style', 'operand' => 'equals', 'value' => 'outline']]]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "rotate",
        "Rotate",
        [],
        ['type' => 'number', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "open_slide_menu",
        "Open Slide Menu",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'dropdownOptions' => ['populate' => ['path' => '', 'text' => '', 'value' => '', 'fetchDataAction' => '', 'fetchContextPath' => '', 'refetchPaths' => []]], 'textOptions' => ['format' => 'plain'], 'placeholder' => 'Enter the Selector of your Slide Menu'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return [['cssProperty' => 'margin-top', 'location' => 'outside-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], ['cssProperty' => 'margin-bottom', 'location' => 'outside-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return false;
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.icon.corners', 'design.icon.style'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
