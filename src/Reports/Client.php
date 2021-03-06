<?php
namespace SellerWorks\Amazon\Reports;

use SellerWorks\Amazon\Common\AbstractClient;
use SellerWorks\Amazon\Common\Country;
use SellerWorks\Amazon\Credentials\CredentialsInterface;

/**
 * Reports API
 *
 * The Reports API section of the Amazon Marketplace Web Service (Amazon MWS) API lets you request various reports that
 * help you manage your Sell on Amazon business. Report types are specified using the ReportTypes enumeration.
 */
class Client extends AbstractClient implements ReportsInterface
{

    /**
     * Import the Fulfillment Inbound Shipment API plumbing methods.
     *
     * @method  self::RequestReport                Creates a report request and submits the request to Amazon MWS.
     * @method  RequestReportAsync
     */
    use ReportsTrait;

    /**
     * MWS Service definitions.
     */
    const MWS_PATH    = '/';
    const MWS_VERSION = '2009-01-01';

    /**
     * {@inheritDoc}
     */
    public function __construct(CredentialsInterface $credentials, $country = Country::US)
    {
        parent::__construct($credentials);
        $this->serializer = new Serializer\Serializer;
    }
}
