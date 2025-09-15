<?php

namespace Webhubworks\WeclappApiCore\Model;

class CommissionSalesPartner extends \ArrayObject
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
    protected $commissionFix;
    /**
     * 
     *
     * @var string|null
     */
    protected $commissionPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $commissionType;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesPartnerSupplierId;
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
    public function getCommissionFix(): ?string
    {
        return $this->commissionFix;
    }
    /**
     * 
     *
     * @param string|null $commissionFix
     *
     * @return self
     */
    public function setCommissionFix(?string $commissionFix): self
    {
        $this->initialized['commissionFix'] = true;
        $this->commissionFix = $commissionFix;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommissionPercentage(): ?string
    {
        return $this->commissionPercentage;
    }
    /**
     * 
     *
     * @param string|null $commissionPercentage
     *
     * @return self
     */
    public function setCommissionPercentage(?string $commissionPercentage): self
    {
        $this->initialized['commissionPercentage'] = true;
        $this->commissionPercentage = $commissionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommissionType(): ?string
    {
        return $this->commissionType;
    }
    /**
     * 
     *
     * @param string|null $commissionType
     *
     * @return self
     */
    public function setCommissionType(?string $commissionType): self
    {
        $this->initialized['commissionType'] = true;
        $this->commissionType = $commissionType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesPartnerSupplierId(): ?string
    {
        return $this->salesPartnerSupplierId;
    }
    /**
     * 
     *
     * @param string|null $salesPartnerSupplierId
     *
     * @return self
     */
    public function setSalesPartnerSupplierId(?string $salesPartnerSupplierId): self
    {
        $this->initialized['salesPartnerSupplierId'] = true;
        $this->salesPartnerSupplierId = $salesPartnerSupplierId;
        return $this;
    }
}