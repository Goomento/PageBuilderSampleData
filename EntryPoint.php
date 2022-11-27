<?php
/**
 * @package Goomento_PageBuilderSampleData
 * @link https://github.com/Goomento/PageBuilderSampleData
 */
declare(strict_types=1);

namespace Goomento\PageBuilderSampleData;

use Goomento\PageBuilderSampleData\Builder\Widgets\HelloWorld;
use Goomento\PageBuilder\Builder\Managers\Elements;
use Goomento\PageBuilder\Builder\Managers\Widgets;
use Goomento\PageBuilder\BuilderRegister;
use Goomento\PageBuilder\Helper\ThemeHelper;

class EntryPoint extends BuilderRegister
{
    /**
     * Add widget categories, where is grouping the similar widget types
     *
     */
    public function registerWidgetCategories(Elements $elements)
    {
        $elements->addCategory('sampledata', [
            'title' => __('Sample Data'),
        ]);
    }

    /**
     * Add to queue your css files, that can be used by widget or theme later
     *
     * @return void
     */
    public function registerStyles()
    {
        ThemeHelper::registerStyle(
            'pagebuilder-sample-data-widget',
            'Goomento_PageBuilderSampleData/css/widget.css'
        );
    }

    /**
     * Add to queue your js files, that can be used by widget
     *
     * @return void
     */
    public function registerScripts()
    {
        ThemeHelper::registerScript(
            'pagebuilder-sample-data-bubbling',
            'Goomento_PageBuilderSampleData/js/bubbling'
        );
    }

    /**
     * Add your widgets to be used here
     *
     * @see Widgets::registerWidgetType()
     */
    public function registerWidgets(Widgets $widgetsManager)
    {
        $widgetsManager->registerWidgetType(
            HelloWorld::class
        );
    }
}
