<?php

namespace Webhubworks\WeclappApiCore\Endpoint;

class PostPurchaseOrderRequestIdByIdExportItemsAsCsv extends \Webhubworks\WeclappApiCore\Runtime\Client\BaseEndpoint implements \Webhubworks\WeclappApiCore\Runtime\Client\Endpoint
{
    protected $id;

    protected $accept;

    /**
     * @param  array  $accept  Accept content header *\/*|application/pdf|image/jpeg|image/png|application/json
     */
    public function __construct(string $id, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostBody $requestBody, array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    use \Webhubworks\WeclappApiCore\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/purchaseOrderRequest/id/{id}/exportItemsAsCsv');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['*/*', 'application/pdf', 'image/jpeg', 'image/png', 'application/json']];
        }

        return $this->accept;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Webhubworks\WeclappApiCore\Model\ApiProblem
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($status === 200) {
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
