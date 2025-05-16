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
     * 
     *
     * @var string
     */
    protected $calculationMode;
    /**
     * 
     *
     * @var string
     */
    protected $percentage;
    /**
     * 
     *
     * @var list<string>
     */
    protected $quotationItemIds;
    /**
     * 
     *
     * @return string
     */
    public function getCalculationMode(): string
    {
        return $this->calculationMode;
    }
    /**
     * 
     *
     * @param string $calculationMode
     *
     * @return self
     */
    public function setCalculationMode(string $calculationMode): self
    {
        $this->initialized['calculationMode'] = true;
        $this->calculationMode = $calculationMode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * 
     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getQuotationItemIds(): array
    {
        return $this->quotationItemIds;
    }
    /**
     * 
     *
     * @param list<string> $quotationItemIds
     *
     * @return self
     */
    public function setQuotationItemIds(array $quotationItemIds): self
    {
        $this->initialized['quotationItemIds'] = true;
        $this->quotationItemIds = $quotationItemIds;
        return $this;
    }
}