<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $customerChildrenSalesOrderVolumeCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerChildrenSalesOrderVolumePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerChildrenSalesRevenueCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerChildrenSalesRevenuePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerQuotationAcceptancePercentage;
    /**
     * 
     *
     * @var list<int>|null
     */
    protected $customerQuotationAcceptanceTimeInDays;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerReturnPercentageCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerReturnPercentagePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesOpenItemOverdueSum;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesOpenItemSum;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesOrderVolumeCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesOrderVolumePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesRevenueCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $customerSalesRevenuePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadChildrenExpectedRevenueOpportunities;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadChildrenExpectedRevenueQuotations;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadChildrenQuotationVolume;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadExpectedRevenueOpportunities;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadExpectedRevenueQuotations;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $leadQuotationVolume;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierChildrenPurchaseOrderVolumeCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierChildrenPurchaseOrderVolumePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierChildrenPurchaseRevenueCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierChildrenPurchaseRevenuePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierPurchaseOrderVolumeCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierPurchaseOrderVolumePreviousYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierPurchaseRevenueCurrentYear;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $supplierPurchaseRevenuePreviousYear;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerChildrenSalesOrderVolumeCurrentYear(): ?array
    {
        return $this->customerChildrenSalesOrderVolumeCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerChildrenSalesOrderVolumeCurrentYear
     *
     * @return self
     */
    public function setCustomerChildrenSalesOrderVolumeCurrentYear(?array $customerChildrenSalesOrderVolumeCurrentYear): self
    {
        $this->initialized['customerChildrenSalesOrderVolumeCurrentYear'] = true;
        $this->customerChildrenSalesOrderVolumeCurrentYear = $customerChildrenSalesOrderVolumeCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerChildrenSalesOrderVolumePreviousYear(): ?array
    {
        return $this->customerChildrenSalesOrderVolumePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerChildrenSalesOrderVolumePreviousYear
     *
     * @return self
     */
    public function setCustomerChildrenSalesOrderVolumePreviousYear(?array $customerChildrenSalesOrderVolumePreviousYear): self
    {
        $this->initialized['customerChildrenSalesOrderVolumePreviousYear'] = true;
        $this->customerChildrenSalesOrderVolumePreviousYear = $customerChildrenSalesOrderVolumePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerChildrenSalesRevenueCurrentYear(): ?array
    {
        return $this->customerChildrenSalesRevenueCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerChildrenSalesRevenueCurrentYear
     *
     * @return self
     */
    public function setCustomerChildrenSalesRevenueCurrentYear(?array $customerChildrenSalesRevenueCurrentYear): self
    {
        $this->initialized['customerChildrenSalesRevenueCurrentYear'] = true;
        $this->customerChildrenSalesRevenueCurrentYear = $customerChildrenSalesRevenueCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerChildrenSalesRevenuePreviousYear(): ?array
    {
        return $this->customerChildrenSalesRevenuePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerChildrenSalesRevenuePreviousYear
     *
     * @return self
     */
    public function setCustomerChildrenSalesRevenuePreviousYear(?array $customerChildrenSalesRevenuePreviousYear): self
    {
        $this->initialized['customerChildrenSalesRevenuePreviousYear'] = true;
        $this->customerChildrenSalesRevenuePreviousYear = $customerChildrenSalesRevenuePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerQuotationAcceptancePercentage(): ?array
    {
        return $this->customerQuotationAcceptancePercentage;
    }
    /**
     * 
     *
     * @param list<string>|null $customerQuotationAcceptancePercentage
     *
     * @return self
     */
    public function setCustomerQuotationAcceptancePercentage(?array $customerQuotationAcceptancePercentage): self
    {
        $this->initialized['customerQuotationAcceptancePercentage'] = true;
        $this->customerQuotationAcceptancePercentage = $customerQuotationAcceptancePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return list<int>|null
     */
    public function getCustomerQuotationAcceptanceTimeInDays(): ?array
    {
        return $this->customerQuotationAcceptanceTimeInDays;
    }
    /**
     * 
     *
     * @param list<int>|null $customerQuotationAcceptanceTimeInDays
     *
     * @return self
     */
    public function setCustomerQuotationAcceptanceTimeInDays(?array $customerQuotationAcceptanceTimeInDays): self
    {
        $this->initialized['customerQuotationAcceptanceTimeInDays'] = true;
        $this->customerQuotationAcceptanceTimeInDays = $customerQuotationAcceptanceTimeInDays;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerReturnPercentageCurrentYear(): ?array
    {
        return $this->customerReturnPercentageCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerReturnPercentageCurrentYear
     *
     * @return self
     */
    public function setCustomerReturnPercentageCurrentYear(?array $customerReturnPercentageCurrentYear): self
    {
        $this->initialized['customerReturnPercentageCurrentYear'] = true;
        $this->customerReturnPercentageCurrentYear = $customerReturnPercentageCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerReturnPercentagePreviousYear(): ?array
    {
        return $this->customerReturnPercentagePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerReturnPercentagePreviousYear
     *
     * @return self
     */
    public function setCustomerReturnPercentagePreviousYear(?array $customerReturnPercentagePreviousYear): self
    {
        $this->initialized['customerReturnPercentagePreviousYear'] = true;
        $this->customerReturnPercentagePreviousYear = $customerReturnPercentagePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesOpenItemOverdueSum(): ?array
    {
        return $this->customerSalesOpenItemOverdueSum;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesOpenItemOverdueSum
     *
     * @return self
     */
    public function setCustomerSalesOpenItemOverdueSum(?array $customerSalesOpenItemOverdueSum): self
    {
        $this->initialized['customerSalesOpenItemOverdueSum'] = true;
        $this->customerSalesOpenItemOverdueSum = $customerSalesOpenItemOverdueSum;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesOpenItemSum(): ?array
    {
        return $this->customerSalesOpenItemSum;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesOpenItemSum
     *
     * @return self
     */
    public function setCustomerSalesOpenItemSum(?array $customerSalesOpenItemSum): self
    {
        $this->initialized['customerSalesOpenItemSum'] = true;
        $this->customerSalesOpenItemSum = $customerSalesOpenItemSum;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesOrderVolumeCurrentYear(): ?array
    {
        return $this->customerSalesOrderVolumeCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesOrderVolumeCurrentYear
     *
     * @return self
     */
    public function setCustomerSalesOrderVolumeCurrentYear(?array $customerSalesOrderVolumeCurrentYear): self
    {
        $this->initialized['customerSalesOrderVolumeCurrentYear'] = true;
        $this->customerSalesOrderVolumeCurrentYear = $customerSalesOrderVolumeCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesOrderVolumePreviousYear(): ?array
    {
        return $this->customerSalesOrderVolumePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesOrderVolumePreviousYear
     *
     * @return self
     */
    public function setCustomerSalesOrderVolumePreviousYear(?array $customerSalesOrderVolumePreviousYear): self
    {
        $this->initialized['customerSalesOrderVolumePreviousYear'] = true;
        $this->customerSalesOrderVolumePreviousYear = $customerSalesOrderVolumePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesRevenueCurrentYear(): ?array
    {
        return $this->customerSalesRevenueCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesRevenueCurrentYear
     *
     * @return self
     */
    public function setCustomerSalesRevenueCurrentYear(?array $customerSalesRevenueCurrentYear): self
    {
        $this->initialized['customerSalesRevenueCurrentYear'] = true;
        $this->customerSalesRevenueCurrentYear = $customerSalesRevenueCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getCustomerSalesRevenuePreviousYear(): ?array
    {
        return $this->customerSalesRevenuePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $customerSalesRevenuePreviousYear
     *
     * @return self
     */
    public function setCustomerSalesRevenuePreviousYear(?array $customerSalesRevenuePreviousYear): self
    {
        $this->initialized['customerSalesRevenuePreviousYear'] = true;
        $this->customerSalesRevenuePreviousYear = $customerSalesRevenuePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadChildrenExpectedRevenueOpportunities(): ?array
    {
        return $this->leadChildrenExpectedRevenueOpportunities;
    }
    /**
     * 
     *
     * @param list<string>|null $leadChildrenExpectedRevenueOpportunities
     *
     * @return self
     */
    public function setLeadChildrenExpectedRevenueOpportunities(?array $leadChildrenExpectedRevenueOpportunities): self
    {
        $this->initialized['leadChildrenExpectedRevenueOpportunities'] = true;
        $this->leadChildrenExpectedRevenueOpportunities = $leadChildrenExpectedRevenueOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadChildrenExpectedRevenueQuotations(): ?array
    {
        return $this->leadChildrenExpectedRevenueQuotations;
    }
    /**
     * 
     *
     * @param list<string>|null $leadChildrenExpectedRevenueQuotations
     *
     * @return self
     */
    public function setLeadChildrenExpectedRevenueQuotations(?array $leadChildrenExpectedRevenueQuotations): self
    {
        $this->initialized['leadChildrenExpectedRevenueQuotations'] = true;
        $this->leadChildrenExpectedRevenueQuotations = $leadChildrenExpectedRevenueQuotations;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadChildrenQuotationVolume(): ?array
    {
        return $this->leadChildrenQuotationVolume;
    }
    /**
     * 
     *
     * @param list<string>|null $leadChildrenQuotationVolume
     *
     * @return self
     */
    public function setLeadChildrenQuotationVolume(?array $leadChildrenQuotationVolume): self
    {
        $this->initialized['leadChildrenQuotationVolume'] = true;
        $this->leadChildrenQuotationVolume = $leadChildrenQuotationVolume;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadExpectedRevenueOpportunities(): ?array
    {
        return $this->leadExpectedRevenueOpportunities;
    }
    /**
     * 
     *
     * @param list<string>|null $leadExpectedRevenueOpportunities
     *
     * @return self
     */
    public function setLeadExpectedRevenueOpportunities(?array $leadExpectedRevenueOpportunities): self
    {
        $this->initialized['leadExpectedRevenueOpportunities'] = true;
        $this->leadExpectedRevenueOpportunities = $leadExpectedRevenueOpportunities;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadExpectedRevenueQuotations(): ?array
    {
        return $this->leadExpectedRevenueQuotations;
    }
    /**
     * 
     *
     * @param list<string>|null $leadExpectedRevenueQuotations
     *
     * @return self
     */
    public function setLeadExpectedRevenueQuotations(?array $leadExpectedRevenueQuotations): self
    {
        $this->initialized['leadExpectedRevenueQuotations'] = true;
        $this->leadExpectedRevenueQuotations = $leadExpectedRevenueQuotations;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLeadQuotationVolume(): ?array
    {
        return $this->leadQuotationVolume;
    }
    /**
     * 
     *
     * @param list<string>|null $leadQuotationVolume
     *
     * @return self
     */
    public function setLeadQuotationVolume(?array $leadQuotationVolume): self
    {
        $this->initialized['leadQuotationVolume'] = true;
        $this->leadQuotationVolume = $leadQuotationVolume;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierChildrenPurchaseOrderVolumeCurrentYear(): ?array
    {
        return $this->supplierChildrenPurchaseOrderVolumeCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierChildrenPurchaseOrderVolumeCurrentYear
     *
     * @return self
     */
    public function setSupplierChildrenPurchaseOrderVolumeCurrentYear(?array $supplierChildrenPurchaseOrderVolumeCurrentYear): self
    {
        $this->initialized['supplierChildrenPurchaseOrderVolumeCurrentYear'] = true;
        $this->supplierChildrenPurchaseOrderVolumeCurrentYear = $supplierChildrenPurchaseOrderVolumeCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierChildrenPurchaseOrderVolumePreviousYear(): ?array
    {
        return $this->supplierChildrenPurchaseOrderVolumePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierChildrenPurchaseOrderVolumePreviousYear
     *
     * @return self
     */
    public function setSupplierChildrenPurchaseOrderVolumePreviousYear(?array $supplierChildrenPurchaseOrderVolumePreviousYear): self
    {
        $this->initialized['supplierChildrenPurchaseOrderVolumePreviousYear'] = true;
        $this->supplierChildrenPurchaseOrderVolumePreviousYear = $supplierChildrenPurchaseOrderVolumePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierChildrenPurchaseRevenueCurrentYear(): ?array
    {
        return $this->supplierChildrenPurchaseRevenueCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierChildrenPurchaseRevenueCurrentYear
     *
     * @return self
     */
    public function setSupplierChildrenPurchaseRevenueCurrentYear(?array $supplierChildrenPurchaseRevenueCurrentYear): self
    {
        $this->initialized['supplierChildrenPurchaseRevenueCurrentYear'] = true;
        $this->supplierChildrenPurchaseRevenueCurrentYear = $supplierChildrenPurchaseRevenueCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierChildrenPurchaseRevenuePreviousYear(): ?array
    {
        return $this->supplierChildrenPurchaseRevenuePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierChildrenPurchaseRevenuePreviousYear
     *
     * @return self
     */
    public function setSupplierChildrenPurchaseRevenuePreviousYear(?array $supplierChildrenPurchaseRevenuePreviousYear): self
    {
        $this->initialized['supplierChildrenPurchaseRevenuePreviousYear'] = true;
        $this->supplierChildrenPurchaseRevenuePreviousYear = $supplierChildrenPurchaseRevenuePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierPurchaseOrderVolumeCurrentYear(): ?array
    {
        return $this->supplierPurchaseOrderVolumeCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierPurchaseOrderVolumeCurrentYear
     *
     * @return self
     */
    public function setSupplierPurchaseOrderVolumeCurrentYear(?array $supplierPurchaseOrderVolumeCurrentYear): self
    {
        $this->initialized['supplierPurchaseOrderVolumeCurrentYear'] = true;
        $this->supplierPurchaseOrderVolumeCurrentYear = $supplierPurchaseOrderVolumeCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierPurchaseOrderVolumePreviousYear(): ?array
    {
        return $this->supplierPurchaseOrderVolumePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierPurchaseOrderVolumePreviousYear
     *
     * @return self
     */
    public function setSupplierPurchaseOrderVolumePreviousYear(?array $supplierPurchaseOrderVolumePreviousYear): self
    {
        $this->initialized['supplierPurchaseOrderVolumePreviousYear'] = true;
        $this->supplierPurchaseOrderVolumePreviousYear = $supplierPurchaseOrderVolumePreviousYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierPurchaseRevenueCurrentYear(): ?array
    {
        return $this->supplierPurchaseRevenueCurrentYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierPurchaseRevenueCurrentYear
     *
     * @return self
     */
    public function setSupplierPurchaseRevenueCurrentYear(?array $supplierPurchaseRevenueCurrentYear): self
    {
        $this->initialized['supplierPurchaseRevenueCurrentYear'] = true;
        $this->supplierPurchaseRevenueCurrentYear = $supplierPurchaseRevenueCurrentYear;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getSupplierPurchaseRevenuePreviousYear(): ?array
    {
        return $this->supplierPurchaseRevenuePreviousYear;
    }
    /**
     * 
     *
     * @param list<string>|null $supplierPurchaseRevenuePreviousYear
     *
     * @return self
     */
    public function setSupplierPurchaseRevenuePreviousYear(?array $supplierPurchaseRevenuePreviousYear): self
    {
        $this->initialized['supplierPurchaseRevenuePreviousYear'] = true;
        $this->supplierPurchaseRevenuePreviousYear = $supplierPurchaseRevenuePreviousYear;
        return $this;
    }
}