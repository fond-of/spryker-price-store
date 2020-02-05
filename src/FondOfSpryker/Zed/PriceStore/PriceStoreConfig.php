<?php

namespace FondOfSpryker\Zed\PriceStore;

use Spryker\Zed\Price\PriceConfig as SprykerPriceConfig;

class PriceStoreConfig extends SprykerPriceConfig
{
    /**
     * @return string
     */
    public function getDefaultPriceMode()
    {
        return $this->getSharedConfig()->getDefaultPriceMode();
    }
}
