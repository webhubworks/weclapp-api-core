<?php

namespace Webhub\Weclapp\Model;

class ArticleStatusGetResponse200 extends \ArrayObject
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
     * @var list<CustomValue>
     */
    protected $result;

    /**
     * @return list<CustomValue>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<CustomValue>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
