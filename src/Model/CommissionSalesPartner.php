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
     * @var string
     */
    protected $commissionFix;
    /**
     * 
     *
     * @var string
     */
    protected $commissionPercentage;
    /**
     * 
     *
     * @var string
     */
    protected $commissionType;
    /**
     * 
     *
     * @var string
     */
    protected $salesPartnerSupplierId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $salesPartnerSupplierNumber;
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
     * @return string
     */
    public function getCommissionFix(): string
    {
        return $this->commissionFix;
    }
    /**
     * 
     *
     * @param string $commissionFix
     *
     * @return self
     */
    public function setCommissionFix(string $commissionFix): self
    {
        $this->initialized['commissionFix'] = true;
        $this->commissionFix = $commissionFix;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommissionPercentage(): string
    {
        return $this->commissionPercentage;
    }
    /**
     * 
     *
     * @param string $commissionPercentage
     *
     * @return self
     */
    public function setCommissionPercentage(string $commissionPercentage): self
    {
        $this->initialized['commissionPercentage'] = true;
        $this->commissionPercentage = $commissionPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommissionType(): string
    {
        return $this->commissionType;
    }
    /**
     * 
     *
     * @param string $commissionType
     *
     * @return self
     */
    public function setCommissionType(string $commissionType): self
    {
        $this->initialized['commissionType'] = true;
        $this->commissionType = $commissionType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalesPartnerSupplierId(): string
    {
        return $this->salesPartnerSupplierId;
    }
    /**
     * 
     *
     * @param string $salesPartnerSupplierId
     *
     * @return self
     */
    public function setSalesPartnerSupplierId(string $salesPartnerSupplierId): self
    {
        $this->initialized['salesPartnerSupplierId'] = true;
        $this->salesPartnerSupplierId = $salesPartnerSupplierId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getSalesPartnerSupplierNumber(): string
    {
        return $this->salesPartnerSupplierNumber;
    }
    /**
     * 
     *
     * @param string $salesPartnerSupplierNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setSalesPartnerSupplierNumber(string $salesPartnerSupplierNumber): self
    {
        $this->initialized['salesPartnerSupplierNumber'] = true;
        $this->salesPartnerSupplierNumber = $salesPartnerSupplierNumber;
        return $this;
    }
}