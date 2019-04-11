<?php

namespace FondOfSpryker\Client\PriceStore\Plugin;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Client\Price\Plugin\PriceModeQuoteTransferExpanderPlugin as SprykerPriceModeQuoteTransferExpanderPlugin;

/**
 * @method \FondOfSpryker\Client\PriceStore\PriceFactory getFactory()
 */
class PriceModeQuoteTransferExpanderPlugin extends SprykerPriceModeQuoteTransferExpanderPlugin
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function expandQuote(QuoteTransfer $quoteTransfer)
    {
        if ($quoteTransfer->getPriceMode() !== null) {
            return $quoteTransfer;
        }

        $quoteTransfer->setPriceMode($this->getFactory()->getModuleConfig()->getDefaultPriceMode());

        return $quoteTransfer;
    }
}
