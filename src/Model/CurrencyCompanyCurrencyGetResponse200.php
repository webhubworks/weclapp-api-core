<?php

namespace Webhubworks\WeclappApiCore\Model;

class CurrencyCompanyCurrencyGetResponse200 extends \ArrayObject
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
     * @var Currency|null
     */
    protected $result;
    /**
     * 
     *
     * @return Currency|null
     */
    public function getResult(): ?Currency
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Currency|null $result
     *
     * @return self
     */
    public function setResult(?Currency $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}