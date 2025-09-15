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
     * @var bool|null
     */
    protected $createOrUpdateArticleSupplySource;
    /**
     * 
     *
     * @var string|null
     */
    protected $offerItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderItemId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $updateInformation;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatePurchasePrice;
    /**
     * 
     *
     * @return bool|null
     */
    public function getCreateOrUpdateArticleSupplySource(): ?bool
    {
        return $this->createOrUpdateArticleSupplySource;
    }
    /**
     * 
     *
     * @param bool|null $createOrUpdateArticleSupplySource
     *
     * @return self
     */
    public function setCreateOrUpdateArticleSupplySource(?bool $createOrUpdateArticleSupplySource): self
    {
        $this->initialized['createOrUpdateArticleSupplySource'] = true;
        $this->createOrUpdateArticleSupplySource = $createOrUpdateArticleSupplySource;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOfferItemId(): ?string
    {
        return $this->offerItemId;
    }
    /**
     * 
     *
     * @param string|null $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(?string $offerItemId): self
    {
        $this->initialized['offerItemId'] = true;
        $this->offerItemId = $offerItemId;
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
     * @return string|null
     */
    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUpdateInformation(): ?bool
    {
        return $this->updateInformation;
    }
    /**
     * 
     *
     * @param bool|null $updateInformation
     *
     * @return self
     */
    public function setUpdateInformation(?bool $updateInformation): self
    {
        $this->initialized['updateInformation'] = true;
        $this->updateInformation = $updateInformation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatePurchasePrice(): ?string
    {
        return $this->updatePurchasePrice;
    }
    /**
     * 
     *
     * @param string|null $updatePurchasePrice
     *
     * @return self
     */
    public function setUpdatePurchasePrice(?string $updatePurchasePrice): self
    {
        $this->initialized['updatePurchasePrice'] = true;
        $this->updatePurchasePrice = $updatePurchasePrice;
        return $this;
    }
}