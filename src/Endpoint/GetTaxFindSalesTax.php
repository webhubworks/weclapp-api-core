<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class GetTaxFindSalesTax extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * @param  array  $queryParameters  {
     *
     * @var string $dispatchCountryCode
     * @var string $recipientCountryCode
     * @var string $taxRateType
     * @var string $partyType
     * @var string $debtorCreditorCodeId
     * @var string $productCodeId
     * @var bool $validVatId
     * @var int $date
     *          }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Webhubworks\WeclappApiCore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/tax/findSalesTax';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['dispatchCountryCode', 'recipientCountryCode', 'taxRateType', 'partyType', 'debtorCreditorCodeId', 'productCodeId', 'validVatId', 'date']);
        $optionsResolver->setRequired(['dispatchCountryCode']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('dispatchCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('recipientCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('taxRateType', ['string']);
        $optionsResolver->addAllowedTypes('partyType', ['string']);
        $optionsResolver->addAllowedTypes('debtorCreditorCodeId', ['string']);
        $optionsResolver->addAllowedTypes('productCodeId', ['string']);
        $optionsResolver->addAllowedTypes('validVatId', ['bool']);
        $optionsResolver->addAllowedTypes('date', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxFindSalesTaxGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\TaxFindSalesTaxGetResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\ApiProblem', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['api-token'];
    }
}
