<?php

namespace Webhubworks\WeclappApiCore\Model;

class Warehouse extends \ArrayObject
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
     * @var bool
     */
    protected $active;

    /**
     * @var string
     */
    protected $defaultConsolidationStoragePlaceId;

    /**
     * @var string
     */
    protected $defaultProductionStoragePlaceId;

    /**
     * @var string
     */
    protected $defaultReturnsStoragePlaceId;

    /**
     * @var string
     */
    protected $defaultStoragePlaceId;

    /**
     * @var Address
     */
    protected $deliveryAddress;

    /**
     * @var string
     */
    protected $directBookingInternalTransportReferenceId;

    /**
     * @var Address
     */
    protected $invoiceAddress;

    /**
     * @var MinimalStoragePlace
     */
    protected $loadingEquipmentStoragePlace;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Address
     */
    protected $primaryAddress;

    /**
     * @var string
     */
    protected $shortIdentifier;

    /**
     * @var bool
     */
    protected $standard;

    /**
     * @var MinimalStoragePlace
     */
    protected $transitStoragePlace;

    /**
     * @var string
     */
    protected $warehouseType;

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

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getDefaultConsolidationStoragePlaceId(): string
    {
        return $this->defaultConsolidationStoragePlaceId;
    }

    public function setDefaultConsolidationStoragePlaceId(string $defaultConsolidationStoragePlaceId): self
    {
        $this->initialized['defaultConsolidationStoragePlaceId'] = true;
        $this->defaultConsolidationStoragePlaceId = $defaultConsolidationStoragePlaceId;

        return $this;
    }

    public function getDefaultProductionStoragePlaceId(): string
    {
        return $this->defaultProductionStoragePlaceId;
    }

    public function setDefaultProductionStoragePlaceId(string $defaultProductionStoragePlaceId): self
    {
        $this->initialized['defaultProductionStoragePlaceId'] = true;
        $this->defaultProductionStoragePlaceId = $defaultProductionStoragePlaceId;

        return $this;
    }

    public function getDefaultReturnsStoragePlaceId(): string
    {
        return $this->defaultReturnsStoragePlaceId;
    }

    public function setDefaultReturnsStoragePlaceId(string $defaultReturnsStoragePlaceId): self
    {
        $this->initialized['defaultReturnsStoragePlaceId'] = true;
        $this->defaultReturnsStoragePlaceId = $defaultReturnsStoragePlaceId;

        return $this;
    }

    public function getDefaultStoragePlaceId(): string
    {
        return $this->defaultStoragePlaceId;
    }

    public function setDefaultStoragePlaceId(string $defaultStoragePlaceId): self
    {
        $this->initialized['defaultStoragePlaceId'] = true;
        $this->defaultStoragePlaceId = $defaultStoragePlaceId;

        return $this;
    }

    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(Address $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDirectBookingInternalTransportReferenceId(): string
    {
        return $this->directBookingInternalTransportReferenceId;
    }

    public function setDirectBookingInternalTransportReferenceId(string $directBookingInternalTransportReferenceId): self
    {
        $this->initialized['directBookingInternalTransportReferenceId'] = true;
        $this->directBookingInternalTransportReferenceId = $directBookingInternalTransportReferenceId;

        return $this;
    }

    public function getInvoiceAddress(): Address
    {
        return $this->invoiceAddress;
    }

    public function setInvoiceAddress(Address $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;

        return $this;
    }

    public function getLoadingEquipmentStoragePlace(): MinimalStoragePlace
    {
        return $this->loadingEquipmentStoragePlace;
    }

    public function setLoadingEquipmentStoragePlace(MinimalStoragePlace $loadingEquipmentStoragePlace): self
    {
        $this->initialized['loadingEquipmentStoragePlace'] = true;
        $this->loadingEquipmentStoragePlace = $loadingEquipmentStoragePlace;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPrimaryAddress(): Address
    {
        return $this->primaryAddress;
    }

    public function setPrimaryAddress(Address $primaryAddress): self
    {
        $this->initialized['primaryAddress'] = true;
        $this->primaryAddress = $primaryAddress;

        return $this;
    }

    public function getShortIdentifier(): string
    {
        return $this->shortIdentifier;
    }

    public function setShortIdentifier(string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;

        return $this;
    }

    public function getStandard(): bool
    {
        return $this->standard;
    }

    public function setStandard(bool $standard): self
    {
        $this->initialized['standard'] = true;
        $this->standard = $standard;

        return $this;
    }

    public function getTransitStoragePlace(): MinimalStoragePlace
    {
        return $this->transitStoragePlace;
    }

    public function setTransitStoragePlace(MinimalStoragePlace $transitStoragePlace): self
    {
        $this->initialized['transitStoragePlace'] = true;
        $this->transitStoragePlace = $transitStoragePlace;

        return $this;
    }

    public function getWarehouseType(): string
    {
        return $this->warehouseType;
    }

    public function setWarehouseType(string $warehouseType): self
    {
        $this->initialized['warehouseType'] = true;
        $this->warehouseType = $warehouseType;

        return $this;
    }
}
