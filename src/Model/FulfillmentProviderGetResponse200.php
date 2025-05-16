<?php

namespace Webhubworks\WeclappApiCore\Model;

class FulfillmentProviderGetResponse200 extends \ArrayObject
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
     * @var list<FulfillmentProvider>
     */
    protected $result;

    /**
     * @return list<FulfillmentProvider>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<FulfillmentProvider>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
