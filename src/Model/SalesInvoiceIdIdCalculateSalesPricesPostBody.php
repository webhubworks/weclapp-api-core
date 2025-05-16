<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesInvoiceIdIdCalculateSalesPricesPostBody extends \ArrayObject
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
    protected $calculationMode;

    /**
     * @var list<string>
     */
    protected $invoiceItemIds;

    /**
     * @var string
     */
    protected $percentage;

    public function getCalculationMode(): string
    {
        return $this->calculationMode;
    }

    public function setCalculationMode(string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getInvoiceItemIds(): array
    {
        return $this->invoiceItemIds;
    }

    /**
     * @param  list<string>  $invoiceItemIds
     */
    public function setInvoiceItemIds(array $invoiceItemIds): self
    {
        $this->initialized['invoiceItemIds'] = true;
        $this->invoiceItemIds = $invoiceItemIds;

        return $this;
    }

    public function getPercentage(): string
    {
        return $this->percentage;
    }

    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
