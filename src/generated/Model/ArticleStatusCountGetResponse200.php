<?php

namespace Weclapp\Generated\Model;

class ArticleStatusCountGetResponse200 extends \ArrayObject
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
     * @var int
     */
    protected $result;

    public function getResult(): int
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
