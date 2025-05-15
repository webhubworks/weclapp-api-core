<?php

namespace Webhub\Weclapp\Model;

class ArticleIdIdPackagingUnitStructureGetResponse200 extends \ArrayObject
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
     * @var list<Article>
     */
    protected $result;
    /**
     * 
     *
     * @return list<Article>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<Article> $result
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