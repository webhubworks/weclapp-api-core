<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class GetPropertyTranslationReadPropertyTranslation extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $entityName 
     *     @var string $entityId 
     *     @var string $locale 
     *     @var array $propertyNames 
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
        return '/propertyTranslation/readPropertyTranslations';
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
        $optionsResolver->setDefined(['entityName', 'entityId', 'locale', 'propertyNames']);
        $optionsResolver->setRequired(['entityName', 'entityId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('entityName', ['string']);
        $optionsResolver->addAllowedTypes('entityId', ['string']);
        $optionsResolver->addAllowedTypes('locale', ['string']);
        $optionsResolver->addAllowedTypes('propertyNames', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\PropertyTranslationReadPropertyTranslationsGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\PropertyTranslationReadPropertyTranslationsGetResponse200', 'json');
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