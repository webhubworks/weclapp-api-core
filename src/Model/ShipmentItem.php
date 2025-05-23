<?php

namespace Webhubworks\WeclappApiCore\Model;

class ShipmentItem extends \ArrayObject
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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var list<mixed>|null
     */
    protected $customAttributes;

    /**
     * @var string|null
     */
    protected $articleId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $articleNumber;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $descriptionFixed;

    /**
     * @var string|null
     */
    protected $itemType;

    /**
     * @var bool|null
     */
    protected $manualQuantity;

    /**
     * @var string|null
     */
    protected $parentItemId;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $unitId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $unitName;

    /**
     * @var bool|null
     */
    protected $addPageBreakBefore;

    /**
     * @var string|null
     */
    protected $availability;

    /**
     * @var string|null
     */
    protected $availabilityForAllWarehouses;

    /**
     * @var string|null
     */
    protected $groupName;

    /**
     * @var list<ItemPick>|null
     */
    protected $picks;

    /**
     * @var string|null
     */
    protected $purchaseOrderItemId;

    /**
     * @var string|null
     */
    protected $returnAssessmentId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $returnAssessmentName;

    /**
     * @var string|null
     */
    protected $returnDescription;

    /**
     * @var string|null
     */
    protected $returnErrorId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $returnErrorName;

    /**
     * @var string|null
     */
    protected $returnReasonId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $returnReasonName;

    /**
     * @var string|null
     */
    protected $returnRectificationId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $returnRectificationName;

    /**
     * @var string|null
     */
    protected $salesOrderItemId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    /**
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    /**
     * @deprecated
     */
    public function setArticleNumber(?string $articleNumber): self
    {
        $this->initialized['articleNumber'] = true;
        $this->articleNumber = $articleNumber;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(?string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDescriptionFixed(): ?bool
    {
        return $this->descriptionFixed;
    }

    public function setDescriptionFixed(?bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;

        return $this;
    }

    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    public function setItemType(?string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;

        return $this;
    }

    public function getManualQuantity(): ?bool
    {
        return $this->manualQuantity;
    }

    public function setManualQuantity(?bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;

        return $this;
    }

    public function getParentItemId(): ?string
    {
        return $this->parentItemId;
    }

    public function setParentItemId(?string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @deprecated
     */
    public function setUnitName(?string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    public function getAddPageBreakBefore(): ?bool
    {
        return $this->addPageBreakBefore;
    }

    public function setAddPageBreakBefore(?bool $addPageBreakBefore): self
    {
        $this->initialized['addPageBreakBefore'] = true;
        $this->addPageBreakBefore = $addPageBreakBefore;

        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;

        return $this;
    }

    public function getAvailabilityForAllWarehouses(): ?string
    {
        return $this->availabilityForAllWarehouses;
    }

    public function setAvailabilityForAllWarehouses(?string $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * @return list<ItemPick>|null
     */
    public function getPicks(): ?array
    {
        return $this->picks;
    }

    /**
     * @param  list<ItemPick>|null  $picks
     */
    public function setPicks(?array $picks): self
    {
        $this->initialized['picks'] = true;
        $this->picks = $picks;

        return $this;
    }

    public function getPurchaseOrderItemId(): ?string
    {
        return $this->purchaseOrderItemId;
    }

    public function setPurchaseOrderItemId(?string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;

        return $this;
    }

    public function getReturnAssessmentId(): ?string
    {
        return $this->returnAssessmentId;
    }

    public function setReturnAssessmentId(?string $returnAssessmentId): self
    {
        $this->initialized['returnAssessmentId'] = true;
        $this->returnAssessmentId = $returnAssessmentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnAssessmentName(): ?string
    {
        return $this->returnAssessmentName;
    }

    /**
     * @deprecated
     */
    public function setReturnAssessmentName(?string $returnAssessmentName): self
    {
        $this->initialized['returnAssessmentName'] = true;
        $this->returnAssessmentName = $returnAssessmentName;

        return $this;
    }

    public function getReturnDescription(): ?string
    {
        return $this->returnDescription;
    }

    public function setReturnDescription(?string $returnDescription): self
    {
        $this->initialized['returnDescription'] = true;
        $this->returnDescription = $returnDescription;

        return $this;
    }

    public function getReturnErrorId(): ?string
    {
        return $this->returnErrorId;
    }

    public function setReturnErrorId(?string $returnErrorId): self
    {
        $this->initialized['returnErrorId'] = true;
        $this->returnErrorId = $returnErrorId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnErrorName(): ?string
    {
        return $this->returnErrorName;
    }

    /**
     * @deprecated
     */
    public function setReturnErrorName(?string $returnErrorName): self
    {
        $this->initialized['returnErrorName'] = true;
        $this->returnErrorName = $returnErrorName;

        return $this;
    }

    public function getReturnReasonId(): ?string
    {
        return $this->returnReasonId;
    }

    public function setReturnReasonId(?string $returnReasonId): self
    {
        $this->initialized['returnReasonId'] = true;
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnReasonName(): ?string
    {
        return $this->returnReasonName;
    }

    /**
     * @deprecated
     */
    public function setReturnReasonName(?string $returnReasonName): self
    {
        $this->initialized['returnReasonName'] = true;
        $this->returnReasonName = $returnReasonName;

        return $this;
    }

    public function getReturnRectificationId(): ?string
    {
        return $this->returnRectificationId;
    }

    public function setReturnRectificationId(?string $returnRectificationId): self
    {
        $this->initialized['returnRectificationId'] = true;
        $this->returnRectificationId = $returnRectificationId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnRectificationName(): ?string
    {
        return $this->returnRectificationName;
    }

    /**
     * @deprecated
     */
    public function setReturnRectificationName(?string $returnRectificationName): self
    {
        $this->initialized['returnRectificationName'] = true;
        $this->returnRectificationName = $returnRectificationName;

        return $this;
    }

    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }
}
