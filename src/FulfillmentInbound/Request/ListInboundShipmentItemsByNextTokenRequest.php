<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Requests;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns the next page of inbound shipment items using the NextToken parameter.
 *
 * @see http://docs.developer.amazonservices.com/en_US/fba_inbound/FBAInbound_ListInboundShipmentItemsByNextToken.html
 */
final class ListInboundShipmentItemsByNextTokenRequest implements RequestInterface
{
    /**
     * @var string
     */
    public $NextToken;
}