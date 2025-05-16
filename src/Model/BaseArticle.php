<?php

namespace Webhubworks\WeclappApiCore\Model;

class BaseArticle extends \ArrayObject
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
     * @var list<CustomAttribute>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $ean;
    /**
     * 
     *
     * @var string
     */
    protected $fixedPurchaseQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $internalNote;
    /**
     * 
     *
     * @var string
     */
    protected $manufacturerPartNumber;
    /**
     * 
     *
     * @var string
     */
    protected $matchCode;
    /**
     * 
     *
     * @var string
     */
    protected $minimumPurchaseQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shortDescription1;
    /**
     * 
     *
     * @var string
     */
    protected $shortDescription2;
    /**
     * 
     *
     * @var string
     */
    protected $taxRateType;
    /**
     * 
     *
     * @var string
     */
    protected $unitId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $unitName;
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
     * @return list<CustomAttribute>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string $articleNumber
     *
     * @return self
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }
    /**
     * 
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFixedPurchaseQuantity(): string
    {
        return $this->fixedPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string $fixedPurchaseQuantity
     *
     * @return self
     */
    public function setFixedPurchaseQuantity(string $fixedPurchaseQuantity): self
    {
        $this->initialized['fixedPurchaseQuantity'] = true;
        $this->fixedPurchaseQuantity = $fixedPurchaseQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalNote(): string
    {
        return $this->internalNote;
    }
    /**
     * 
     *
     * @param string $internalNote
     *
     * @return self
     */
    public function setInternalNote(string $internalNote): self
    {
        $this->initialized['internalNote'] = true;
        $this->internalNote = $internalNote;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getManufacturerPartNumber(): string
    {
        return $this->manufacturerPartNumber;
    }
    /**
     * 
     *
     * @param string $manufacturerPartNumber
     *
     * @return self
     */
    public function setManufacturerPartNumber(string $manufacturerPartNumber): self
    {
        $this->initialized['manufacturerPartNumber'] = true;
        $this->manufacturerPartNumber = $manufacturerPartNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMatchCode(): string
    {
        return $this->matchCode;
    }
    /**
     * 
     *
     * @param string $matchCode
     *
     * @return self
     */
    public function setMatchCode(string $matchCode): self
    {
        $this->initialized['matchCode'] = true;
        $this->matchCode = $matchCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMinimumPurchaseQuantity(): string
    {
        return $this->minimumPurchaseQuantity;
    }
    /**
     * 
     *
     * @param string $minimumPurchaseQuantity
     *
     * @return self
     */
    public function setMinimumPurchaseQuantity(string $minimumPurchaseQuantity): self
    {
        $this->initialized['minimumPurchaseQuantity'] = true;
        $this->minimumPurchaseQuantity = $minimumPurchaseQuantity;
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
     * @return string
     */
    public function getShortDescription1(): string
    {
        return $this->shortDescription1;
    }
    /**
     * 
     *
     * @param string $shortDescription1
     *
     * @return self
     */
    public function setShortDescription1(string $shortDescription1): self
    {
        $this->initialized['shortDescription1'] = true;
        $this->shortDescription1 = $shortDescription1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShortDescription2(): string
    {
        return $this->shortDescription2;
    }
    /**
     * 
     *
     * @param string $shortDescription2
     *
     * @return self
     */
    public function setShortDescription2(string $shortDescription2): self
    {
        $this->initialized['shortDescription2'] = true;
        $this->shortDescription2 = $shortDescription2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxRateType(): string
    {
        return $this->taxRateType;
    }
    /**
     * 
     *
     * @param string $taxRateType
     *
     * @return self
     */
    public function setTaxRateType(string $taxRateType): self
    {
        $this->initialized['taxRateType'] = true;
        $this->taxRateType = $taxRateType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string $unitId
     *
     * @return self
     */
    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * 
     *
     * @param string $unitName
     *
     * @deprecated
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }
}