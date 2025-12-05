<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskIdIdUpdateBillingDataPostResponse200 extends \ArrayObject
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
     * @var Task|null
     */
    protected $result;
    /**
     * 
     *
     * @return Task|null
     */
    public function getResult(): ?Task
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Task|null $result
     *
     * @return self
     */
    public function setResult(?Task $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}