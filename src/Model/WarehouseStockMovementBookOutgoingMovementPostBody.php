<?php

namespace Webhubworks\WeclappApiCore\Model;

class WarehouseStockMovementBookOutgoingMovementPostBody extends \ArrayObject
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
    protected $batchNumber;

    /**
     * @var string
     */
    protected $costCenterId;

    /**
     * @var list<WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItem>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $internalTransportReferenceId;

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
    protected $sourceStoragePlaceId;

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

    public function getCostCenterId(): string
    {
        return $this->costCenterId;
    }

    public function setCostCenterId(string $costCenterId): self
    {
        $this->initialized['costCenterId'] = true;
        $this->costCenterId = $costCenterId;

        return $this;
    }

    /**
     * @return list<WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItem>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItem>  $customAttributes
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
}
