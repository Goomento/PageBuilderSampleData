<?php
/**
 * @package Goomento_PageBuilderSampleData
 * @link https://github.com/Goomento/PageBuilderSampleData
 */
declare(strict_types=1);

namespace Goomento\PageBuilderSampleData\Builder\Widgets;

use Goomento\PageBuilder\Builder\Base\AbstractWidget;
use Goomento\PageBuilder\Builder\Managers\Controls;
use Goomento\PageBuilder\Helper\UrlBuilderHelper;
use Magento\Framework\Phrase;

class HelloWorld extends AbstractWidget
{
    /**
     * Disabled this sample widget
     *
     * Remove or comment this line in order to work with this module
     */
    const ENABLED = false;

    /**
     * Unique name of widget
     */
    const NAME = 'hello-world';

    /**
     * Template which present for HTML output of widget
     *
     * @var string
     */
    protected $template = 'Goomento_PageBuilderSampleData::widgets/hello_world.phtml';

    /**
     * Name of widget, It will display in Page Builder Editor
     *
     * @return Phrase|string
     */
    public function getTitle()
    {
        return __('Hello World');
    }

    /**
     * Set preview thumb of widget
     *
     * @return array
     */
    public function getPreviewHelper(): array
    {
        return [
//            'image' => UrlBuilderHelper::urlStaticBuilder('Goomento_PageBuilderSampleData::images/hello-world.png')
        ];
    }

    /**
     * Get style dependencies.
     *
     * Retrieve the list of style dependencies the element requires.
     *
     * @see \Goomento\PageBuilderSampleData\EntryPoint::registerStyles()
     * @return array
     */
    public function getStyleDepends()
    {
        return ['pagebuilder-sample-data-widget'];
    }

    /**
     * Get script dependencies.
     *
     * Retrieve the list of script dependencies the element requires.
     *
     *
     * @return array Element scripts dependencies.
     */
    public function getScriptDepends()
    {
        return ['pagebuilder-sample-data-bubbling'];
    }

    /**
     * Get widget categories.
     *
     * Retrieve the widget categories.
     *
     * @see \Goomento\PageBuilderSampleData\EntryPoint::registerWidgetCategories()
     * @return string[]
     */
    public function getCategories()
    {
        return ['sampledata'];
    }

    /**
     * Icon of widget, It will display in Page Builder Editor
     * @link https://fontawesome.com/
     *
     * @return string
     */
    public function getIcon()
    {
        return 'fas fa-hand-peace';
    }

    /**
     * Keywords for search of widget, ease to find this widget
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return [ 'hello world' ];
    }

    /**
     * Used to add new controls to widget. For example, external
     * developers use this method to register controls in a widget.
     *
     * @return void
     */
    protected function registerControls()
    {
        $this->startControlsSection(
            'section_hello_world_info',
            [
                'label' => __('Information'),
            ]
        );

        $this->addControl(
            'hello-world-name',
            [
                'label' => __('Your Name Is'),
                'type' => Controls::TEXT,
                'default' => 'Goomento Page Builder',
                'placeholder' => __('Eg: John'),
            ]
        );

        $this->endControlsSection();
    }
}
