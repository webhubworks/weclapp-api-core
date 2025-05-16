<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderIdIdManuallyClosePostResponse200 extends \ArrayObject
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
     * @var SalesOrder
     */
    protected $result;

    public function getResult(): SalesOrder
    {
        return $this->result;
    }

    public function setResult(SalesOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
