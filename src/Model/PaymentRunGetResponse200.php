<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentRunGetResponse200 extends \ArrayObject
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
     * @var list<PaymentRun>|null
     */
    protected $result;

    /**
     * @return list<PaymentRun>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<PaymentRun>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
