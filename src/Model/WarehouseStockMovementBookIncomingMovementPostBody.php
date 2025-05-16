<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookIncomingMovementPostBody extends \ArrayObject
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
    protected $articleId;

    /**
     * @var string
     */
    protected $articleValuationPrice;

    /**
     * @var string
     */
    protected $batchNumber;

    /**
     * @var int
     */
    protected $batchNumberExpirationDate;

    /**
     * @var list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $internalTransportReferenceId;

    /**
     * @var string
     */
    protected $loadingEquipmentIdentifierId;

    /**
     * @var string
     */
    protected $movementNote;

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
    protected $targetStoragePlaceId;

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    public function getArticleValuationPrice(): string
    {
        return $this->articleValuationPrice;
    }

    public function setArticleValuationPrice(string $articleValuationPrice): self
    {
        $this->initialized['articleValuationPrice'] = true;
        $this->articleValuationPrice = $articleValuationPrice;

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

    public function getBatchNumberExpirationDate(): int
    {
        return $this->batchNumberExpirationDate;
    }

    public function setBatchNumberExpirationDate(int $batchNumberExpirationDate): self
    {
        $this->initialized['batchNumberExpirationDate'] = true;
        $this->batchNumberExpirationDate = $batchNumberExpirationDate;

        return $this;
    }

    /**
     * @return list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

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

    public function getMovementNote(): string
    {
        return $this->movementNote;
    }

    public function setMovementNote(string $movementNote): self
    {
        $this->initialized['movementNote'] = true;
        $this->movementNote = $movementNote;

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

    public function getTargetStoragePlaceId(): string
    {
        return $this->targetStoragePlaceId;
    }

    public function setTargetStoragePlaceId(string $targetStoragePlaceId): self
    {
        $this->initialized['targetStoragePlaceId'] = true;
        $this->targetStoragePlaceId = $targetStoragePlaceId;

        return $this;
    }
}
