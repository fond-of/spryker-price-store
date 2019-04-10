<?php

namespace FondOfSpryker\Zed\PriceStore\Business;

use Spryker\Zed\Price\Business\PriceBusinessFactory as SprykerPriceBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\PriceStore\PriceStoreConfig getConfig()
 */
class PriceStoreBusinessFactory extends SprykerPriceBusinessFactory
{
    /**
     * @return \Spryker\Zed\Price\PriceConfig|\Spryker\Zed\Kernel\AbstractBundleConfig
     */
    public function getModuleConfig()
    {
        return parent::getConfig();
    }
}
