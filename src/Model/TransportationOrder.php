<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrder extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $assignedUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $destinationStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalTransportReferenceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $loadingEquipmentArticleId;
    /**
     * 
     *
     * @var string|null
     */
    protected $loadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var list<TransportPick>|null
     */
    protected $picks;
    /**
     * 
     *
     * @var string|null
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $shipmentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var list<TransportationOrderStatusHistory>|null
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $transportationOrderNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $transportationOrderType;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssignedUserId(): ?string
    {
        return $this->assignedUserId;
    }
    /**
     * 
     *
     * @param string|null $assignedUserId
     *
     * @return self
     */
    public function setAssignedUserId(?string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestinationStoragePlaceId(): ?string
    {
        return $this->destinationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $destinationStoragePlaceId
     *
     * @return self
     */
    public function setDestinationStoragePlaceId(?string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalTransportReferenceId(): ?string
    {
        return $this->internalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $internalTransportReferenceId
     *
     * @return self
     */
    public function setInternalTransportReferenceId(?string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLoadingEquipmentArticleId(): ?string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(?string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLoadingEquipmentIdentifierId(): ?string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(?string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TransportPick>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }
    /**
     * 
     *
     * @param list<TransportPick>|null $picks
     *
     * @return self
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductionOrderId(): ?string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string|null $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(?string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }
    /**
     * 
     *
     * @param string|null $shipmentId
     *
     * @return self
     */
    public function setShipmentId(?string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<TransportationOrderStatusHistory>|null
     */
    public function getStatusHistory(): ?array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<TransportationOrderStatusHistory>|null $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(?array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransportationOrderNumber(): ?string
    {
        return $this->transportationOrderNumber;
    }
    /**
     * 
     *
     * @param string|null $transportationOrderNumber
     *
     * @return self
     */
    public function setTransportationOrderNumber(?string $transportationOrderNumber): self
    {
        $this->initialized['transportationOrderNumber'] = true;
        $this->transportationOrderNumber = $transportationOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransportationOrderType(): ?string
    {
        return $this->transportationOrderType;
    }
    /**
     * 
     *
     * @param string|null $transportationOrderType
     *
     * @return self
     */
    public function setTransportationOrderType(?string $transportationOrderType): self
    {
        $this->initialized['transportationOrderType'] = true;
        $this->transportationOrderType = $transportationOrderType;
        return $this;
    }
}