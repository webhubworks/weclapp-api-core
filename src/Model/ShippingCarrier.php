<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShippingCarrier extends \ArrayObject
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
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var string
     */
    protected $ecommerceShippingCarrier;

    /**
     * @var string
     */
    protected $internalShippingCarrier;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $positionNumber;

    /**
     * @var string
     */
    protected $shippingServiceProviderType;

    /**
     * @var string
     */
    protected $trackingUrl;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getEcommerceShippingCarrier(): string
    {
        return $this->ecommerceShippingCarrier;
    }

    public function setEcommerceShippingCarrier(string $ecommerceShippingCarrier): self
    {
        $this->initialized['ecommerceShippingCarrier'] = true;
        $this->ecommerceShippingCarrier = $ecommerceShippingCarrier;

        return $this;
    }

    public function getInternalShippingCarrier(): string
    {
        return $this->internalShippingCarrier;
    }

    public function setInternalShippingCarrier(string $internalShippingCarrier): self
    {
        $this->initialized['internalShippingCarrier'] = true;
        $this->internalShippingCarrier = $internalShippingCarrier;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getShippingServiceProviderType(): string
    {
        return $this->shippingServiceProviderType;
    }

    public function setShippingServiceProviderType(string $shippingServiceProviderType): self
    {
        $this->initialized['shippingServiceProviderType'] = true;
        $this->shippingServiceProviderType = $shippingServiceProviderType;

        return $this;
    }

    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;

        return $this;
    }
}
