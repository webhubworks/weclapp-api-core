<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdCalculateSalesPricesPostBody extends \ArrayObject
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
    protected $calculationMode;

    /**
     * @var string|null
     */
    protected $percentage;

    /**
     * @var list<string>|null
     */
    protected $quotationItemIds;

    public function getCalculationMode(): ?string
    {
        return $this->calculationMode;
    }

    public function setCalculationMode(?string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;

        return $this;
    }

    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getQuotationItemIds(): ?array
    {
        return $this->quotationItemIds;
    }

    /**
     * @param  list<string>|null  $quotationItemIds
     */
    public function setQuotationItemIds(?array $quotationItemIds): self
    {
        $this->initialized['quotationItemIds'] = true;
        $this->quotationItemIds = $quotationItemIds;

        return $this;
    }
}
