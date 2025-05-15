<?php

namespace Weclapp\Generated\Endpoint;

class PostArticleIdByIdUploadArticleImage extends \Weclapp\Generated\Runtime\Client\BaseEndpoint implements \Weclapp\Generated\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * @param  string|resource|\Psr\Http\Message\StreamInterface  $requestBody
     * @param  array  $queryParameters  {
     *
     * @var string $name
     * @var bool $mainImage
     * @var string $articleImageId
     *             }
     */
    public function __construct(string $id, $requestBody, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }

    use \Weclapp\Generated\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/article/id/{id}/uploadArticleImage');
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
        $optionsResolver->setDefined(['name', 'mainImage', 'articleImageId']);
        $optionsResolver->setRequired(['name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('mainImage', ['bool']);
        $optionsResolver->addAllowedTypes('articleImageId', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Weclapp\Generated\Model\ArticleIdIdUploadArticleImagePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Weclapp\Generated\Model\ArticleIdIdUploadArticleImagePostResponse200', 'json');
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
