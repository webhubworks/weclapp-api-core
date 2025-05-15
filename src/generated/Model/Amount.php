<?php

namespace Weclapp\Generated\Model;

class Amount extends \ArrayObject
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
     * @var string
     */
    protected $amountInCompanyCurrency;

    public function getAmountInCompanyCurrency(): string
    {
        return $this->amountInCompanyCurrency;
    }

    public function setAmountInCompanyCurrency(string $amountInCompanyCurrency): self
    {
        $this->initialized['amountInCompanyCurrency'] = true;
        $this->amountInCompanyCurrency = $amountInCompanyCurrency;

        return $this;
    }
}
