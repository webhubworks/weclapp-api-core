<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdCreatePickPostBody extends \ArrayObject
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
    protected $batchNumber;

    /**
     * @var list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem>|null
     */
    protected $existingReservations;

    /**
     * @var string|null
     */
    protected $internalTransportReferenceId;

    /**
     * @var string|null
     */
    protected $orderItemId;

    /**
     * @var string|null
     */
    protected $packagingUnitBaseArticleId;

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

    /**
     * @return list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem>|null
     */
    public function getExistingReservations(): ?array
    {
        return $this->existingReservations;
    }

    /**
     * @param  list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem>|null  $existingReservations
     */
    public function setExistingReservations(?array $existingReservations): self
    {
        $this->initialized['existingReservations'] = true;
        $this->existingReservations = $existingReservations;

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

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(?string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getPackagingUnitBaseArticleId(): ?string
    {
        return $this->packagingUnitBaseArticleId;
    }

    public function setPackagingUnitBaseArticleId(?string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;

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
}
