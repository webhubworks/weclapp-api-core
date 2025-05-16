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
     * 
     *
     * @var string
     */
    protected $articleValuationPrice;
    /**
     * 
     *
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $bookIntoWarehouse;
    /**
     * 
     *
     * @var string
     */
    protected $confirmedByUserId;
    /**
     * 
     *
     * @var string
     */
    protected $confirmedByUserIdDeprecated;
    /**
     * 
     *
     * @var int
     */
    protected $confirmedDate;
    /**
     * 
     *
     * @var int
     */
    protected $confirmedDateDeprecated;
    /**
     * 
     *
     * @var string
     */
    protected $confirmedQuantityDeprecated;
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
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $incomingGoodsItemId;
    /**
     * 
     *
     * @var string
     */
    protected $internalTransportReferenceId;
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
    protected $loadingEquipmentIdentifierId;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var list<string>
     */
    protected $serialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $storagePlaceId;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return string
     */
    public function getArticleValuationPrice(): string
    {
        return $this->articleValuationPrice;
    }
    /**
     * 
     *
     * @param string $articleValuationPrice
     *
     * @return self
     */
    public function setArticleValuationPrice(string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBatchNumber(): string
    {
        return $this->batchNumber;
    }
    /**
     * 
     *
     * @param string $batchNumber
     *
     * @return self
     */
    public function setBatchNumber(string $batchNumber): self
    {
        $this->initialized['batchNumber'] = true;
        $this->batchNumber = $batchNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBookIntoWarehouse(): bool
    {
        return $this->bookIntoWarehouse;
    }
    /**
     * 
     *
     * @param bool $bookIntoWarehouse
     *
     * @return self
     */
    public function setBookIntoWarehouse(bool $bookIntoWarehouse): self
    {
        $this->initialized['bookIntoWarehouse'] = true;
        $this->bookIntoWarehouse = $bookIntoWarehouse;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmedByUserId(): string
    {
        return $this->confirmedByUserId;
    }
    /**
     * 
     *
     * @param string $confirmedByUserId
     *
     * @return self
     */
    public function setConfirmedByUserId(string $confirmedByUserId): self
    {
        $this->initialized['confirmedByUserId'] = true;
        $this->confirmedByUserId = $confirmedByUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmedByUserIdDeprecated(): string
    {
        return $this->confirmedByUserIdDeprecated;
    }
    /**
     * 
     *
     * @param string $confirmedByUserIdDeprecated
     *
     * @return self
     */
    public function setConfirmedByUserIdDeprecated(string $confirmedByUserIdDeprecated): self
    {
        $this->initialized['confirmedByUserIdDeprecated'] = true;
        $this->confirmedByUserIdDeprecated = $confirmedByUserIdDeprecated;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfirmedDate(): int
    {
        return $this->confirmedDate;
    }
    /**
     * 
     *
     * @param int $confirmedDate
     *
     * @return self
     */
    public function setConfirmedDate(int $confirmedDate): self
    {
        $this->initialized['confirmedDate'] = true;
        $this->confirmedDate = $confirmedDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfirmedDateDeprecated(): int
    {
        return $this->confirmedDateDeprecated;
    }
    /**
     * 
     *
     * @param int $confirmedDateDeprecated
     *
     * @return self
     */
    public function setConfirmedDateDeprecated(int $confirmedDateDeprecated): self
    {
        $this->initialized['confirmedDateDeprecated'] = true;
        $this->confirmedDateDeprecated = $confirmedDateDeprecated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmedQuantityDeprecated(): string
    {
        return $this->confirmedQuantityDeprecated;
    }
    /**
     * 
     *
     * @param string $confirmedQuantityDeprecated
     *
     * @return self
     */
    public function setConfirmedQuantityDeprecated(string $confirmedQuantityDeprecated): self
    {
        $this->initialized['confirmedQuantityDeprecated'] = true;
        $this->confirmedQuantityDeprecated = $confirmedQuantityDeprecated;
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
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param int $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
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
     * @return string
     */
    public function getIncomingGoodsItemId(): string
    {
        return $this->incomingGoodsItemId;
    }
    /**
     * 
     *
     * @param string $incomingGoodsItemId
     *
     * @return self
     */
    public function setIncomingGoodsItemId(string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;
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
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getSerialNumbers(): array
    {
        return $this->serialNumbers;
    }
    /**
     * 
     *
     * @param list<string> $serialNumbers
     *
     * @return self
     */
    public function setSerialNumbers(array $serialNumbers): self
    {
        $this->initialized['serialNumbers'] = true;
        $this->serialNumbers = $serialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStoragePlaceId(): string
    {
        return $this->storagePlaceId;
    }
    /**
     * 
     *
     * @param string $storagePlaceId
     *
     * @return self
     */
    public function setStoragePlaceId(string $storagePlaceId): self
    {
        $this->initialized['storagePlaceId'] = true;
        $this->storagePlaceId = $storagePlaceId;
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
}