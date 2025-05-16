<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class GetTaxFindPurchaseTax extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $recipientCountryCode 
     *     @var string $dispatchCountryCode 
     *     @var string $taxRateType 
     *     @var string $partyType 
     *     @var string $debtorCreditorCodeId 
     *     @var string $productCodeId 
     *     @var int $date 
     * }
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
        return '/tax/findPurchaseTax';
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
        $optionsResolver->setDefined(['recipientCountryCode', 'dispatchCountryCode', 'taxRateType', 'partyType', 'debtorCreditorCodeId', 'productCodeId', 'date']);
        $optionsResolver->setRequired(['recipientCountryCode']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('recipientCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('dispatchCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('taxRateType', ['string']);
        $optionsResolver->addAllowedTypes('partyType', ['string']);
        $optionsResolver->addAllowedTypes('debtorCreditorCodeId', ['string']);
        $optionsResolver->addAllowedTypes('productCodeId', ['string']);
        $optionsResolver->addAllowedTypes('date', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\TaxFindPurchaseTaxGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\TaxFindPurchaseTaxGetResponse200', 'json');
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