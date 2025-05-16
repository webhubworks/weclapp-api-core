<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdInternalTransportReferencesForPickUpGetResponse200 extends \ArrayObject
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
     * @var list<InternalTransportReference>
     */
    protected $result;
    /**
     * 
     *
     * @return list<InternalTransportReference>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<InternalTransportReference> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}