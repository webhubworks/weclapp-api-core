<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class PostDocumentUpload extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $entityName
     * @var string $entityId
     * @var string $name
     * @var string $description
     * @var string $documentType
     *             }
     */
    public function __construct($requestBody, array $queryParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    use \Webhubworks\WeclappApiCore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/document/upload';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['*/*']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/pdf']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/jpeg']], $this->body];
        }
        if (is_string($this->body) or is_resource($this->body) or $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/png']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['entityName', 'entityId', 'name', 'description', 'documentType']);
        $optionsResolver->setRequired(['entityName', 'entityId', 'name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('entityName', ['string']);
        $optionsResolver->addAllowedTypes('entityId', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('description', ['string']);
        $optionsResolver->addAllowedTypes('documentType', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\DocumentUploadPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\DocumentUploadPostResponse200', 'json');
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
