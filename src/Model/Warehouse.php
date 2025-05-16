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
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $defaultConsolidationStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultProductionStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultReturnsStoragePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $defaultStoragePlaceId;
    /**
     * 
     *
     * @var Address
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var string
     */
    protected $directBookingInternalTransportReferenceId;
    /**
     * 
     *
     * @var Address
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var MinimalStoragePlace
     */
    protected $loadingEquipmentStoragePlace;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var Address
     */
    protected $primaryAddress;
    /**
     * 
     *
     * @var string
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var bool
     */
    protected $standard;
    /**
     * 
     *
     * @var MinimalStoragePlace
     */
    protected $transitStoragePlace;
    /**
     * 
     *
     * @var string
     */
    protected $warehouseType;
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
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultConsolidationStoragePlaceId(): string
    {
        return $this->defaultConsolidationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $defaultConsolidationStoragePlaceId
     *
     * @return self
     */
    public function setDefaultConsolidationStoragePlaceId(string $defaultConsolidationStoragePlaceId): self
    {
        $this->initialized['defaultConsolidationStoragePlaceId'] = true;
        $this->defaultConsolidationStoragePlaceId = $defaultConsolidationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultProductionStoragePlaceId(): string
    {
        return $this->defaultProductionStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $defaultProductionStoragePlaceId
     *
     * @return self
     */
    public function setDefaultProductionStoragePlaceId(string $defaultProductionStoragePlaceId): self
    {
        $this->initialized['defaultProductionStoragePlaceId'] = true;
        $this->defaultProductionStoragePlaceId = $defaultProductionStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultReturnsStoragePlaceId(): string
    {
        return $this->defaultReturnsStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $defaultReturnsStoragePlaceId
     *
     * @return self
     */
    public function setDefaultReturnsStoragePlaceId(string $defaultReturnsStoragePlaceId): self
    {
        $this->initialized['defaultReturnsStoragePlaceId'] = true;
        $this->defaultReturnsStoragePlaceId = $defaultReturnsStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultStoragePlaceId(): string
    {
        return $this->defaultStoragePlaceId;
    }
    /**
     * 
     *
     * @param string $defaultStoragePlaceId
     *
     * @return self
     */
    public function setDefaultStoragePlaceId(string $defaultStoragePlaceId): self
    {
        $this->initialized['defaultStoragePlaceId'] = true;
        $this->defaultStoragePlaceId = $defaultStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getDeliveryAddress(): Address
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param Address $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(Address $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDirectBookingInternalTransportReferenceId(): string
    {
        return $this->directBookingInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string $directBookingInternalTransportReferenceId
     *
     * @return self
     */
    public function setDirectBookingInternalTransportReferenceId(string $directBookingInternalTransportReferenceId): self
    {
        $this->initialized['directBookingInternalTransportReferenceId'] = true;
        $this->directBookingInternalTransportReferenceId = $directBookingInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getInvoiceAddress(): Address
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param Address $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(Address $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return MinimalStoragePlace
     */
    public function getLoadingEquipmentStoragePlace(): MinimalStoragePlace
    {
        return $this->loadingEquipmentStoragePlace;
    }
    /**
     * 
     *
     * @param MinimalStoragePlace $loadingEquipmentStoragePlace
     *
     * @return self
     */
    public function setLoadingEquipmentStoragePlace(MinimalStoragePlace $loadingEquipmentStoragePlace): self
    {
        $this->initialized['loadingEquipmentStoragePlace'] = true;
        $this->loadingEquipmentStoragePlace = $loadingEquipmentStoragePlace;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return Address
     */
    public function getPrimaryAddress(): Address
    {
        return $this->primaryAddress;
    }
    /**
     * 
     *
     * @param Address $primaryAddress
     *
     * @return self
     */
    public function setPrimaryAddress(Address $primaryAddress): self
    {
        $this->initialized['primaryAddress'] = true;
        $this->primaryAddress = $primaryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortIdentifier(): string
    {
        return $this->shortIdentifier;
    }
    /**
     * 
     *
     * @param string $shortIdentifier
     *
     * @return self
     */
    public function setShortIdentifier(string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStandard(): bool
    {
        return $this->standard;
    }
    /**
     * 
     *
     * @param bool $standard
     *
     * @return self
     */
    public function setStandard(bool $standard): self
    {
        $this->initialized['standard'] = true;
        $this->standard = $standard;
        return $this;
    }
    /**
     * 
     *
     * @return MinimalStoragePlace
     */
    public function getTransitStoragePlace(): MinimalStoragePlace
    {
        return $this->transitStoragePlace;
    }
    /**
     * 
     *
     * @param MinimalStoragePlace $transitStoragePlace
     *
     * @return self
     */
    public function setTransitStoragePlace(MinimalStoragePlace $transitStoragePlace): self
    {
        $this->initialized['transitStoragePlace'] = true;
        $this->transitStoragePlace = $transitStoragePlace;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWarehouseType(): string
    {
        return $this->warehouseType;
    }
    /**
     * 
     *
     * @param string $warehouseType
     *
     * @return self
     */
    public function setWarehouseType(string $warehouseType): self
    {
        $this->initialized['warehouseType'] = true;
        $this->warehouseType = $warehouseType;
        return $this;
    }
}