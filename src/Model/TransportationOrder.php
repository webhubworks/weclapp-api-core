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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $assignedUserId;

    /**
     * @var string
     */
    protected $destinationStoragePlaceId;

    /**
     * @var string
     */
    protected $internalTransportReferenceId;

    /**
     * @var string
     */
    protected $loadingEquipmentArticleId;

    /**
     * @var string
     */
    protected $loadingEquipmentIdentifierId;

    /**
     * @var list<TransportPick>
     */
    protected $picks;

    /**
     * @var string
     */
    protected $productionOrderId;

    /**
     * @var string
     */
    protected $shipmentId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var list<TransportationOrderStatusHistory>
     */
    protected $statusHistory;

    /**
     * @var string
     */
    protected $transportationOrderNumber;

    /**
     * @var string
     */
    protected $transportationOrderType;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getAssignedUserId(): string
    {
        return $this->assignedUserId;
    }

    public function setAssignedUserId(string $assignedUserId): self
    {
        $this->initialized['assignedUserId'] = true;
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    public function getDestinationStoragePlaceId(): string
    {
        return $this->destinationStoragePlaceId;
    }

    public function setDestinationStoragePlaceId(string $destinationStoragePlaceId): self
    {
        $this->initialized['destinationStoragePlaceId'] = true;
        $this->destinationStoragePlaceId = $destinationStoragePlaceId;

        return $this;
    }

    public function getInternalTransportReferenceId(): string
    {
        return $this->internalTransportReferenceId;
    }

    public function setInternalTransportReferenceId(string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;

        return $this;
    }

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

    /**
     * @return list<TransportPick>
     */
    public function getPicks(): array
    {
        return $this->picks;
    }

    /**
     * @param  list<TransportPick>  $picks
     */
    public function setPicks(array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

        return $this;
    }

    public function getProductionOrderId(): string
    {
        return $this->productionOrderId;
    }

    public function setProductionOrderId(string $productionOrderId): self
    {
        $this->initialized['productionOrderId'] = true;
        $this->productionOrderId = $productionOrderId;

        return $this;
    }

    public function getShipmentId(): string
    {
        return $this->shipmentId;
    }

    public function setShipmentId(string $shipmentId): self
    {
        $this->initialized['shipmentId'] = true;
        $this->shipmentId = $shipmentId;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<TransportationOrderStatusHistory>
     */
    public function getStatusHistory(): array
    {
        return $this->statusHistory;
    }

    /**
     * @param  list<TransportationOrderStatusHistory>  $statusHistory
     */
    public function setStatusHistory(array $statusHistory): self
    {
        $this->initialized['statusHistory'] = true;
        $this->statusHistory = $statusHistory;

        return $this;
    }

    public function getTransportationOrderNumber(): string
    {
        return $this->transportationOrderNumber;
    }

    public function setTransportationOrderNumber(string $transportationOrderNumber): self
    {
        $this->initialized['transportationOrderNumber'] = true;
        $this->transportationOrderNumber = $transportationOrderNumber;

        return $this;
    }

    public function getTransportationOrderType(): string
    {
        return $this->transportationOrderType;
    }

    public function setTransportationOrderType(string $transportationOrderType): self
    {
        $this->initialized['transportationOrderType'] = true;
        $this->transportationOrderType = $transportationOrderType;

        return $this;
    }
}
