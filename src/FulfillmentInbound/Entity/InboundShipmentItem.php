<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

/**
 * Item information for an inbound shipment. Submitted with a call to the CreateInboundShipment or UpdateInboundShipment
 * operation.
 */
final class InboundShipmentItem
{
    /**
     * @var string
     */
    public $ShipmentId;

    /**
     * @var string
     */
    public $SellerSKU;

    /**
     * @var string
     */
    public $FulfillmentNetworkSKU;

    /**
     * @var int
     */
    public $QuantityShipped;

    /**
     * @var int
     */
    public $QuantityReceived;

    /**
     * @var int
     */
    public $QuantityInCase;

    /**
     * @var Array<PrepDetails>
     */
    public $PrepDetailsList;

    /**
     * @var string
     */
    public $ReleaseDate;
}