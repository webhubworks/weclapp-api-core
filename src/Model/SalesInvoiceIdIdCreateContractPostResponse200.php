<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdCreateContractPostResponse200 extends \ArrayObject
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
     * @var Contract|null
     */
    protected $result;

    public function getResult(): ?Contract
    {
        return $this->result;
    }

    public function setResult(?Contract $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
