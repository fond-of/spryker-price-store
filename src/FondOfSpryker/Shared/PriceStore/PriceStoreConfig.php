<?php

namespace FondOfSpryker\Shared\PriceStore;

use Spryker\Shared\Config\Config;
use Spryker\Shared\Price\PriceConfig as SprykerPriceConfig;

class PriceStoreConfig extends SprykerPriceConfig
{
    /**
     * @return string
     */
    public function getDefaultPriceMode()
    {
        if (Config::get(PriceStoreConstants::DEFAULT_PRICE_MODE)) {
            return Config::get(PriceStoreConstants::DEFAULT_PRICE_MODE);
        }

        return static::PRICE_MODE_GROSS;
    }
}
