<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\Common;

interface SerializerInterface
{
    /**
     * Serialize request into Amazon MWS dot-notation hash.
     *
     * @param  RequestInterface  $request
     * @return array
     */
    public function serialize(RequestInterface $request): array;

    /**
     * Deserialize response into objects.
     *
     * @param  string  $response
     * @return ResponseInterface
     */
    public function unserialize(string $response): ResponseInterface;
}