<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsItem extends \ArrayObject
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
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $descriptionFixed;

    /**
     * @var string
     */
    protected $itemType;

    /**
     * @var bool
     */
    protected $manualQuantity;

    /**
     * @var string
     */
    protected $parentItemId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $unitId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $unitName;

    /**
     * @var string
     */
    protected $dropshippingShipmentItemId;

    /**
     * @var string
     */
    protected $itemGroup;

    /**
     * @var string
     */
    protected $purchaseOrderItemId;

    /**
     * @var string
     */
    protected $returnAssessmentId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $returnAssessmentName;

    /**
     * @var string
     */
    protected $returnDescription;

    /**
     * @var string
     */
    protected $returnErrorId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $returnErrorName;

    /**
     * @var string
     */
    protected $returnReasonId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $returnReasonName;

    /**
     * @var string
     */
    protected $returnRectificationId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $returnRectificationName;

    /**
     * @var string
     */
    protected $salesOrderItemId;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }

    public function setDescriptionFixed(bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;

        return $this;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }

    public function setItemType(string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;

        return $this;
    }

    public function getManualQuantity(): bool
    {
        return $this->manualQuantity;
    }

    public function setManualQuantity(bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;

        return $this;
    }

    public function getParentItemId(): string
    {
        return $this->parentItemId;
    }

    public function setParentItemId(string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getUnitId(): string
    {
        return $this->unitId;
    }

    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * @deprecated
     */
    public function setUnitName(string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;

        return $this;
    }

    public function getDropshippingShipmentItemId(): string
    {
        return $this->dropshippingShipmentItemId;
    }

    public function setDropshippingShipmentItemId(string $dropshippingShipmentItemId): self
    {
        $this->initialized['dropshippingShipmentItemId'] = true;
        $this->dropshippingShipmentItemId = $dropshippingShipmentItemId;

        return $this;
    }

    public function getItemGroup(): string
    {
        return $this->itemGroup;
    }

    public function setItemGroup(string $itemGroup): self
    {
        $this->initialized['itemGroup'] = true;
        $this->itemGroup = $itemGroup;

        return $this;
    }

    public function getPurchaseOrderItemId(): string
    {
        return $this->purchaseOrderItemId;
    }

    public function setPurchaseOrderItemId(string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;

        return $this;
    }

    public function getReturnAssessmentId(): string
    {
        return $this->returnAssessmentId;
    }

    public function setReturnAssessmentId(string $returnAssessmentId): self
    {
        $this->initialized['returnAssessmentId'] = true;
        $this->returnAssessmentId = $returnAssessmentId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnAssessmentName(): string
    {
        return $this->returnAssessmentName;
    }

    /**
     * @deprecated
     */
    public function setReturnAssessmentName(string $returnAssessmentName): self
    {
        $this->initialized['returnAssessmentName'] = true;
        $this->returnAssessmentName = $returnAssessmentName;

        return $this;
    }

    public function getReturnDescription(): string
    {
        return $this->returnDescription;
    }

    public function setReturnDescription(string $returnDescription): self
    {
        $this->initialized['returnDescription'] = true;
        $this->returnDescription = $returnDescription;

        return $this;
    }

    public function getReturnErrorId(): string
    {
        return $this->returnErrorId;
    }

    public function setReturnErrorId(string $returnErrorId): self
    {
        $this->initialized['returnErrorId'] = true;
        $this->returnErrorId = $returnErrorId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnErrorName(): string
    {
        return $this->returnErrorName;
    }

    /**
     * @deprecated
     */
    public function setReturnErrorName(string $returnErrorName): self
    {
        $this->initialized['returnErrorName'] = true;
        $this->returnErrorName = $returnErrorName;

        return $this;
    }

    public function getReturnReasonId(): string
    {
        return $this->returnReasonId;
    }

    public function setReturnReasonId(string $returnReasonId): self
    {
        $this->initialized['returnReasonId'] = true;
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnReasonName(): string
    {
        return $this->returnReasonName;
    }

    /**
     * @deprecated
     */
    public function setReturnReasonName(string $returnReasonName): self
    {
        $this->initialized['returnReasonName'] = true;
        $this->returnReasonName = $returnReasonName;

        return $this;
    }

    public function getReturnRectificationId(): string
    {
        return $this->returnRectificationId;
    }

    public function setReturnRectificationId(string $returnRectificationId): self
    {
        $this->initialized['returnRectificationId'] = true;
        $this->returnRectificationId = $returnRectificationId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getReturnRectificationName(): string
    {
        return $this->returnRectificationName;
    }

    /**
     * @deprecated
     */
    public function setReturnRectificationName(string $returnRectificationName): self
    {
        $this->initialized['returnRectificationName'] = true;
        $this->returnRectificationName = $returnRectificationName;

        return $this;
    }

    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }

    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;

        return $this;
    }
}
