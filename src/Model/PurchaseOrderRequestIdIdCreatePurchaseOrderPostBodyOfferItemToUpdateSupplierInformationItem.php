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
     * @var bool|null
     */
    protected $createOrUpdateArticleSupplySource;

    /**
     * @var int|null
     */
    protected $offerItemId;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var int|null
     */
    protected $salesOrderItemId;

    /**
     * @var bool|null
     */
    protected $updateInformation;

    /**
     * @var string|null
     */
    protected $updatePurchasePrice;

    public function getCreateOrUpdateArticleSupplySource(): ?bool
    {
        return $this->createOrUpdateArticleSupplySource;
    }

    public function setCreateOrUpdateArticleSupplySource(?bool $createOrUpdateArticleSupplySource): self
    {
        $this->initialized['createOrUpdateArticleSupplySource'] = true;
        $this->createOrUpdateArticleSupplySource = $createOrUpdateArticleSupplySource;

        return $this;
    }

    public function getOfferItemId(): ?int
    {
        return $this->offerItemId;
    }

    public function setOfferItemId(?int $offerItemId): self
    {
        $this->initialized['offerItemId'] = true;
        $this->offerItemId = $offerItemId;

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

    public function getSalesOrderItemId(): ?int
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(?int $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }

    public function getUpdateInformation(): ?bool
    {
        return $this->updateInformation;
    }

    public function setUpdateInformation(?bool $updateInformation): self
    {
        $this->initialized['updateInformation'] = true;
        $this->updateInformation = $updateInformation;

        return $this;
    }

    public function getUpdatePurchasePrice(): ?string
    {
        return $this->updatePurchasePrice;
    }

    public function setUpdatePurchasePrice(?string $updatePurchasePrice): self
    {
        $this->initialized['updatePurchasePrice'] = true;
        $this->updatePurchasePrice = $updatePurchasePrice;

        return $this;
    }
}
