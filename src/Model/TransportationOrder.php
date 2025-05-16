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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $assignedUserId;
    /**
     * 
     *
     * @var string
     */
    protected $destinationStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $internalTransportReferenceId;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentArticleId;
    /**
     * 
     *
     * @var string
     */
    protected $loadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var list<TransportPick>
     */
    protected $picks;
    /**
     * 
     *
     * @var string
     */
    protected $productionOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var list<TransportationOrderStatusHistory>
     */
    protected $statusHistory;
    /**
     * 
     *
     * @var string
     */
    protected $transportationOrderNumber;
    /**
     * 
     *
     * @var string
     */
    protected $transportationOrderType;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssignedUserId(): string
    {
        return $this->assignedUserId;
    }
    /**
     * 
     *
     * @param string $assignedUserId
     *
     * @return self
     */
    public function setAssignedUserId(string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestinationStoragePlaceId(): string
    {
        return $this->destinationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $destinationStoragePlaceId
     *
     * @return self
     */
    public function setDestinationStoragePlaceId(string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalTransportReferenceId(): string
    {
        return $this->internalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $internalTransportReferenceId
     *
     * @return self
     */
    public function setInternalTransportReferenceId(string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLoadingEquipmentArticleId(): string
    {
        return $this->loadingEquipmentArticleId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentArticleId
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId(string $loadingEquipmentArticleId): self
    {
        $this->initialized['loadingEquipmentArticleId'] = true;
        $this->loadingEquipmentArticleId = $loadingEquipmentArticleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLoadingEquipmentIdentifierId(): string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TransportPick>
     */
    public function getPicks(): array
    {
        return $this->picks;
    }
    /**
     * 
     *
     * @param list<TransportPick> $picks
     *
     * @return self
     */
    public function setPicks(array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductionOrderId(): string
    {
        return $this->productionOrderId;
    }
    /**
     * 
     *
     * @param string $productionOrderId
     *
     * @return self
     */
    public function setProductionOrderId(string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }
    /**
     * 
     *
     * @param string $shipmentId
     *
     * @return self
     */
    public function setShipmentId(string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return list<TransportationOrderStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }
    /**
     * 
     *
     * @param list<TransportationOrderStatusHistory> $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportationOrderNumber(): string
    {
        return $this->transportationOrderNumber;
    }
    /**
     * 
     *
     * @param string $transportationOrderNumber
     *
     * @return self
     */
    public function setTransportationOrderNumber(string $transportationOrderNumber): self
    {
        $this->initialized['transportationOrderNumber'] = true;
        $this->transportationOrderNumber = $transportationOrderNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportationOrderType(): string
    {
        return $this->transportationOrderType;
    }
    /**
     * 
     *
     * @param string $transportationOrderType
     *
     * @return self
     */
    public function setTransportationOrderType(string $transportationOrderType): self
    {
        $this->initialized['transportationOrderType'] = true;
        $this->transportationOrderType = $transportationOrderType;
        return $this;
    }
}