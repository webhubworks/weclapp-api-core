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
     * 
     *
     * @var string
     */
    protected $batchNumber;
    /**
     * 
     *
     * @var list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem>
     */
    protected $existingReservations;
    /**
     * 
     *
     * @var string
     */
    protected $internalTransportReferenceId;
    /**
     * 
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $packagingUnitBaseArticleId;
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
     * @return list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem>
     */
    public function getExistingReservations(): array
    {
        return $this->existingReservations;
    }
    /**
     * 
     *
     * @param list<TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem> $existingReservations
     *
     * @return self
     */
    public function setExistingReservations(array $existingReservations): self
    {
        $this->initialized['existingReservations'] = true;
        $this->existingReservations = $existingReservations;
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
     * @return string
     */
    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }
    /**
     * 
     *
     * @param string $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(string $orderItemId): self
    {
        $this->initialized['orderItemId'] = true;
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPackagingUnitBaseArticleId(): string
    {
        return $this->packagingUnitBaseArticleId;
    }
    /**
     * 
     *
     * @param string $packagingUnitBaseArticleId
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId(string $packagingUnitBaseArticleId): self
    {
        $this->initialized['packagingUnitBaseArticleId'] = true;
        $this->packagingUnitBaseArticleId = $packagingUnitBaseArticleId;
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
}