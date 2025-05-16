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
     * @var int
     */
    protected $offerId;

    /**
     * @var list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>
     */
    protected $offerItemToUpdateSupplierInformation;

    /**
     * @var int
     */
    protected $salesOrderId;

    public function getOfferId(): int
    {
        return $this->offerId;
    }

    public function setOfferId(int $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * @return list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>
     */
    public function getOfferItemToUpdateSupplierInformation(): array
    {
        return $this->offerItemToUpdateSupplierInformation;
    }

    /**
     * @param  list<PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem>  $offerItemToUpdateSupplierInformation
     */
    public function setOfferItemToUpdateSupplierInformation(array $offerItemToUpdateSupplierInformation): self
    {
        $this->initialized['offerItemToUpdateSupplierInformation'] = true;
        $this->offerItemToUpdateSupplierInformation = $offerItemToUpdateSupplierInformation;

        return $this;
    }

    public function getSalesOrderId(): int
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(int $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }
}
