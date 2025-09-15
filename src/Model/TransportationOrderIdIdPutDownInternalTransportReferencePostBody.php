<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdPutDownInternalTransportReferencePostBody extends \ArrayObject
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
     * @var string|null
     */
    protected $targetLoadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetTransportReferenceId;
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetLoadingEquipmentIdentifierId(): ?string
    {
        return $this->targetLoadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string|null $targetLoadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setTargetLoadingEquipmentIdentifierId(?string $targetLoadingEquipmentIdentifierId): self
    {
        $this->initialized['targetLoadingEquipmentIdentifierId'] = true;
        $this->targetLoadingEquipmentIdentifierId = $targetLoadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetStoragePlaceId(): ?string
    {
        return $this->targetStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $targetStoragePlaceId
     *
     * @return self
     */
    public function setTargetStoragePlaceId(?string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetTransportReferenceId(): ?string
    {
        return $this->targetTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $targetTransportReferenceId
     *
     * @return self
     */
    public function setTargetTransportReferenceId(?string $targetTransportReferenceId): self
    {
        $this->initialized['targetTransportReferenceId'] = true;
        $this->targetTransportReferenceId = $targetTransportReferenceId;
        return $this;
    }
}