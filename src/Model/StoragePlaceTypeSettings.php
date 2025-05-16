<?php

namespace Webhubworks\WeclappApiCore\Model;

class StoragePlaceTypeSettings extends \ArrayObject
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
    protected $allowMixedStoring;

    /**
     * @var bool|null
     */
    protected $automaticPlaceAssignment;

    /**
     * @var bool|null
     */
    protected $multiplePlacesPerBaseArticle;

    /**
     * @var bool|null
     */
    protected $transportationOrderRequiresFreeSegment;

    public function getAllowMixedStoring(): ?bool
    {
        return $this->allowMixedStoring;
    }

    public function setAllowMixedStoring(?bool $allowMixedStoring): self
    {
        $this->initialized['allowMixedStoring'] = true;
        $this->allowMixedStoring = $allowMixedStoring;

        return $this;
    }

    public function getAutomaticPlaceAssignment(): ?bool
    {
        return $this->automaticPlaceAssignment;
    }

    public function setAutomaticPlaceAssignment(?bool $automaticPlaceAssignment): self
    {
        $this->initialized['automaticPlaceAssignment'] = true;
        $this->automaticPlaceAssignment = $automaticPlaceAssignment;

        return $this;
    }

    public function getMultiplePlacesPerBaseArticle(): ?bool
    {
        return $this->multiplePlacesPerBaseArticle;
    }

    public function setMultiplePlacesPerBaseArticle(?bool $multiplePlacesPerBaseArticle): self
    {
        $this->initialized['multiplePlacesPerBaseArticle'] = true;
        $this->multiplePlacesPerBaseArticle = $multiplePlacesPerBaseArticle;

        return $this;
    }

    public function getTransportationOrderRequiresFreeSegment(): ?bool
    {
        return $this->transportationOrderRequiresFreeSegment;
    }

    public function setTransportationOrderRequiresFreeSegment(?bool $transportationOrderRequiresFreeSegment): self
    {
        $this->initialized['transportationOrderRequiresFreeSegment'] = true;
        $this->transportationOrderRequiresFreeSegment = $transportationOrderRequiresFreeSegment;

        return $this;
    }
}
