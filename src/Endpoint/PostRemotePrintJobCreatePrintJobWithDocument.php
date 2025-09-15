<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class PostRemotePrintJobCreatePrintJobWithDocument extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|string|resource|\Psr\Http\Message\StreamInterface $requestBody 
     * @param array $queryParameters {
     *     @var string $weclappOsId 
     *     @var string $printerName 
     *     @var int $quantity 
     *     @var string $documentName 
     *     @var string $documentDescription 
     * }
     */
    public function __construct($requestBody = null, array $queryParameters = [])
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
        return '/remotePrintJob/createPrintJobWithDocument';
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
        $optionsResolver->setDefined(['weclappOsId', 'printerName', 'quantity', 'documentName', 'documentDescription']);
        $optionsResolver->setRequired(['weclappOsId', 'printerName', 'quantity', 'documentName']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('weclappOsId', ['string']);
        $optionsResolver->addAllowedTypes('printerName', ['string']);
        $optionsResolver->addAllowedTypes('quantity', ['int']);
        $optionsResolver->addAllowedTypes('documentName', ['string']);
        $optionsResolver->addAllowedTypes('documentDescription', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\RemotePrintJobCreatePrintJobWithDocumentPostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\RemotePrintJobCreatePrintJobWithDocumentPostResponse200', 'json');
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