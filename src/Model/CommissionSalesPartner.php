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
     * @var string
     */
    protected $commissionFix;

    /**
     * @var string
     */
    protected $commissionPercentage;

    /**
     * @var string
     */
    protected $commissionType;

    /**
     * @var string
     */
    protected $salesPartnerSupplierId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesPartnerSupplierNumber;

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

    public function getCommissionFix(): string
    {
        return $this->commissionFix;
    }

    public function setCommissionFix(string $commissionFix): self
    {
        $this->initialized['commissionFix'] = true;
        $this->commissionFix = $commissionFix;

        return $this;
    }

    public function getCommissionPercentage(): string
    {
        return $this->commissionPercentage;
    }

    public function setCommissionPercentage(string $commissionPercentage): self
    {
        $this->initialized['commissionPercentage'] = true;
        $this->commissionPercentage = $commissionPercentage;

        return $this;
    }

    public function getCommissionType(): string
    {
        return $this->commissionType;
    }

    public function setCommissionType(string $commissionType): self
    {
        $this->initialized['commissionType'] = true;
        $this->commissionType = $commissionType;

        return $this;
    }

    public function getSalesPartnerSupplierId(): string
    {
        return $this->salesPartnerSupplierId;
    }

    public function setSalesPartnerSupplierId(string $salesPartnerSupplierId): self
    {
        $this->initialized['salesPartnerSupplierId'] = true;
        $this->salesPartnerSupplierId = $salesPartnerSupplierId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesPartnerSupplierNumber(): string
    {
        return $this->salesPartnerSupplierNumber;
    }

    /**
     * @deprecated
     */
    public function setSalesPartnerSupplierNumber(string $salesPartnerSupplierNumber): self
    {
        $this->initialized['salesPartnerSupplierNumber'] = true;
        $this->salesPartnerSupplierNumber = $salesPartnerSupplierNumber;

        return $this;
    }
}
