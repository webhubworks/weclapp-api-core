<?php

namespace Webhubworks\WeclappApiCore\Model;

class FinancialYearIdIdGeneratePeriodsPostResponse200 extends \ArrayObject
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
     * @var FinancialYear
     */
    protected $result;
    /**
     * 
     *
     * @return FinancialYear
     */
    public function getResult(): FinancialYear
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param FinancialYear $result
     *
     * @return self
     */
    public function setResult(FinancialYear $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}