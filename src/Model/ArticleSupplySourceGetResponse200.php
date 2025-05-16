<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleSupplySourceGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @var ArticleSupplySourceGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;

    /**
     * @var list<ArticleSupplySource>|null
     */
    protected $result;

    public function getAdditionalProperties(): ?ArticleSupplySourceGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }

    public function setAdditionalProperties(?ArticleSupplySourceGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return list<ArticleSupplySource>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<ArticleSupplySource>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
