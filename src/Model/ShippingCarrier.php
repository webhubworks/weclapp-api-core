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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $ecommerceShippingCarrier;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalShippingCarrier;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingServiceProviderType;
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEcommerceShippingCarrier(): ?string
    {
        return $this->ecommerceShippingCarrier;
    }
    /**
     * 
     *
     * @param string|null $ecommerceShippingCarrier
     *
     * @return self
     */
    public function setEcommerceShippingCarrier(?string $ecommerceShippingCarrier): self
    {
        $this->initialized['ecommerceShippingCarrier'] = true;
        $this->ecommerceShippingCarrier = $ecommerceShippingCarrier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalShippingCarrier(): ?string
    {
        return $this->internalShippingCarrier;
    }
    /**
     * 
     *
     * @param string|null $internalShippingCarrier
     *
     * @return self
     */
    public function setInternalShippingCarrier(?string $internalShippingCarrier): self
    {
        $this->initialized['internalShippingCarrier'] = true;
        $this->internalShippingCarrier = $internalShippingCarrier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingServiceProviderType(): ?string
    {
        return $this->shippingServiceProviderType;
    }
    /**
     * 
     *
     * @param string|null $shippingServiceProviderType
     *
     * @return self
     */
    public function setShippingServiceProviderType(?string $shippingServiceProviderType): self
    {
        $this->initialized['shippingServiceProviderType'] = true;
        $this->shippingServiceProviderType = $shippingServiceProviderType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }
    /**
     * 
     *
     * @param string|null $trackingUrl
     *
     * @return self
     */
    public function setTrackingUrl(?string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
}