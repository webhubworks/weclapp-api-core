<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderGetResponse200 extends \ArrayObject
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
     * @var SalesOrderGetResponse200AdditionalProperties
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<SalesOrder>
     */
    protected $result;
    /**
     * 
     *
     * @return SalesOrderGetResponse200AdditionalProperties
     */
    public function getAdditionalProperties(): SalesOrderGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param SalesOrderGetResponse200AdditionalProperties $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(SalesOrderGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<SalesOrder>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<SalesOrder> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}