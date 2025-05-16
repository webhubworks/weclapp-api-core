<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class GetMetaResource extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    use \Webhubworks\WeclappApiCore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/meta/resources';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @return null|\Webhubworks\WeclappApiCore\Model\MetaResourcesGetResponse200|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 200 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\MetaResourcesGetResponse200', 'json');
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
