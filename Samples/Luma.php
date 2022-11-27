<?php
/**
 * @package Goomento_PageBuilderSampleData
 * @link https://github.com/Goomento/PageBuilderSampleData
 */

declare(strict_types=1);

namespace Goomento\PageBuilderSampleData\Samples;

use Goomento\PageBuilder\Api\Data\SampleImportInterface;
use Goomento\PageBuilder\Helper\AssetsHelper;

class Luma implements SampleImportInterface
{
    /**
     * @return string
     */
    protected static function getFixturePath()
    {
        return AssetsHelper::getModulePath('Goomento_PageBuilderSampleData') . '/fixture/luma';
    }

    /**
     * @inheritDoc
     */
    public function getMediaDir()
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getSourceFiles()
    {
        return self::getFixturePath();
    }

    /**
     * @inheritDoc
     */
    public function getReplacement()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return __('Luma Templates');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Luma Templates';
    }
}
