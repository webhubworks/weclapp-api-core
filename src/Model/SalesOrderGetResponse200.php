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
     * @var SalesOrderGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;

    /**
     * @var list<SalesOrder>|null
     */
    protected $result;

    public function getAdditionalProperties(): ?SalesOrderGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }

    public function setAdditionalProperties(?SalesOrderGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return list<SalesOrder>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<SalesOrder>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
