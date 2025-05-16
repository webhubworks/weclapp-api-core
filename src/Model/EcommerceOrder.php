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
     * @var string|null
     */
    protected $ecommerceId;

    /**
     * @var string|null
     */
    protected $externalConnectionId;

    public function getEcommerceId(): ?string
    {
        return $this->ecommerceId;
    }

    public function setEcommerceId(?string $ecommerceId): self
    {
        $this->initialized['ecommerceId'] = true;
        $this->ecommerceId = $ecommerceId;

        return $this;
    }

    public function getExternalConnectionId(): ?string
    {
        return $this->externalConnectionId;
    }

    public function setExternalConnectionId(?string $externalConnectionId): self
    {
        $this->initialized['externalConnectionId'] = true;
        $this->externalConnectionId = $externalConnectionId;

        return $this;
    }
}
