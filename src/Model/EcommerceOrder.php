<?php

namespace Webhubworks\WeclappApiCore\Model;

class EcommerceOrder extends \ArrayObject
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
    protected $ecommerceId;
    /**
     * 
     *
     * @var string
     */
    protected $externalConnectionId;
    /**
     * 
     *
     * @return string
     */
    public function getEcommerceId(): string
    {
        return $this->ecommerceId;
    }
    /**
     * 
     *
     * @param string $ecommerceId
     *
     * @return self
     */
    public function setEcommerceId(string $ecommerceId): self
    {
        $this->initialized['ecommerceId'] = true;
        $this->ecommerceId = $ecommerceId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExternalConnectionId(): string
    {
        return $this->externalConnectionId;
    }
    /**
     * 
     *
     * @param string $externalConnectionId
     *
     * @return self
     */
    public function setExternalConnectionId(string $externalConnectionId): self
    {
        $this->initialized['externalConnectionId'] = true;
        $this->externalConnectionId = $externalConnectionId;
        return $this;
    }
}