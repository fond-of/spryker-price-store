<?php

namespace FondOfSpryker\Client\PriceStore;

use Spryker\Client\Price\PriceFactory as SprykerPriceFactory;

/**
 * @method \FondOfSpryker\Client\PriceStore\PriceStoreConfig getConfig()
 */
class PriceStoreFactory extends SprykerPriceFactory
{
    /**
     * @return \Spryker\Client\Price\PriceConfig|\Spryker\Client\Kernel\AbstractBundleConfig
     */
    public function getModuleConfig()
    {
        return parent::getConfig();
    }

}
