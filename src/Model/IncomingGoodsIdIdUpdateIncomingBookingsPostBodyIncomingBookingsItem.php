<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem extends \ArrayObject
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
     * @var string|null
     */
    protected $articleValuationPrice;

    /**
     * @var string|null
     */
    protected $batchNumber;

    /**
     * @var bool|null
     */
    protected $bookIntoWarehouse;

    /**
     * @var string|null
     */
    protected $confirmedByUserId;

    /**
     * @var string|null
     */
    protected $confirmedByUserIdDeprecated;

    /**
     * @var int|null
     */
    protected $confirmedDate;

    /**
     * @var int|null
     */
    protected $confirmedDateDeprecated;

    /**
     * @var string|null
     */
    protected $confirmedQuantityDeprecated;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $expirationDate;

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $incomingGoodsItemId;

    /**
     * @var string|null
     */
    protected $internalTransportReferenceId;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $loadingEquipmentIdentifierId;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var list<string>|null
     */
    protected $serialNumbers;

    /**
     * @var string|null
     */
    protected $storagePlaceId;

    /**
     * @var string|null
     */
    protected $version;

    public function getArticleValuationPrice(): ?string
    {
        return $this->articleValuationPrice;
    }

    public function setArticleValuationPrice(?string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;

        return $this;
    }

    public function getBatchNumber(): ?string
    {
        return $this->batchNumber;
    }

    public function setBatchNumber(?string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;

        return $this;
    }

    public function getBookIntoWarehouse(): ?bool
    {
        return $this->bookIntoWarehouse;
    }

    public function setBookIntoWarehouse(?bool $bookIntoWarehouse): self
    {
        $this->initialized['bookIntoWarehouse'] = true;
        $this->bookIntoWarehouse = $bookIntoWarehouse;

        return $this;
    }

    public function getConfirmedByUserId(): ?string
    {
        return $this->confirmedByUserId;
    }

    public function setConfirmedByUserId(?string $confirmedByUserId): self
    {
        $this->initialized['confirmedByUserId'] = true;
        $this->confirmedByUserId = $confirmedByUserId;

        return $this;
    }

    public function getConfirmedByUserIdDeprecated(): ?string
    {
        return $this->confirmedByUserIdDeprecated;
    }

    public function setConfirmedByUserIdDeprecated(?string $confirmedByUserIdDeprecated): self
    {
        $this->initialized['confirmedByUserIdDeprecated'] = true;
        $this->confirmedByUserIdDeprecated = $confirmedByUserIdDeprecated;

        return $this;
    }

    public function getConfirmedDate(): ?int
    {
        return $this->confirmedDate;
    }

    public function setConfirmedDate(?int $confirmedDate): self
    {
        $this->initialized['confirmedDate'] = true;
        $this->confirmedDate = $confirmedDate;

        return $this;
    }

    public function getConfirmedDateDeprecated(): ?int
    {
        return $this->confirmedDateDeprecated;
    }

    public function setConfirmedDateDeprecated(?int $confirmedDateDeprecated): self
    {
        $this->initialized['confirmedDateDeprecated'] = true;
        $this->confirmedDateDeprecated = $confirmedDateDeprecated;

        return $this;
    }

    public function getConfirmedQuantityDeprecated(): ?string
    {
        return $this->confirmedQuantityDeprecated;
    }

    public function setConfirmedQuantityDeprecated(?string $confirmedQuantityDeprecated): self
    {
        $this->initialized['confirmedQuantityDeprecated'] = true;
        $this->confirmedQuantityDeprecated = $confirmedQuantityDeprecated;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getExpirationDate(): ?int
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(?int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getIncomingGoodsItemId(): ?string
    {
        return $this->incomingGoodsItemId;
    }

    public function setIncomingGoodsItemId(?string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;

        return $this;
    }

    public function getInternalTransportReferenceId(): ?string
    {
        return $this->internalTransportReferenceId;
    }

    public function setInternalTransportReferenceId(?string $internalTransportReferenceId): self
    {
        $this->initialized['internalTransportReferenceId'] = true;
        $this->internalTransportReferenceId = $internalTransportReferenceId;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getLoadingEquipmentIdentifierId(): ?string
    {
        return $this->loadingEquipmentIdentifierId;
    }

    public function setLoadingEquipmentIdentifierId(?string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getSerialNumbers(): ?array
    {
        return $this->serialNumbers;
    }

    /**
     * @param  list<string>|null  $serialNumbers
     */
    public function setSerialNumbers(?array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;

        return $this;
    }

    public function getStoragePlaceId(): ?string
    {
        return $this->storagePlaceId;
    }

    public function setStoragePlaceId(?string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }
}
