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
     * @var bool|null
     */
    protected $bookLoadingEquipmentOnDissolveOfPreferred;

    /**
     * @var string|null
     */
    protected $inputQuantity;

    /**
     * @var list<string>|null
     */
    protected $inputSerialNumbers;

    /**
     * @var string|null
     */
    protected $pickId;

    /**
     * @var string|null
     */
    protected $preferredPackagingUnitId;

    public function getBookLoadingEquipmentOnDissolveOfPreferred(): ?bool
    {
        return $this->bookLoadingEquipmentOnDissolveOfPreferred;
    }

    public function setBookLoadingEquipmentOnDissolveOfPreferred(?bool $bookLoadingEquipmentOnDissolveOfPreferred): self
    {
        $this->initialized['bookLoadingEquipmentOnDissolveOfPreferred'] = true;
        $this->bookLoadingEquipmentOnDissolveOfPreferred = $bookLoadingEquipmentOnDissolveOfPreferred;

        return $this;
    }

    public function getInputQuantity(): ?string
    {
        return $this->inputQuantity;
    }

    public function setInputQuantity(?string $inputQuantity): self
    {
        $this->initialized['inputQuantity'] = true;
        $this->inputQuantity = $inputQuantity;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getInputSerialNumbers(): ?array
    {
        return $this->inputSerialNumbers;
    }

    /**
     * @param  list<string>|null  $inputSerialNumbers
     */
    public function setInputSerialNumbers(?array $inputSerialNumbers): self
    {
        $this->initialized['inputSerialNumbers'] = true;
        $this->inputSerialNumbers = $inputSerialNumbers;

        return $this;
    }

    public function getPickId(): ?string
    {
        return $this->pickId;
    }

    public function setPickId(?string $pickId): self
    {
        $this->initialized['pickId'] = true;
        $this->pickId = $pickId;

        return $this;
    }

    public function getPreferredPackagingUnitId(): ?string
    {
        return $this->preferredPackagingUnitId;
    }

    public function setPreferredPackagingUnitId(?string $preferredPackagingUnitId): self
    {
        $this->initialized['preferredPackagingUnitId'] = true;
        $this->preferredPackagingUnitId = $preferredPackagingUnitId;

        return $this;
    }
}
