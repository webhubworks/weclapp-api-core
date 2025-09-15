<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class PostShelfIdByIdDeactivate extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id 
     * @param null|\Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody $requestBody 
     */
    public function __construct(string $id, ?\Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \Webhubworks\WeclappApiCore\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/shelf/id/{id}/deactivate');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody) {
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
     * @return null|\Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostResponse200', 'json');
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