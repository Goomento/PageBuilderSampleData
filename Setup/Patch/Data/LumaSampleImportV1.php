<?php
/**
 * @package Goomento_PageBuilderSampleData
 * @link https://github.com/Goomento/PageBuilderSampleData
 */
declare(strict_types=1);

namespace Goomento\PageBuilderSampleData\Setup\Patch\Data;

use Exception;
use Goomento\PageBuilder\Logger\Logger;
use Goomento\PageBuilderSampleData\Samples\Luma;
use Goomento\PageBuilder\Api\SampleImporterInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class LumaSampleImportV1 implements DataPatchInterface
{
    /**
     * @var SampleImporterInterface
     */
    private $sampleImporter;
    /**
     * @var Luma
     */
    private $lumaSample;
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @param SampleImporterInterface $sampleImporter
     * @param Luma $lumaSample
     * @param Logger $logger
     */
    public function __construct(
        SampleImporterInterface $sampleImporter,
        Luma $lumaSample,
        Logger $logger
    ) {
        $this->sampleImporter = $sampleImporter;
        $this->lumaSample = $lumaSample;
        $this->logger = $logger;
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        try {
            $this
                ->sampleImporter
                ->setSampleImport($this->lumaSample)
                ->import();
        } catch (Exception $e) {
            $this->logger->error($e);
        }
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }
}
