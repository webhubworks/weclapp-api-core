<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentRunItemGetResponse200 extends \ArrayObject
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
     * @var list<PaymentRunItem>
     */
    protected $result;

    /**
     * @return list<PaymentRunItem>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<PaymentRunItem>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
