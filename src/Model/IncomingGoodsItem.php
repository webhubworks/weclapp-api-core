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
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $descriptionFixed;
    /**
     * 
     *
     * @var string|null
     */
    protected $itemType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $manualQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $unitId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $unitName;
    /**
     * 
     *
     * @var string|null
     */
    protected $dropshippingShipmentItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $itemGroup;
    /**
     * 
     *
     * @var string|null
     */
    protected $purchaseOrderItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnAssessmentId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $returnAssessmentName;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnErrorId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $returnErrorName;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnReasonId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $returnReasonName;
    /**
     * 
     *
     * @var string|null
     */
    protected $returnRectificationId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $returnRectificationName;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderItemId;
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
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDescriptionFixed(): ?bool
    {
        return $this->descriptionFixed;
    }
    /**
     * 
     *
     * @param bool|null $descriptionFixed
     *
     * @return self
     */
    public function setDescriptionFixed(?bool $descriptionFixed): self
    {
        $this->initialized['descriptionFixed'] = true;
        $this->descriptionFixed = $descriptionFixed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * 
     *
     * @param string|null $itemType
     *
     * @return self
     */
    public function setItemType(?string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getManualQuantity(): ?bool
    {
        return $this->manualQuantity;
    }
    /**
     * 
     *
     * @param bool|null $manualQuantity
     *
     * @return self
     */
    public function setManualQuantity(?bool $manualQuantity): self
    {
        $this->initialized['manualQuantity'] = true;
        $this->manualQuantity = $manualQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentItemId(): ?string
    {
        return $this->parentItemId;
    }
    /**
     * 
     *
     * @param string|null $parentItemId
     *
     * @return self
     */
    public function setParentItemId(?string $parentItemId): self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnitId(): ?string
    {
        return $this->unitId;
    }
    /**
     * 
     *
     * @param string|null $unitId
     *
     * @return self
     */
    public function setUnitId(?string $unitId): self
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
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * 
     *
     * @param string|null $unitName
     *
     * @deprecated
     *
     * @return self
     */
    public function setUnitName(?string $unitName): self
    {
        $this->initialized['unitName'] = true;
        $this->unitName = $unitName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDropshippingShipmentItemId(): ?string
    {
        return $this->dropshippingShipmentItemId;
    }
    /**
     * 
     *
     * @param string|null $dropshippingShipmentItemId
     *
     * @return self
     */
    public function setDropshippingShipmentItemId(?string $dropshippingShipmentItemId): self
    {
        $this->initialized['dropshippingShipmentItemId'] = true;
        $this->dropshippingShipmentItemId = $dropshippingShipmentItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getItemGroup(): ?string
    {
        return $this->itemGroup;
    }
    /**
     * 
     *
     * @param string|null $itemGroup
     *
     * @return self
     */
    public function setItemGroup(?string $itemGroup): self
    {
        $this->initialized['itemGroup'] = true;
        $this->itemGroup = $itemGroup;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPurchaseOrderItemId(): ?string
    {
        return $this->purchaseOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $purchaseOrderItemId
     *
     * @return self
     */
    public function setPurchaseOrderItemId(?string $purchaseOrderItemId): self
    {
        $this->initialized['purchaseOrderItemId'] = true;
        $this->purchaseOrderItemId = $purchaseOrderItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnAssessmentId(): ?string
    {
        return $this->returnAssessmentId;
    }
    /**
     * 
     *
     * @param string|null $returnAssessmentId
     *
     * @return self
     */
    public function setReturnAssessmentId(?string $returnAssessmentId): self
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
     * @return string|null
     */
    public function getReturnAssessmentName(): ?string
    {
        return $this->returnAssessmentName;
    }
    /**
     * 
     *
     * @param string|null $returnAssessmentName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnAssessmentName(?string $returnAssessmentName): self
    {
        $this->initialized['returnAssessmentName'] = true;
        $this->returnAssessmentName = $returnAssessmentName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnDescription(): ?string
    {
        return $this->returnDescription;
    }
    /**
     * 
     *
     * @param string|null $returnDescription
     *
     * @return self
     */
    public function setReturnDescription(?string $returnDescription): self
    {
        $this->initialized['returnDescription'] = true;
        $this->returnDescription = $returnDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnErrorId(): ?string
    {
        return $this->returnErrorId;
    }
    /**
     * 
     *
     * @param string|null $returnErrorId
     *
     * @return self
     */
    public function setReturnErrorId(?string $returnErrorId): self
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
     * @return string|null
     */
    public function getReturnErrorName(): ?string
    {
        return $this->returnErrorName;
    }
    /**
     * 
     *
     * @param string|null $returnErrorName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnErrorName(?string $returnErrorName): self
    {
        $this->initialized['returnErrorName'] = true;
        $this->returnErrorName = $returnErrorName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnReasonId(): ?string
    {
        return $this->returnReasonId;
    }
    /**
     * 
     *
     * @param string|null $returnReasonId
     *
     * @return self
     */
    public function setReturnReasonId(?string $returnReasonId): self
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
     * @return string|null
     */
    public function getReturnReasonName(): ?string
    {
        return $this->returnReasonName;
    }
    /**
     * 
     *
     * @param string|null $returnReasonName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnReasonName(?string $returnReasonName): self
    {
        $this->initialized['returnReasonName'] = true;
        $this->returnReasonName = $returnReasonName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReturnRectificationId(): ?string
    {
        return $this->returnRectificationId;
    }
    /**
     * 
     *
     * @param string|null $returnRectificationId
     *
     * @return self
     */
    public function setReturnRectificationId(?string $returnRectificationId): self
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
     * @return string|null
     */
    public function getReturnRectificationName(): ?string
    {
        return $this->returnRectificationName;
    }
    /**
     * 
     *
     * @param string|null $returnRectificationName
     *
     * @deprecated
     *
     * @return self
     */
    public function setReturnRectificationName(?string $returnRectificationName): self
    {
        $this->initialized['returnRectificationName'] = true;
        $this->returnRectificationName = $returnRectificationName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderItemId(): ?string
    {
        return $this->salesOrderItemId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderItemId
     *
     * @return self
     */
    public function setSalesOrderItemId(?string $salesOrderItemId): self
    {
        $this->initialized['salesOrderItemId'] = true;
        $this->salesOrderItemId = $salesOrderItemId;
        return $this;
    }
}