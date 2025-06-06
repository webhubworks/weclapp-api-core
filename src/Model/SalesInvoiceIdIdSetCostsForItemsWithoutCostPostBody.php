<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdSetCostsForItemsWithoutCostPostBody extends \ArrayObject
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
     * @var string|null
     */
    protected $costUpdateMode;

    public function getCostUpdateMode(): ?string
    {
        return $this->costUpdateMode;
    }

    public function setCostUpdateMode(?string $costUpdateMode): self
    {
        $this->initialized['costUpdateMode'] = true;
        $this->costUpdateMode = $costUpdateMode;

        return $this;
    }
}
