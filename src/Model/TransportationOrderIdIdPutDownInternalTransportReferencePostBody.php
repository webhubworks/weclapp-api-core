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
     * @var string
     */
    protected $targetLoadingEquipmentIdentifierId;

    /**
     * @var string
     */
    protected $targetStoragePlaceId;

    /**
     * @var string
     */
    protected $targetTransportReferenceId;

    public function getTargetLoadingEquipmentIdentifierId(): string
    {
        return $this->targetLoadingEquipmentIdentifierId;
    }

    public function setTargetLoadingEquipmentIdentifierId(string $targetLoadingEquipmentIdentifierId): self
    {
        $this->initialized['targetLoadingEquipmentIdentifierId'] = true;
        $this->targetLoadingEquipmentIdentifierId = $targetLoadingEquipmentIdentifierId;

        return $this;
    }

    public function getTargetStoragePlaceId(): string
    {
        return $this->targetStoragePlaceId;
    }

    public function setTargetStoragePlaceId(string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;

        return $this;
    }

    public function getTargetTransportReferenceId(): string
    {
        return $this->targetTransportReferenceId;
    }

    public function setTargetTransportReferenceId(string $targetTransportReferenceId): self
    {
        $this->initialized['targetTransportReferenceId'] = true;
        $this->targetTransportReferenceId = $targetTransportReferenceId;

        return $this;
    }
}
