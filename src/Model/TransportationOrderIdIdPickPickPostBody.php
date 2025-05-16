<?php

namespace Webhubworks\WeclappApiCore\Model;

class TransportationOrderIdIdPickPickPostBody extends \ArrayObject
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
     * @var bool
     */
    protected $bookLoadingEquipmentOnDissolveOfPreferred;
    /**
     * 
     *
     * @var string
     */
    protected $inputQuantity;
    /**
     * 
     *
     * @var list<string>
     */
    protected $inputSerialNumbers;
    /**
     * 
     *
     * @var string
     */
    protected $pickId;
    /**
     * 
     *
     * @var string
     */
    protected $preferredPackagingUnitId;
    /**
     * 
     *
     * @return bool
     */
    public function getBookLoadingEquipmentOnDissolveOfPreferred(): bool
    {
        return $this->bookLoadingEquipmentOnDissolveOfPreferred;
    }
    /**
     * 
     *
     * @param bool $bookLoadingEquipmentOnDissolveOfPreferred
     *
     * @return self
     */
    public function setBookLoadingEquipmentOnDissolveOfPreferred(bool $bookLoadingEquipmentOnDissolveOfPreferred): self
    {
        $this->initialized['bookLoadingEquipmentOnDissolveOfPreferred'] = true;
        $this->bookLoadingEquipmentOnDissolveOfPreferred = $bookLoadingEquipmentOnDissolveOfPreferred;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInputQuantity(): string
    {
        return $this->inputQuantity;
    }
    /**
     * 
     *
     * @param string $inputQuantity
     *
     * @return self
     */
    public function setInputQuantity(string $inputQuantity): self
    {
        $this->initialized['inputQuantity'] = true;
        $this->inputQuantity = $inputQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getInputSerialNumbers(): array
    {
        return $this->inputSerialNumbers;
    }
    /**
     * 
     *
     * @param list<string> $inputSerialNumbers
     *
     * @return self
     */
    public function setInputSerialNumbers(array $inputSerialNumbers): self
    {
        $this->initialized['inputSerialNumbers'] = true;
        $this->inputSerialNumbers = $inputSerialNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPickId(): string
    {
        return $this->pickId;
    }
    /**
     * 
     *
     * @param string $pickId
     *
     * @return self
     */
    public function setPickId(string $pickId): self
    {
        $this->initialized['pickId'] = true;
        $this->pickId = $pickId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreferredPackagingUnitId(): string
    {
        return $this->preferredPackagingUnitId;
    }
    /**
     * 
     *
     * @param string $preferredPackagingUnitId
     *
     * @return self
     */
    public function setPreferredPackagingUnitId(string $preferredPackagingUnitId): self
    {
        $this->initialized['preferredPackagingUnitId'] = true;
        $this->preferredPackagingUnitId = $preferredPackagingUnitId;
        return $this;
    }
}