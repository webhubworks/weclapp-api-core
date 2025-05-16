<?php

namespace Webhubworks\WeclappApiCore\Model;

class ItemPick extends \ArrayObject
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
     * @var string
     */
    protected $batchNumber;

    /**
     * @var string
     */
    protected $confirmedByUserId;

    /**
     * @var int
     */
    protected $confirmedDate;

    /**
     * @var string
     */
    protected $internalTransportReferenceId;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var list<string>
     */
    protected $serialNumbers;

    /**
     * @var string
     */
    protected $storagePlaceId;

    /**
     * @var int
     */
    protected $bookedDate;

    /**
     * @var string
     */
    protected $orderItemId;

    /**
     * @var string
     */
    protected $sourceInternalTransportReferenceId;

    /**
     * @var string
     */
    protected $sourceStoragePlaceId;

    /**
     * @var string
     */
    protected $transportationOrderId;

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

    public function getBatchNumber(): string
    {
        return $this->batchNumber;
    }

    public function setBatchNumber(string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getConfirmedByUserId(): string
    {
        return $this->confirmedByUserId;
    }

    public function setConfirmedByUserId(string $confirmedByUserId): self
    {
        $this->initialized['confirmedByUserId'] = true;
        $this->confirmedByUserId = $confirmedByUserId;

        return $this;
    }

    public function getConfirmedDate(): int
    {
        return $this->confirmedDate;
    }

    public function setConfirmedDate(int $confirmedDate): self
    {
        $this->initialized['confirmedDate'] = true;
        $this->confirmedDate = $confirmedDate;

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

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<string>  $serialNumbers
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    public function getStoragePlaceId(): string
    {
        return $this->storagePlaceId;
    }

    public function setStoragePlaceId(string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;

        return $this;
    }

    public function getBookedDate(): int
    {
        return $this->bookedDate;
    }

    public function setBookedDate(int $bookedDate): self
    {
        $this->initialized['bookedDate'] = true;
        $this->bookedDate = $bookedDate;

        return $this;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getSourceInternalTransportReferenceId(): string
    {
        return $this->sourceInternalTransportReferenceId;
    }

    public function setSourceInternalTransportReferenceId(string $sourceInternalTransportReferenceId): self
    {
        $this->initialized['sourceInternalTransportReferenceId'] = true;
        $this->sourceInternalTransportReferenceId = $sourceInternalTransportReferenceId;

        return $this;
    }

    public function getSourceStoragePlaceId(): string
    {
        return $this->sourceStoragePlaceId;
    }

    public function setSourceStoragePlaceId(string $sourceStoragePlaceId): self
    {
        $this->initialized['sourceStoragePlaceId'] = true;
        $this->sourceStoragePlaceId = $sourceStoragePlaceId;

        return $this;
    }

    public function getTransportationOrderId(): string
    {
        return $this->transportationOrderId;
    }

    public function setTransportationOrderId(string $transportationOrderId): self
    {
        $this->initialized['transportationOrderId'] = true;
        $this->transportationOrderId = $transportationOrderId;

        return $this;
    }
}
