<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaxFindSalesTaxGetResponse200 extends \ArrayObject
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
     * @var Tax
     */
    protected $result;

    public function getResult(): Tax
    {
        return $this->result;
    }

    public function setResult(Tax $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
