<?php

namespace Webhubworks\WeclappApiCore\Model;

class LeadIdIdConvertLeadToCustomerGetResponse200 extends \ArrayObject
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
     * @var Customer|null
     */
    protected $result;
    /**
     * 
     *
     * @return Customer|null
     */
    public function getResult(): ?Customer
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Customer|null $result
     *
     * @return self
     */
    public function setResult(?Customer $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}