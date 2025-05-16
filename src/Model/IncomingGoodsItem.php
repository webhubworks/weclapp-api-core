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
     * @var list<mixed>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $articleId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $articleNumber;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $descriptionFixed;
    /**
     * 
     *
     * @var string
     */
    protected $itemType;
    /**
     * 
     *
     * @var bool
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $parentItemId;
    /**
     * 
     *
     * @var string
     */
    protected $title;
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
     * @var string
     */
    protected $dropshippingShipmentItemId;
    /**
     * 
     *
     * @var string
     */
    protected $itemGroup;
    /**
     * 
     *
     * @var string
     */
    protected $purchaseOrderItemId;
    /**
     * 
     *
     * @var string
     */
    protected $returnAssessmentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $returnAssessmentName;
    /**
     * 
     *
     * @var string
     */
    protected $returnDescription;
    /**
     * 
     *
     * @var string
     */
    protected $returnErrorId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $returnErrorName;
    /**
     * 
     *
     * @var string
     */
    protected $returnReasonId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $returnReasonName;
    /**
     * 
     *
     * @var string
     */
    protected $returnRectificationId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $returnRectificationName;
    /**
     * 
     *
     * @var string
     */
    protected $salesOrderItemId;
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
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed> $customAttributes
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
    public function getArticleId(): string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string $articleId
     *
     * @return self
     */
    public function setArticleId(string $articleId): self
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
     * @deprecated
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
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
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
     * @return bool
     */
    public function getDescriptionFixed(): bool
    {
        return $this->descriptionFixed;
    }
    /**
     * 
     *
     * @param bool $descriptionFixed
     *
     * @return self
     */
    public function setDescriptionFixed(bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }
    /**
     * 
     *
     * @param string $itemType
     *
     * @return self
     */
    public function setItemType(string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualQuantity(): bool
    {
        return $this->manualQuantity;
    }
    /**
     * 
     *
     * @param bool $manualQuantity
     *
     * @return self
     */
    public function setManualQuantity(bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentItemId(): string
    {
        return $this->parentItemId;
    }
    /**
     * 
     *
     * @param string $parentItemId
     *
     * @return self
     */
    public function setParentItemId(string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
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
    /**
     * 
     *
     * @return string
     */
    public function getDropshippingShipmentItemId(): string
    {
        return $this->dropshippingShipmentItemId;
    }
    /**
     * 
     *
     * @param string $dropshippingShipmentItemId
     *
     * @return self
     */
    public function setDropshippingShipmentItemId(string $dropshippingShipmentItemId): self
    {
        $this->initialized['dropshippingShipmentItemId'] = true;
        $this->dropshippingShipmentItemId = $dropshippingShipmentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getItemGroup(): string
    {
        return $this->itemGroup;
    }
    /**
     * 
     *
     * @param string $itemGroup
     *
     * @return self
     */
    public function setItemGroup(string $itemGroup): self
    {
        $this->initialized['itemGroup'] = true;
        $this->itemGroup = $itemGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurchaseOrderItemId(): string
    {
        return $this->purchaseOrderItemId;
    }
    /**
     * 
     *
     * @param string $purchaseOrderItemId
     *
     * @return self
     */
    public function setPurchaseOrderItemId(string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnAssessmentId(): string
    {
        return $this->returnAssessmentId;
    }
    /**
     * 
     *
     * @param string $returnAssessmentId
     *
     * @return self
     */
    public function setReturnAssessmentId(string $returnAssessmentId): self
    {
        $this->initialized['returnAssessmentId'] = true;
        $this->returnAssessmentId = $returnAssessmentId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getReturnAssessmentName(): string
    {
        return $this->returnAssessmentName;
    }
    /**
     * 
     *
     * @param string $returnAssessmentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnAssessmentName(string $returnAssessmentName): self
    {
        $this->initialized['returnAssessmentName'] = true;
        $this->returnAssessmentName = $returnAssessmentName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnDescription(): string
    {
        return $this->returnDescription;
    }
    /**
     * 
     *
     * @param string $returnDescription
     *
     * @return self
     */
    public function setReturnDescription(string $returnDescription): self
    {
        $this->initialized['returnDescription'] = true;
        $this->returnDescription = $returnDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnErrorId(): string
    {
        return $this->returnErrorId;
    }
    /**
     * 
     *
     * @param string $returnErrorId
     *
     * @return self
     */
    public function setReturnErrorId(string $returnErrorId): self
    {
        $this->initialized['returnErrorId'] = true;
        $this->returnErrorId = $returnErrorId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getReturnErrorName(): string
    {
        return $this->returnErrorName;
    }
    /**
     * 
     *
     * @param string $returnErrorName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnErrorName(string $returnErrorName): self
    {
        $this->initialized['returnErrorName'] = true;
        $this->returnErrorName = $returnErrorName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnReasonId(): string
    {
        return $this->returnReasonId;
    }
    /**
     * 
     *
     * @param string $returnReasonId
     *
     * @return self
     */
    public function setReturnReasonId(string $returnReasonId): self
    {
        $this->initialized['returnReasonId'] = true;
        $this->returnReasonId = $returnReasonId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getReturnReasonName(): string
    {
        return $this->returnReasonName;
    }
    /**
     * 
     *
     * @param string $returnReasonName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnReasonName(string $returnReasonName): self
    {
        $this->initialized['returnReasonName'] = true;
        $this->returnReasonName = $returnReasonName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReturnRectificationId(): string
    {
        return $this->returnRectificationId;
    }
    /**
     * 
     *
     * @param string $returnRectificationId
     *
     * @return self
     */
    public function setReturnRectificationId(string $returnRectificationId): self
    {
        $this->initialized['returnRectificationId'] = true;
        $this->returnRectificationId = $returnRectificationId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getReturnRectificationName(): string
    {
        return $this->returnRectificationName;
    }
    /**
     * 
     *
     * @param string $returnRectificationName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnRectificationName(string $returnRectificationName): self
    {
        $this->initialized['returnRectificationName'] = true;
        $this->returnRectificationName = $returnRectificationName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesOrderItemId(): string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
}