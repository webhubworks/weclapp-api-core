<?php

namespace Webhubworks\WeclappApiCore\Model;

class BasePick extends \ArrayObject
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
     * @var string|null
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $confirmedByUserId;
    /**
     * 
     *
     * @var int|null
     */
    protected $confirmedDate;
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
    protected $quantity;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string|null
     */
    protected $storagePlaceId;
    /**
     * 
     *
     * @var int|null
     */
    protected $bookedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceInternalTransportReferenceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $sourceStoragePlaceId;
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
     * @return string|null
     */
    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }
    /**
     * 
     *
     * @param string|null $batchNumber
     *
     * @return self
     */
    public function setBatchNumber(?string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConfirmedByUserId(): ?string
    {
        return $this->confirmedByUserId;
    }
    /**
     * 
     *
     * @param string|null $confirmedByUserId
     *
     * @return self
     */
    public function setConfirmedByUserId(?string $confirmedByUserId): self
    {
        $this->initialized['confirmedByUserId'] = true;
        $this->confirmedByUserId = $confirmedByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getConfirmedDate(): ?int
    {
        return $this->confirmedDate;
    }
    /**
     * 
     *
     * @param int|null $confirmedDate
     *
     * @return self
     */
    public function setConfirmedDate(?int $confirmedDate): self
    {
        $this->initialized['confirmedDate'] = true;
        $this->confirmedDate = $confirmedDate;
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
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<string>|null $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStoragePlaceId(): ?string
    {
        return $this->storagePlaceId;
    }
    /**
     * 
     *
     * @param string|null $storagePlaceId
     *
     * @return self
     */
    public function setStoragePlaceId(?string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBookedDate(): ?int
    {
        return $this->bookedDate;
    }
    /**
     * 
     *
     * @param int|null $bookedDate
     *
     * @return self
     */
    public function setBookedDate(?int $bookedDate): self
    {
        $this->initialized['bookedDate'] = true;
        $this->bookedDate = $bookedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }
    /**
     * 
     *
     * @param string|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceInternalTransportReferenceId(): ?string
    {
        return $this->sourceInternalTransportReferenceId;
    }
    /**
     * 
     *
     * @param string|null $sourceInternalTransportReferenceId
     *
     * @return self
     */
    public function setSourceInternalTransportReferenceId(?string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceStoragePlaceId(): ?string
    {
        return $this->sourceStoragePlaceId;
    }
    /**
     * 
     *
     * @param string|null $sourceStoragePlaceId
     *
     * @return self
     */
    public function setSourceStoragePlaceId(?string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;
        return $this;
    }
}