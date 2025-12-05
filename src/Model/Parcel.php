<?php

namespace Webhubworks\WeclappApiCore\Model;

class Parcel extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $declaredValueAmount;
    /**
     * 
     *
     * @var string|null
     */
    protected $declaredValueCurrencyId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dhlGoGreenPlusService;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dhlPostalDeliveredDutyPaidService;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dhlPremiumInternationalService;
    /**
     * 
     *
     * @var int|null
     */
    protected $height;
    /**
     * 
     *
     * @var int|null
     */
    protected $length;
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
    protected $reference;
    /**
     * 
     *
     * @var bool|null
     */
    protected $saturdayDelivery;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingCarrierAddition;
    /**
     * 
     *
     * @var string|null
     */
    protected $shippingCarrierId;
    /**
     * 
     *
     * @var int|null
     */
    protected $shippingLabelsCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingId;
    /**
     * 
     *
     * @var string|null
     */
    protected $trackingUrl;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useDeliveryDateAsPreferredDeliveryDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $weight;
    /**
     * 
     *
     * @var int|null
     */
    protected $width;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeclaredValueAmount(): ?string
    {
        return $this->declaredValueAmount;
    }
    /**
     * 
     *
     * @param string|null $declaredValueAmount
     *
     * @return self
     */
    public function setDeclaredValueAmount(?string $declaredValueAmount): self
    {
        $this->initialized['declaredValueAmount'] = true;
        $this->declaredValueAmount = $declaredValueAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeclaredValueCurrencyId(): ?string
    {
        return $this->declaredValueCurrencyId;
    }
    /**
     * 
     *
     * @param string|null $declaredValueCurrencyId
     *
     * @return self
     */
    public function setDeclaredValueCurrencyId(?string $declaredValueCurrencyId): self
    {
        $this->initialized['declaredValueCurrencyId'] = true;
        $this->declaredValueCurrencyId = $declaredValueCurrencyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDhlGoGreenPlusService(): ?bool
    {
        return $this->dhlGoGreenPlusService;
    }
    /**
     * 
     *
     * @param bool|null $dhlGoGreenPlusService
     *
     * @return self
     */
    public function setDhlGoGreenPlusService(?bool $dhlGoGreenPlusService): self
    {
        $this->initialized['dhlGoGreenPlusService'] = true;
        $this->dhlGoGreenPlusService = $dhlGoGreenPlusService;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDhlPostalDeliveredDutyPaidService(): ?bool
    {
        return $this->dhlPostalDeliveredDutyPaidService;
    }
    /**
     * 
     *
     * @param bool|null $dhlPostalDeliveredDutyPaidService
     *
     * @return self
     */
    public function setDhlPostalDeliveredDutyPaidService(?bool $dhlPostalDeliveredDutyPaidService): self
    {
        $this->initialized['dhlPostalDeliveredDutyPaidService'] = true;
        $this->dhlPostalDeliveredDutyPaidService = $dhlPostalDeliveredDutyPaidService;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDhlPremiumInternationalService(): ?bool
    {
        return $this->dhlPremiumInternationalService;
    }
    /**
     * 
     *
     * @param bool|null $dhlPremiumInternationalService
     *
     * @return self
     */
    public function setDhlPremiumInternationalService(?bool $dhlPremiumInternationalService): self
    {
        $this->initialized['dhlPremiumInternationalService'] = true;
        $this->dhlPremiumInternationalService = $dhlPremiumInternationalService;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }
    /**
     * 
     *
     * @param int|null $length
     *
     * @return self
     */
    public function setLength(?int $length): self
    {
        $this->initialized['length'] = true;
        $this->length = $length;
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
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSaturdayDelivery(): ?bool
    {
        return $this->saturdayDelivery;
    }
    /**
     * 
     *
     * @param bool|null $saturdayDelivery
     *
     * @return self
     */
    public function setSaturdayDelivery(?bool $saturdayDelivery): self
    {
        $this->initialized['saturdayDelivery'] = true;
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingCarrierAddition(): ?string
    {
        return $this->shippingCarrierAddition;
    }
    /**
     * 
     *
     * @param string|null $shippingCarrierAddition
     *
     * @return self
     */
    public function setShippingCarrierAddition(?string $shippingCarrierAddition): self
    {
        $this->initialized['shippingCarrierAddition'] = true;
        $this->shippingCarrierAddition = $shippingCarrierAddition;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingCarrierId(): ?string
    {
        return $this->shippingCarrierId;
    }
    /**
     * 
     *
     * @param string|null $shippingCarrierId
     *
     * @return self
     */
    public function setShippingCarrierId(?string $shippingCarrierId): self
    {
        $this->initialized['shippingCarrierId'] = true;
        $this->shippingCarrierId = $shippingCarrierId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getShippingLabelsCount(): ?int
    {
        return $this->shippingLabelsCount;
    }
    /**
     * 
     *
     * @param int|null $shippingLabelsCount
     *
     * @return self
     */
    public function setShippingLabelsCount(?int $shippingLabelsCount): self
    {
        $this->initialized['shippingLabelsCount'] = true;
        $this->shippingLabelsCount = $shippingLabelsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrackingId(): ?string
    {
        return $this->trackingId;
    }
    /**
     * 
     *
     * @param string|null $trackingId
     *
     * @return self
     */
    public function setTrackingId(?string $trackingId): self
    {
        $this->initialized['trackingId'] = true;
        $this->trackingId = $trackingId;
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
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseDeliveryDateAsPreferredDeliveryDate(): ?bool
    {
        return $this->useDeliveryDateAsPreferredDeliveryDate;
    }
    /**
     * 
     *
     * @param bool|null $useDeliveryDateAsPreferredDeliveryDate
     *
     * @return self
     */
    public function setUseDeliveryDateAsPreferredDeliveryDate(?bool $useDeliveryDateAsPreferredDeliveryDate): self
    {
        $this->initialized['useDeliveryDateAsPreferredDeliveryDate'] = true;
        $this->useDeliveryDateAsPreferredDeliveryDate = $useDeliveryDateAsPreferredDeliveryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
}