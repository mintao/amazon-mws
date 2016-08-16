<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

/**
 * The dimension values and unit of measurement.
 */
final class Dimensions
{
    /**
     * @var string
     */
    public $Unit;

    /**
     * @var int
     */
    public $Length;

    /**
     * @var int
     */
    public $Width;

    /**
     * @var int
     */
    public $Height;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'Unit'   => ['type' => 'choice', 'choices' => ['inches', 'centimeters']],
            'Length' => ['type' => 'scalar'],
            'Width'  => ['type' => 'scalar'],
            'Height' => ['type' => 'scalar'],
        ];
    }
}
