<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationItemRelationship extends \ArrayObject
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
    protected $acceptedQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $contractItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectMaterialItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectRequirementItemId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesInvoiceItemId;
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
    public function getAcceptedQuantity(): ?string
    {
        return $this->acceptedQuantity;
    }
    /**
     * 
     *
     * @param string|null $acceptedQuantity
     *
     * @return self
     */
    public function setAcceptedQuantity(?string $acceptedQuantity): self
    {
        $this->initialized['acceptedQuantity'] = true;
        $this->acceptedQuantity = $acceptedQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContractItemId(): ?string
    {
        return $this->contractItemId;
    }
    /**
     * 
     *
     * @param string|null $contractItemId
     *
     * @return self
     */
    public function setContractItemId(?string $contractItemId): self
    {
        $this->initialized['contractItemId'] = true;
        $this->contractItemId = $contractItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectMaterialItemId(): ?string
    {
        return $this->projectMaterialItemId;
    }
    /**
     * 
     *
     * @param string|null $projectMaterialItemId
     *
     * @return self
     */
    public function setProjectMaterialItemId(?string $projectMaterialItemId): self
    {
        $this->initialized['projectMaterialItemId'] = true;
        $this->projectMaterialItemId = $projectMaterialItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectRequirementItemId(): ?string
    {
        return $this->projectRequirementItemId;
    }
    /**
     * 
     *
     * @param string|null $projectRequirementItemId
     *
     * @return self
     */
    public function setProjectRequirementItemId(?string $projectRequirementItemId): self
    {
        $this->initialized['projectRequirementItemId'] = true;
        $this->projectRequirementItemId = $projectRequirementItemId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesInvoiceItemId(): ?string
    {
        return $this->salesInvoiceItemId;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceItemId
     *
     * @return self
     */
    public function setSalesInvoiceItemId(?string $salesInvoiceItemId): self
    {
        $this->initialized['salesInvoiceItemId'] = true;
        $this->salesInvoiceItemId = $salesInvoiceItemId;
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