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
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultConsolidationStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultProductionStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultReturnsStoragePlaceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultStoragePlaceId;
    /**
     * 
     *
     * @var Address|null
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $directBookingInternalTransportReferenceId;
    /**
     * 
     *
     * @var Address|null
     */
    protected $invoiceAddress;
    /**
     * 
     *
     * @var MinimalStoragePlace|null
     */
    protected $loadingEquipmentStoragePlace;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var Address|null
     */
    protected $primaryAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $shortIdentifier;
    /**
     * 
     *
     * @var bool|null
     */
    protected $standard;
    /**
     * 
     *
     * @var MinimalStoragePlace|null
     */
    protected $transitStoragePlace;
    /**
     * 
     *
     * @var string|null
     */
    protected $warehouseType;
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
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultConsolidationStoragePlaceId(): ?string
    {
        return $this->defaultConsolidationStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $defaultConsolidationStoragePlaceId
     *
     * @return self
     */
    public function setDefaultConsolidationStoragePlaceId(?string $defaultConsolidationStoragePlaceId): self
    {
        $this->initialized['defaultConsolidationStoragePlaceId'] = true;
        $this->defaultConsolidationStoragePlaceId = $defaultConsolidationStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultProductionStoragePlaceId(): ?string
    {
        return $this->defaultProductionStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $defaultProductionStoragePlaceId
     *
     * @return self
     */
    public function setDefaultProductionStoragePlaceId(?string $defaultProductionStoragePlaceId): self
    {
        $this->initialized['defaultProductionStoragePlaceId'] = true;
        $this->defaultProductionStoragePlaceId = $defaultProductionStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultReturnsStoragePlaceId(): ?string
    {
        return $this->defaultReturnsStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $defaultReturnsStoragePlaceId
     *
     * @return self
     */
    public function setDefaultReturnsStoragePlaceId(?string $defaultReturnsStoragePlaceId): self
    {
        $this->initialized['defaultReturnsStoragePlaceId'] = true;
        $this->defaultReturnsStoragePlaceId = $defaultReturnsStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultStoragePlaceId(): ?string
    {
        return $this->defaultStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $defaultStoragePlaceId
     *
     * @return self
     */
    public function setDefaultStoragePlaceId(?string $defaultStoragePlaceId): self
    {
        $this->initialized['defaultStoragePlaceId'] = true;
        $this->defaultStoragePlaceId = $defaultStoragePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return Address|null
     */
    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param Address|null $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(?Address $deliveryAddress): self
    {
        $this->initialized['deliveryAddress'] = true;
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDirectBookingInternalTransportReferenceId(): ?string
    {
        return $this->directBookingInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $directBookingInternalTransportReferenceId
     *
     * @return self
     */
    public function setDirectBookingInternalTransportReferenceId(?string $directBookingInternalTransportReferenceId): self
    {
        $this->initialized['directBookingInternalTransportReferenceId'] = true;
        $this->directBookingInternalTransportReferenceId = $directBookingInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return Address|null
     */
    public function getInvoiceAddress(): ?Address
    {
        return $this->invoiceAddress;
    }
    /**
     * 
     *
     * @param Address|null $invoiceAddress
     *
     * @return self
     */
    public function setInvoiceAddress(?Address $invoiceAddress): self
    {
        $this->initialized['invoiceAddress'] = true;
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }
    /**
     * 
     *
     * @return MinimalStoragePlace|null
     */
    public function getLoadingEquipmentStoragePlace(): ?MinimalStoragePlace
    {
        return $this->loadingEquipmentStoragePlace;
    }
    /**
     * 
     *
     * @param MinimalStoragePlace|null $loadingEquipmentStoragePlace
     *
     * @return self
     */
    public function setLoadingEquipmentStoragePlace(?MinimalStoragePlace $loadingEquipmentStoragePlace): self
    {
        $this->initialized['loadingEquipmentStoragePlace'] = true;
        $this->loadingEquipmentStoragePlace = $loadingEquipmentStoragePlace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return Address|null
     */
    public function getPrimaryAddress(): ?Address
    {
        return $this->primaryAddress;
    }
    /**
     * 
     *
     * @param Address|null $primaryAddress
     *
     * @return self
     */
    public function setPrimaryAddress(?Address $primaryAddress): self
    {
        $this->initialized['primaryAddress'] = true;
        $this->primaryAddress = $primaryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShortIdentifier(): ?string
    {
        return $this->shortIdentifier;
    }
    /**
     * 
     *
     * @param string|null $shortIdentifier
     *
     * @return self
     */
    public function setShortIdentifier(?string $shortIdentifier): self
    {
        $this->initialized['shortIdentifier'] = true;
        $this->shortIdentifier = $shortIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getStandard(): ?bool
    {
        return $this->standard;
    }
    /**
     * 
     *
     * @param bool|null $standard
     *
     * @return self
     */
    public function setStandard(?bool $standard): self
    {
        $this->initialized['standard'] = true;
        $this->standard = $standard;
        return $this;
    }
    /**
     * 
     *
     * @return MinimalStoragePlace|null
     */
    public function getTransitStoragePlace(): ?MinimalStoragePlace
    {
        return $this->transitStoragePlace;
    }
    /**
     * 
     *
     * @param MinimalStoragePlace|null $transitStoragePlace
     *
     * @return self
     */
    public function setTransitStoragePlace(?MinimalStoragePlace $transitStoragePlace): self
    {
        $this->initialized['transitStoragePlace'] = true;
        $this->transitStoragePlace = $transitStoragePlace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWarehouseType(): ?string
    {
        return $this->warehouseType;
    }
    /**
     * 
     *
     * @param string|null $warehouseType
     *
     * @return self
     */
    public function setWarehouseType(?string $warehouseType): self
    {
        $this->initialized['warehouseType'] = true;
        $this->warehouseType = $warehouseType;
        return $this;
    }
}