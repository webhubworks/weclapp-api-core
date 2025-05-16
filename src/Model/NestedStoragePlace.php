<?php

namespace Webhubworks\WeclappApiCore\Model;

class NestedStoragePlace extends \ArrayObject
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
    protected $name;
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
    protected $barcode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $blockedForResupply;
    /**
     * 
     *
     * @var string|null
     */
    protected $blockedForResupplyReasonId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var int|null
     */
    protected $fieldNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $levelNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $storagePlaceSizeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $storagePlaceType;
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
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }
    /**
     * 
     *
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->initialized['barcode'] = true;
        $this->barcode = $barcode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBlockedForResupply(): ?bool
    {
        return $this->blockedForResupply;
    }
    /**
     * 
     *
     * @param bool|null $blockedForResupply
     *
     * @return self
     */
    public function setBlockedForResupply(?bool $blockedForResupply): self
    {
        $this->initialized['blockedForResupply'] = true;
        $this->blockedForResupply = $blockedForResupply;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBlockedForResupplyReasonId(): ?string
    {
        return $this->blockedForResupplyReasonId;
    }
    /**
     * 
     *
     * @param string|null $blockedForResupplyReasonId
     *
     * @return self
     */
    public function setBlockedForResupplyReasonId(?string $blockedForResupplyReasonId): self
    {
        $this->initialized['blockedForResupplyReasonId'] = true;
        $this->blockedForResupplyReasonId = $blockedForResupplyReasonId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFieldNumber(): ?int
    {
        return $this->fieldNumber;
    }
    /**
     * 
     *
     * @param int|null $fieldNumber
     *
     * @return self
     */
    public function setFieldNumber(?int $fieldNumber): self
    {
        $this->initialized['fieldNumber'] = true;
        $this->fieldNumber = $fieldNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLevelNumber(): ?int
    {
        return $this->levelNumber;
    }
    /**
     * 
     *
     * @param int|null $levelNumber
     *
     * @return self
     */
    public function setLevelNumber(?int $levelNumber): self
    {
        $this->initialized['levelNumber'] = true;
        $this->levelNumber = $levelNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStoragePlaceSizeId(): ?string
    {
        return $this->storagePlaceSizeId;
    }
    /**
     * 
     *
     * @param string|null $storagePlaceSizeId
     *
     * @return self
     */
    public function setStoragePlaceSizeId(?string $storagePlaceSizeId): self
    {
        $this->initialized['storagePlaceSizeId'] = true;
        $this->storagePlaceSizeId = $storagePlaceSizeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStoragePlaceType(): ?string
    {
        return $this->storagePlaceType;
    }
    /**
     * 
     *
     * @param string|null $storagePlaceType
     *
     * @return self
     */
    public function setStoragePlaceType(?string $storagePlaceType): self
    {
        $this->initialized['storagePlaceType'] = true;
        $this->storagePlaceType = $storagePlaceType;
        return $this;
    }
}