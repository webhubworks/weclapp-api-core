<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdAddSalesOrdersPostBody extends \ArrayObject
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
    protected $collectiveInvoicePositionPrintType;

    /**
     * @var list<string>|null
     */
    protected $salesOrderIds;

    public function getCollectiveInvoicePositionPrintType(): ?string
    {
        return $this->collectiveInvoicePositionPrintType;
    }

    public function setCollectiveInvoicePositionPrintType(?string $collectiveInvoicePositionPrintType): self
    {
        $this->initialized['collectiveInvoicePositionPrintType'] = true;
        $this->collectiveInvoicePositionPrintType = $collectiveInvoicePositionPrintType;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getSalesOrderIds(): ?array
    {
        return $this->salesOrderIds;
    }

    /**
     * @param  list<string>|null  $salesOrderIds
     */
    public function setSalesOrderIds(?array $salesOrderIds): self
    {
        $this->initialized['salesOrderIds'] = true;
        $this->salesOrderIds = $salesOrderIds;

        return $this;
    }
}
