<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketPoolingGroupCountGetResponse200 extends \ArrayObject
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
     * @var int|null
     */
    protected $result;
    /**
     * 
     *
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param int|null $result
     *
     * @return self
     */
    public function setResult(?int $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}