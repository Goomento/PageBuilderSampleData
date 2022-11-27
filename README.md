# Sample And Document Module For [Goomento Page Builder Extension](https://github.com/Goomento/PageBuilder)

#### Easy steps to create your first module to perform Page Builder by Goomento in your Magento installation

## 1. Install

Run the following command in Magento 2 root folder to install this repository
```bash
composer require goomento/module-page-builder-sample-data
php bin/magento module:enable Goomento_PageBuilderSampleData
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## 2. Manual import a sample

1- Go to `Goomento > Page Builder Actions > Importer` click on the text `For import Sample templates click here`

2- At the table `Import Samples`, then use `Import` button to import a Template or `Import All` button to import
All templates in a particular vendor.
