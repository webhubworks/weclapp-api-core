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
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $ecommerceShippingCarrier;
    /**
     * 
     *
     * @var string
     */
    protected $internalShippingCarrier;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $shippingServiceProviderType;
    /**
     * 
     *
     * @var string
     */
    protected $trackingUrl;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEcommerceShippingCarrier(): string
    {
        return $this->ecommerceShippingCarrier;
    }
    /**
     * 
     *
     * @param string $ecommerceShippingCarrier
     *
     * @return self
     */
    public function setEcommerceShippingCarrier(string $ecommerceShippingCarrier): self
    {
        $this->initialized['ecommerceShippingCarrier'] = true;
        $this->ecommerceShippingCarrier = $ecommerceShippingCarrier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalShippingCarrier(): string
    {
        return $this->internalShippingCarrier;
    }
    /**
     * 
     *
     * @param string $internalShippingCarrier
     *
     * @return self
     */
    public function setInternalShippingCarrier(string $internalShippingCarrier): self
    {
        $this->initialized['internalShippingCarrier'] = true;
        $this->internalShippingCarrier = $internalShippingCarrier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShippingServiceProviderType(): string
    {
        return $this->shippingServiceProviderType;
    }
    /**
     * 
     *
     * @param string $shippingServiceProviderType
     *
     * @return self
     */
    public function setShippingServiceProviderType(string $shippingServiceProviderType): self
    {
        $this->initialized['shippingServiceProviderType'] = true;
        $this->shippingServiceProviderType = $shippingServiceProviderType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
    /**
     * 
     *
     * @param string $trackingUrl
     *
     * @return self
     */
    public function setTrackingUrl(string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
}