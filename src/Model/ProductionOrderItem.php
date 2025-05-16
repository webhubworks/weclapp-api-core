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
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var string
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var int
     */
    protected $positionNumber;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $actualPickDate;

    /**
     * @var string
     */
    protected $actualQuantity;

    /**
     * @var string
     */
    protected $availability;

    /**
     * @var string
     */
    protected $availabilityForAllWarehouses;

    /**
     * @var list<ItemPick>
     */
    protected $picks;

    /**
     * @var int
     */
    protected $targetPickDate;

    /**
     * @var string
     */
    protected $targetQuantity;

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

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleNumber(): string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

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

    public function getQuantity(): string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getActualPickDate(): int
    {
        return $this->actualPickDate;
    }

    public function setActualPickDate(int $actualPickDate): self
    {
        $this->initialized['actualPickDate'] = true;
        $this->actualPickDate = $actualPickDate;

        return $this;
    }

    public function getActualQuantity(): string
    {
        return $this->actualQuantity;
    }

    public function setActualQuantity(string $actualQuantity): self
    {
        $this->initialized['actualQuantity'] = true;
        $this->actualQuantity = $actualQuantity;

        return $this;
    }

    public function getAvailability(): string
    {
        return $this->availability;
    }

    public function setAvailability(string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityForAllWarehouses(): string
    {
        return $this->availabilityForAllWarehouses;
    }

    public function setAvailabilityForAllWarehouses(string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;

        return $this;
    }

    /**
     * @return list<ItemPick>
     */
    public function getPicks(): array
    {
        return $this->picks;
    }

    /**
     * @param  list<ItemPick>  $picks
     */
    public function setPicks(array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

        return $this;
    }

    public function getTargetPickDate(): int
    {
        return $this->targetPickDate;
    }

    public function setTargetPickDate(int $targetPickDate): self
    {
        $this->initialized['targetPickDate'] = true;
        $this->targetPickDate = $targetPickDate;

        return $this;
    }

    public function getTargetQuantity(): string
    {
        return $this->targetQuantity;
    }

    public function setTargetQuantity(string $targetQuantity): self
    {
        $this->initialized['targetQuantity'] = true;
        $this->targetQuantity = $targetQuantity;

        return $this;
    }
}
