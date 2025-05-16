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
     * @var string|null
     */
    protected $articleValuationPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bookIntoWarehouse;
    /**
     * 
     *
     * @var string|null
     */
    protected $confirmedByUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $confirmedByUserIdDeprecated;
    /**
     * 
     *
     * @var int|null
     */
    protected $confirmedDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $confirmedDateDeprecated;
    /**
     * 
     *
     * @var string|null
     */
    protected $confirmedQuantityDeprecated;
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
    protected $expirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $incomingGoodsItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalTransportReferenceId;
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
    protected $loadingEquipmentIdentifierId;
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
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleValuationPrice(): ?string
    {
        return $this->articleValuationPrice;
    }
    /**
     * 
     *
     * @param string|null $articleValuationPrice
     *
     * @return self
     */
    public function setArticleValuationPrice(?string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;
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
     * @return bool|null
     */
    public function getBookIntoWarehouse(): ?bool
    {
        return $this->bookIntoWarehouse;
    }
    /**
     * 
     *
     * @param bool|null $bookIntoWarehouse
     *
     * @return self
     */
    public function setBookIntoWarehouse(?bool $bookIntoWarehouse): self
    {
        $this->initialized['bookIntoWarehouse'] = true;
        $this->bookIntoWarehouse = $bookIntoWarehouse;
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
     * @return string|null
     */
    public function getConfirmedByUserIdDeprecated(): ?string
    {
        return $this->confirmedByUserIdDeprecated;
    }
    /**
     * 
     *
     * @param string|null $confirmedByUserIdDeprecated
     *
     * @return self
     */
    public function setConfirmedByUserIdDeprecated(?string $confirmedByUserIdDeprecated): self
    {
        $this->initialized['confirmedByUserIdDeprecated'] = true;
        $this->confirmedByUserIdDeprecated = $confirmedByUserIdDeprecated;
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
     * @return int|null
     */
    public function getConfirmedDateDeprecated(): ?int
    {
        return $this->confirmedDateDeprecated;
    }
    /**
     * 
     *
     * @param int|null $confirmedDateDeprecated
     *
     * @return self
     */
    public function setConfirmedDateDeprecated(?int $confirmedDateDeprecated): self
    {
        $this->initialized['confirmedDateDeprecated'] = true;
        $this->confirmedDateDeprecated = $confirmedDateDeprecated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConfirmedQuantityDeprecated(): ?string
    {
        return $this->confirmedQuantityDeprecated;
    }
    /**
     * 
     *
     * @param string|null $confirmedQuantityDeprecated
     *
     * @return self
     */
    public function setConfirmedQuantityDeprecated(?string $confirmedQuantityDeprecated): self
    {
        $this->initialized['confirmedQuantityDeprecated'] = true;
        $this->confirmedQuantityDeprecated = $confirmedQuantityDeprecated;
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
    public function getExpirationDate(): ?int
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param int|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
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
     * @return string|null
     */
    public function getIncomingGoodsItemId(): ?string
    {
        return $this->incomingGoodsItemId;
    }
    /**
     * 
     *
     * @param string|null $incomingGoodsItemId
     *
     * @return self
     */
    public function setIncomingGoodsItemId(?string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;
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
    public function getLoadingEquipmentIdentifierId(): ?string
    {
        return $this->loadingEquipmentIdentifierId;
    }
    /**
     * 
     *
     * @param string|null $loadingEquipmentIdentifierId
     *
     * @return self
     */
    public function setLoadingEquipmentIdentifierId(?string $loadingEquipmentIdentifierId): self
    {
        $this->initialized['loadingEquipmentIdentifierId'] = true;
        $this->loadingEquipmentIdentifierId = $loadingEquipmentIdentifierId;
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
}