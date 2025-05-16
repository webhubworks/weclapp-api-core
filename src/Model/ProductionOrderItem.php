<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionOrderItem extends \ArrayObject
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
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $note;
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
    protected $quantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $actualPickDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $actualQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $availability;
    /**
     * 
     *
     * @var string|null
     */
    protected $availabilityForAllWarehouses;
    /**
     * 
     *
     * @var list<ItemPick>|null
     */
    protected $picks;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetPickDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $targetQuantity;
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
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }
    /**
     * 
     *
     * @param string|null $articleNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
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
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActualPickDate(): ?int
    {
        return $this->actualPickDate;
    }
    /**
     * 
     *
     * @param int|null $actualPickDate
     *
     * @return self
     */
    public function setActualPickDate(?int $actualPickDate): self
    {
        $this->initialized['actualPickDate'] = true;
        $this->actualPickDate = $actualPickDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getActualQuantity(): ?string
    {
        return $this->actualQuantity;
    }
    /**
     * 
     *
     * @param string|null $actualQuantity
     *
     * @return self
     */
    public function setActualQuantity(?string $actualQuantity): self
    {
        $this->initialized['actualQuantity'] = true;
        $this->actualQuantity = $actualQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string|null $availability
     *
     * @return self
     */
    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param string|null $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
    /**
     * 
     *
     * @return list<ItemPick>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }
    /**
     * 
     *
     * @param list<ItemPick>|null $picks
     *
     * @return self
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetPickDate(): ?int
    {
        return $this->targetPickDate;
    }
    /**
     * 
     *
     * @param int|null $targetPickDate
     *
     * @return self
     */
    public function setTargetPickDate(?int $targetPickDate): self
    {
        $this->initialized['targetPickDate'] = true;
        $this->targetPickDate = $targetPickDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTargetQuantity(): ?string
    {
        return $this->targetQuantity;
    }
    /**
     * 
     *
     * @param string|null $targetQuantity
     *
     * @return self
     */
    public function setTargetQuantity(?string $targetQuantity): self
    {
        $this->initialized['targetQuantity'] = true;
        $this->targetQuantity = $targetQuantity;
        return $this;
    }
}