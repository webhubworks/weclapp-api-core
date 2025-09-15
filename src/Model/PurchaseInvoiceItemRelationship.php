<?php

namespace Webhubworks\WeclappApiCore\Model;

class PurchaseInvoiceItemRelationship extends \ArrayObject
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
     * @var string|null
     */
    protected $incomingGoodsItemId;
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
    protected $quantity;
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
     * @return string|null
     */
    public function getIncomingGoodsItemId(): ?string
    {
        return $this->incomingGoodsItemId;
    }
    /**
     * 
     *
     * @param string|null $incomingGoodsItemId
     *
     * @return self
     */
    public function setIncomingGoodsItemId(?string $incomingGoodsItemId): self
    {
        $this->initialized['incomingGoodsItemId'] = true;
        $this->incomingGoodsItemId = $incomingGoodsItemId;
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
}