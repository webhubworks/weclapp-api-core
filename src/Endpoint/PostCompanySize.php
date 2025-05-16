<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class PostCompanySize extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    /**
     * create a companySize
     *
     * @param  array  $queryParameters  {
     *
     * @var bool $dryRun
     *           }
     */
    public function __construct(?\Webhubworks\WeclappApiCore\Model\CustomValue $requestBody = null, array $queryParameters = [])
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
        return '/companySize';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Webhubworks\WeclappApiCore\Model\CustomValue) {
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
     * @return null|\Webhubworks\WeclappApiCore\Model\CustomValue|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && ($status === 201 && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Webhubworks\WeclappApiCore\Model\CustomValue', 'json');
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
