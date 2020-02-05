<?php

namespace FondOfSpryker\Zed\PriceStore\Business;

use Spryker\Zed\Price\Business\PriceFacade as SprykerPriceFacade;

/**
 * @method \Spryker\Zed\Price\Business\PriceBusinessFactory getFactory()
 */
class PriceStoreFacade extends SprykerPriceFacade implements PriceStoreFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getDefaultPriceMode()
    {
        return $this->getFactory()
            ->getModuleConfig()
            ->getDefaultPriceMode();
    }
}
