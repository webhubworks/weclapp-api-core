<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdAddDefaultScalePricesToItemsPostResponse200 extends \ArrayObject
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
     * @var Quotation
     */
    protected $result;

    public function getResult(): Quotation
    {
        return $this->result;
    }

    public function setResult(Quotation $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
