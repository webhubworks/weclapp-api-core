<?php

namespace Webhubworks\WeclappApiCore\Model;

class BlanketPurchaseOrderIdIdGenerateReleasesPostResponse200 extends \ArrayObject
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
     * @var BlanketPurchaseOrder
     */
    protected $result;

    public function getResult(): BlanketPurchaseOrder
    {
        return $this->result;
    }

    public function setResult(BlanketPurchaseOrder $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
