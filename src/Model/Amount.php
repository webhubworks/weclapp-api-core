<?php

namespace Webhubworks\WeclappApiCore\Model;

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
     * 
     *
     * @var string
     */
    protected $amountInCompanyCurrency;
    /**
     * 
     *
     * @return string
     */
    public function getAmountInCompanyCurrency(): string
    {
        return $this->amountInCompanyCurrency;
    }
    /**
     * 
     *
     * @param string $amountInCompanyCurrency
     *
     * @return self
     */
    public function setAmountInCompanyCurrency(string $amountInCompanyCurrency): self
    {
        $this->initialized['amountInCompanyCurrency'] = true;
        $this->amountInCompanyCurrency = $amountInCompanyCurrency;
        return $this;
    }
}