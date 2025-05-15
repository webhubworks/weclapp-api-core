<?php

namespace Webhub\Weclapp\Endpoint;

class PutArticleItemGroupIdById extends \Webhub\Weclapp\Runtime\Client\BaseEndpoint implements \Webhub\Weclapp\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * update articleItemGroup
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleItemGroup $requestBody 
     * @param array $queryParameters {
     *     @var bool $dryRun 
     * }
     */
    public function __construct(string $id, \Webhub\Weclapp\Model\ArticleItemGroup $requestBody, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Webhub\Weclapp\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/articleItemGroup/id/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Webhub\Weclapp\Model\ArticleItemGroup) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
        $optionsResolver->setDefined(['dryRun']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('dryRun', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhub\Weclapp\Model\ArticleItemGroup
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhub\Weclapp\Model\ArticleItemGroup', 'json');
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