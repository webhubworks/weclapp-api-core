<?php

namespace Webhub\Weclapp\Model;

class ArticleCategoryGetResponse200 extends \ArrayObject
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
     * @var list<ArticleCategory>
     */
    protected $result;
    /**
     * 
     *
     * @return list<ArticleCategory>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<ArticleCategory> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}