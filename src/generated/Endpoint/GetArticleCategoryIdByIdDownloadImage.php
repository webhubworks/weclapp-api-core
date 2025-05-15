<?php

namespace Weclapp\Generated\Endpoint;

class GetArticleCategoryIdByIdDownloadImage extends \Weclapp\Generated\Runtime\Client\BaseEndpoint implements \Weclapp\Generated\Runtime\Client\Endpoint
{
    protected $id;

    protected $accept;

    /**
     * @param  array  $queryParameters  {
     *
     * @var int $scaleWidth
     * @var int $scaleHeight
     * @var string $imageId
     *             }
     *
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
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
        return str_replace(['{id}'], [$this->id], '/articleCategory/id/{id}/downloadImage');
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
        $optionsResolver->setDefined(['scaleWidth', 'scaleHeight', 'imageId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('scaleWidth', ['int']);
        $optionsResolver->addAllowedTypes('scaleHeight', ['int']);
        $optionsResolver->addAllowedTypes('imageId', ['string']);

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
        if ($status === 200) {
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
