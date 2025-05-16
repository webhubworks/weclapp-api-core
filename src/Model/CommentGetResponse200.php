<?php

namespace Webhubworks\WeclappApiCore\Model;

class CommentGetResponse200 extends \ArrayObject
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
     * @var list<Comment>
     */
    protected $result;

    /**
     * @return list<Comment>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Comment>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
