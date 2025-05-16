<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticlePriceGetResponse200 extends \ArrayObject
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
     * @var list<ArticlePrice>
     */
    protected $result;

    /**
     * @return list<ArticlePrice>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<ArticlePrice>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
