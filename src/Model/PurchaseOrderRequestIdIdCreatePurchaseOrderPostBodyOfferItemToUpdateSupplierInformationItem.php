<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem extends \ArrayObject
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
     * @var bool
     */
    protected $createOrUpdateArticleSupplySource;
    /**
     * 
     *
     * @var int
     */
    protected $offerItemId;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var int
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var bool
     */
    protected $updateInformation;
    /**
     * 
     *
     * @var string
     */
    protected $updatePurchasePrice;
    /**
     * 
     *
     * @return bool
     */
    public function getCreateOrUpdateArticleSupplySource(): bool
    {
        return $this->createOrUpdateArticleSupplySource;
    }
    /**
     * 
     *
     * @param bool $createOrUpdateArticleSupplySource
     *
     * @return self
     */
    public function setCreateOrUpdateArticleSupplySource(bool $createOrUpdateArticleSupplySource): self
    {
        $this->initialized['createOrUpdateArticleSupplySource'] = true;
        $this->createOrUpdateArticleSupplySource = $createOrUpdateArticleSupplySource;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOfferItemId(): int
    {
        return $this->offerItemId;
    }
    /**
     * 
     *
     * @param int $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(int $offerItemId): self
    {
        $this->initialized['offerItemId'] = true;
        $this->offerItemId = $offerItemId;
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
     * @return int
     */
    public function getSalesOrderItemId(): int
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param int $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(int $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUpdateInformation(): bool
    {
        return $this->updateInformation;
    }
    /**
     * 
     *
     * @param bool $updateInformation
     *
     * @return self
     */
    public function setUpdateInformation(bool $updateInformation): self
    {
        $this->initialized['updateInformation'] = true;
        $this->updateInformation = $updateInformation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatePurchasePrice(): string
    {
        return $this->updatePurchasePrice;
    }
    /**
     * 
     *
     * @param string $updatePurchasePrice
     *
     * @return self
     */
    public function setUpdatePurchasePrice(string $updatePurchasePrice): self
    {
        $this->initialized['updatePurchasePrice'] = true;
        $this->updatePurchasePrice = $updatePurchasePrice;
        return $this;
    }
}