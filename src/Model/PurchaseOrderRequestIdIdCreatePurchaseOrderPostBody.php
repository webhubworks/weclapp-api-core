<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody extends \ArrayObject
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
    protected $offerId;
    /**
     * 
     *
     * @var list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>|null
     */
    protected $offerItemToUpdateSupplierInformation;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @return string|null
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }
    /**
     * 
     *
     * @param string|null $offerId
     *
     * @return self
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;
        return $this;
    }
    /**
     * 
     *
     * @return list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>|null
     */
    public function getOfferItemToUpdateSupplierInformation(): ?array
    {
        return $this->offerItemToUpdateSupplierInformation;
    }
    /**
     * 
     *
     * @param list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>|null $offerItemToUpdateSupplierInformation
     *
     * @return self
     */
    public function setOfferItemToUpdateSupplierInformation(?array $offerItemToUpdateSupplierInformation): self
    {
        $this->initialized['offerItemToUpdateSupplierInformation'] = true;
        $this->offerItemToUpdateSupplierInformation = $offerItemToUpdateSupplierInformation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
}