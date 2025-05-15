<?php

namespace Webhub\Weclapp\Endpoint;

class PostArticleIdByIdChangeUnit extends \Webhub\Weclapp\Runtime\Client\BaseEndpoint implements \Webhub\Weclapp\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody $requestBody 
     */
    public function __construct(string $id, \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Webhub\Weclapp\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/article/id/{id}/changeUnit');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostResponse200', 'json');
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