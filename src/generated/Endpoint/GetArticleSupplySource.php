<?php

namespace Weclapp\Generated\Endpoint;

class GetArticleSupplySource extends \Weclapp\Generated\Runtime\Client\BaseEndpoint implements \Weclapp\Generated\Runtime\Client\Endpoint
{
    /**
     * query articleSupplySource
     *
     * @param  array  $queryParameters  {
     *
     * @var int $page
     * @var int $pageSize
     * @var bool $serializeNulls
     * @var string $sort
     * @var string $filter
     * @var string $properties
     * @var string $includeReferencedEntities
     * @var string $additionalProperties
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Weclapp\Generated\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/articleSupplySource';
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
        $optionsResolver->setDefined(['page', 'pageSize', 'serializeNulls', 'sort', 'filter', 'properties', 'includeReferencedEntities', 'additionalProperties']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('pageSize', ['int']);
        $optionsResolver->addAllowedTypes('serializeNulls', ['bool']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('filter', ['string']);
        $optionsResolver->addAllowedTypes('properties', ['string']);
        $optionsResolver->addAllowedTypes('includeReferencedEntities', ['string']);
        $optionsResolver->addAllowedTypes('additionalProperties', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Weclapp\Generated\Model\ArticleSupplySourceGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Weclapp\Generated\Model\ArticleSupplySourceGetResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['api-token'];
    }
}
