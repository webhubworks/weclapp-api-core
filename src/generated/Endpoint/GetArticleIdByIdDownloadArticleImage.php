<?php

namespace Weclapp\Generated\Endpoint;

class GetArticleIdByIdDownloadArticleImage extends \Weclapp\Generated\Runtime\Client\BaseEndpoint implements \Weclapp\Generated\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * 
     *
     * @param string $id 
     * @param array $queryParameters {
     *     @var string $articleImageId 
     *     @var bool $preview 
     *     @var int $scaleWidth 
     *     @var int $scaleHeight 
     * }
     * @param array $accept Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     */
    public function __construct(string $id, array $queryParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \Weclapp\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/article/id/{id}/downloadArticleImage');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['*/*', 'application/pdf', 'image/jpeg', 'image/png', 'application/json']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['articleImageId', 'preview', 'scaleWidth', 'scaleHeight']);
        $optionsResolver->setRequired(['articleImageId']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('articleImageId', ['string']);
        $optionsResolver->addAllowedTypes('preview', ['bool']);
        $optionsResolver->addAllowedTypes('scaleWidth', ['int']);
        $optionsResolver->addAllowedTypes('scaleHeight', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
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