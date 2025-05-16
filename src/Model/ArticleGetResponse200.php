<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var ArticleGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<Article>|null
     */
    protected $result;
    /**
     * 
     *
     * @return ArticleGetResponse200AdditionalProperties|null
     */
    public function getAdditionalProperties(): ?ArticleGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param ArticleGetResponse200AdditionalProperties|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(?ArticleGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<Article>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<Article>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}