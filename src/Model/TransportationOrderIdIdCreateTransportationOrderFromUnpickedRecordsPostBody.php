<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostBody extends \ArrayObject
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
    protected $loadingEquipmentArticleId;

    /**
     * @var string
     */
    protected $loadingEquipmentIdentifierId;

    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }

    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;

        return $this;
    }

    public function getLoadingEquipmentIdentifierId(): string
    {
        return $this->loadingEquipmentIdentifierId;
    }

    public function setLoadingEquipmentIdentifierId(string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;

        return $this;
    }
}
