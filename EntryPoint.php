<?php
/**
 * @package Goomento_PageBuilderSampleData
 * @link https://github.com/Goomento/PageBuilderSampleData
 */
declare(strict_types=1);

namespace Goomento\PageBuilderSampleData;

use Goomento\PageBuilder\BuilderRegister;
use Goomento\PageBuilder\Helper\HooksHelper;
use Goomento\PageBuilder\Model\LocalSampleCollection;
use Goomento\PageBuilderSampleData\Samples\Luma;

class EntryPoint extends BuilderRegister
{
    /**
     * @inheritDoc
     */
    public function init(array $buildSubject = [])
    {
        HooksHelper::addAction('pagebuilder/samples/sample_registered', [$this, 'addSamples']);
    }

    /**
     * Add Luma sample to collection
     *
     * @param LocalSampleCollection $collection
     * @return void
     */
    public function addSamples(LocalSampleCollection $collection)
    {
        $collection->setSample('luma', Luma::class);
    }
}
