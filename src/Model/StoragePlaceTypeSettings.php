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
     * 
     *
     * @var bool
     */
    protected $allowMixedStoring;
    /**
     * 
     *
     * @var bool
     */
    protected $automaticPlaceAssignment;
    /**
     * 
     *
     * @var bool
     */
    protected $multiplePlacesPerBaseArticle;
    /**
     * 
     *
     * @var bool
     */
    protected $transportationOrderRequiresFreeSegment;
    /**
     * 
     *
     * @return bool
     */
    public function getAllowMixedStoring(): bool
    {
        return $this->allowMixedStoring;
    }
    /**
     * 
     *
     * @param bool $allowMixedStoring
     *
     * @return self
     */
    public function setAllowMixedStoring(bool $allowMixedStoring): self
    {
        $this->initialized['allowMixedStoring'] = true;
        $this->allowMixedStoring = $allowMixedStoring;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutomaticPlaceAssignment(): bool
    {
        return $this->automaticPlaceAssignment;
    }
    /**
     * 
     *
     * @param bool $automaticPlaceAssignment
     *
     * @return self
     */
    public function setAutomaticPlaceAssignment(bool $automaticPlaceAssignment): self
    {
        $this->initialized['automaticPlaceAssignment'] = true;
        $this->automaticPlaceAssignment = $automaticPlaceAssignment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMultiplePlacesPerBaseArticle(): bool
    {
        return $this->multiplePlacesPerBaseArticle;
    }
    /**
     * 
     *
     * @param bool $multiplePlacesPerBaseArticle
     *
     * @return self
     */
    public function setMultiplePlacesPerBaseArticle(bool $multiplePlacesPerBaseArticle): self
    {
        $this->initialized['multiplePlacesPerBaseArticle'] = true;
        $this->multiplePlacesPerBaseArticle = $multiplePlacesPerBaseArticle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTransportationOrderRequiresFreeSegment(): bool
    {
        return $this->transportationOrderRequiresFreeSegment;
    }
    /**
     * 
     *
     * @param bool $transportationOrderRequiresFreeSegment
     *
     * @return self
     */
    public function setTransportationOrderRequiresFreeSegment(bool $transportationOrderRequiresFreeSegment): self
    {
        $this->initialized['transportationOrderRequiresFreeSegment'] = true;
        $this->transportationOrderRequiresFreeSegment = $transportationOrderRequiresFreeSegment;
        return $this;
    }
}