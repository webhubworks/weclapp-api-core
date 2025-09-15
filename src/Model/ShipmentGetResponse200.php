<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentGetResponse200 extends \ArrayObject
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
     * @var ShipmentGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<Shipment>|null
     */
    protected $result;
    /**
     * 
     *
     * @return ShipmentGetResponse200AdditionalProperties|null
     */
    public function getAdditionalProperties(): ?ShipmentGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param ShipmentGetResponse200AdditionalProperties|null $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(?ShipmentGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<Shipment>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<Shipment>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}