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
     * @var list<string>
     */
    protected $customerChildrenSalesOrderVolumeCurrentYear;

    /**
     * @var list<string>
     */
    protected $customerChildrenSalesOrderVolumePreviousYear;

    /**
     * @var list<string>
     */
    protected $customerChildrenSalesRevenueCurrentYear;

    /**
     * @var list<string>
     */
    protected $customerChildrenSalesRevenuePreviousYear;

    /**
     * @var list<string>
     */
    protected $customerQuotationAcceptancePercentage;

    /**
     * @var list<int>
     */
    protected $customerQuotationAcceptanceTimeInDays;

    /**
     * @var list<string>
     */
    protected $customerReturnPercentageCurrentYear;

    /**
     * @var list<string>
     */
    protected $customerReturnPercentagePreviousYear;

    /**
     * @var list<string>
     */
    protected $customerSalesOpenItemOverdueSum;

    /**
     * @var list<string>
     */
    protected $customerSalesOpenItemSum;

    /**
     * @var list<string>
     */
    protected $customerSalesOrderVolumeCurrentYear;

    /**
     * @var list<string>
     */
    protected $customerSalesOrderVolumePreviousYear;

    /**
     * @var list<string>
     */
    protected $customerSalesRevenueCurrentYear;

    /**
     * @var list<string>
     */
    protected $customerSalesRevenuePreviousYear;

    /**
     * @var list<string>
     */
    protected $leadChildrenExpectedRevenueOpportunities;

    /**
     * @var list<string>
     */
    protected $leadChildrenExpectedRevenueQuotations;

    /**
     * @var list<string>
     */
    protected $leadChildrenQuotationVolume;

    /**
     * @var list<string>
     */
    protected $leadExpectedRevenueOpportunities;

    /**
     * @var list<string>
     */
    protected $leadExpectedRevenueQuotations;

    /**
     * @var list<string>
     */
    protected $leadQuotationVolume;

    /**
     * @var list<string>
     */
    protected $supplierChildrenPurchaseOrderVolumeCurrentYear;

    /**
     * @var list<string>
     */
    protected $supplierChildrenPurchaseOrderVolumePreviousYear;

    /**
     * @var list<string>
     */
    protected $supplierChildrenPurchaseRevenueCurrentYear;

    /**
     * @var list<string>
     */
    protected $supplierChildrenPurchaseRevenuePreviousYear;

    /**
     * @var list<string>
     */
    protected $supplierPurchaseOrderVolumeCurrentYear;

    /**
     * @var list<string>
     */
    protected $supplierPurchaseOrderVolumePreviousYear;

    /**
     * @var list<string>
     */
    protected $supplierPurchaseRevenueCurrentYear;

    /**
     * @var list<string>
     */
    protected $supplierPurchaseRevenuePreviousYear;

    /**
     * @return list<string>
     */
    public function getCustomerChildrenSalesOrderVolumeCurrentYear(): array
    {
        return $this->customerChildrenSalesOrderVolumeCurrentYear;
    }

    /**
     * @param  list<string>  $customerChildrenSalesOrderVolumeCurrentYear
     */
    public function setCustomerChildrenSalesOrderVolumeCurrentYear(array $customerChildrenSalesOrderVolumeCurrentYear): self
    {
        $this->initialized['customerChildrenSalesOrderVolumeCurrentYear'] = true;
        $this->customerChildrenSalesOrderVolumeCurrentYear = $customerChildrenSalesOrderVolumeCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerChildrenSalesOrderVolumePreviousYear(): array
    {
        return $this->customerChildrenSalesOrderVolumePreviousYear;
    }

    /**
     * @param  list<string>  $customerChildrenSalesOrderVolumePreviousYear
     */
    public function setCustomerChildrenSalesOrderVolumePreviousYear(array $customerChildrenSalesOrderVolumePreviousYear): self
    {
        $this->initialized['customerChildrenSalesOrderVolumePreviousYear'] = true;
        $this->customerChildrenSalesOrderVolumePreviousYear = $customerChildrenSalesOrderVolumePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerChildrenSalesRevenueCurrentYear(): array
    {
        return $this->customerChildrenSalesRevenueCurrentYear;
    }

    /**
     * @param  list<string>  $customerChildrenSalesRevenueCurrentYear
     */
    public function setCustomerChildrenSalesRevenueCurrentYear(array $customerChildrenSalesRevenueCurrentYear): self
    {
        $this->initialized['customerChildrenSalesRevenueCurrentYear'] = true;
        $this->customerChildrenSalesRevenueCurrentYear = $customerChildrenSalesRevenueCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerChildrenSalesRevenuePreviousYear(): array
    {
        return $this->customerChildrenSalesRevenuePreviousYear;
    }

    /**
     * @param  list<string>  $customerChildrenSalesRevenuePreviousYear
     */
    public function setCustomerChildrenSalesRevenuePreviousYear(array $customerChildrenSalesRevenuePreviousYear): self
    {
        $this->initialized['customerChildrenSalesRevenuePreviousYear'] = true;
        $this->customerChildrenSalesRevenuePreviousYear = $customerChildrenSalesRevenuePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerQuotationAcceptancePercentage(): array
    {
        return $this->customerQuotationAcceptancePercentage;
    }

    /**
     * @param  list<string>  $customerQuotationAcceptancePercentage
     */
    public function setCustomerQuotationAcceptancePercentage(array $customerQuotationAcceptancePercentage): self
    {
        $this->initialized['customerQuotationAcceptancePercentage'] = true;
        $this->customerQuotationAcceptancePercentage = $customerQuotationAcceptancePercentage;

        return $this;
    }

    /**
     * @return list<int>
     */
    public function getCustomerQuotationAcceptanceTimeInDays(): array
    {
        return $this->customerQuotationAcceptanceTimeInDays;
    }

    /**
     * @param  list<int>  $customerQuotationAcceptanceTimeInDays
     */
    public function setCustomerQuotationAcceptanceTimeInDays(array $customerQuotationAcceptanceTimeInDays): self
    {
        $this->initialized['customerQuotationAcceptanceTimeInDays'] = true;
        $this->customerQuotationAcceptanceTimeInDays = $customerQuotationAcceptanceTimeInDays;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerReturnPercentageCurrentYear(): array
    {
        return $this->customerReturnPercentageCurrentYear;
    }

    /**
     * @param  list<string>  $customerReturnPercentageCurrentYear
     */
    public function setCustomerReturnPercentageCurrentYear(array $customerReturnPercentageCurrentYear): self
    {
        $this->initialized['customerReturnPercentageCurrentYear'] = true;
        $this->customerReturnPercentageCurrentYear = $customerReturnPercentageCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerReturnPercentagePreviousYear(): array
    {
        return $this->customerReturnPercentagePreviousYear;
    }

    /**
     * @param  list<string>  $customerReturnPercentagePreviousYear
     */
    public function setCustomerReturnPercentagePreviousYear(array $customerReturnPercentagePreviousYear): self
    {
        $this->initialized['customerReturnPercentagePreviousYear'] = true;
        $this->customerReturnPercentagePreviousYear = $customerReturnPercentagePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesOpenItemOverdueSum(): array
    {
        return $this->customerSalesOpenItemOverdueSum;
    }

    /**
     * @param  list<string>  $customerSalesOpenItemOverdueSum
     */
    public function setCustomerSalesOpenItemOverdueSum(array $customerSalesOpenItemOverdueSum): self
    {
        $this->initialized['customerSalesOpenItemOverdueSum'] = true;
        $this->customerSalesOpenItemOverdueSum = $customerSalesOpenItemOverdueSum;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesOpenItemSum(): array
    {
        return $this->customerSalesOpenItemSum;
    }

    /**
     * @param  list<string>  $customerSalesOpenItemSum
     */
    public function setCustomerSalesOpenItemSum(array $customerSalesOpenItemSum): self
    {
        $this->initialized['customerSalesOpenItemSum'] = true;
        $this->customerSalesOpenItemSum = $customerSalesOpenItemSum;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesOrderVolumeCurrentYear(): array
    {
        return $this->customerSalesOrderVolumeCurrentYear;
    }

    /**
     * @param  list<string>  $customerSalesOrderVolumeCurrentYear
     */
    public function setCustomerSalesOrderVolumeCurrentYear(array $customerSalesOrderVolumeCurrentYear): self
    {
        $this->initialized['customerSalesOrderVolumeCurrentYear'] = true;
        $this->customerSalesOrderVolumeCurrentYear = $customerSalesOrderVolumeCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesOrderVolumePreviousYear(): array
    {
        return $this->customerSalesOrderVolumePreviousYear;
    }

    /**
     * @param  list<string>  $customerSalesOrderVolumePreviousYear
     */
    public function setCustomerSalesOrderVolumePreviousYear(array $customerSalesOrderVolumePreviousYear): self
    {
        $this->initialized['customerSalesOrderVolumePreviousYear'] = true;
        $this->customerSalesOrderVolumePreviousYear = $customerSalesOrderVolumePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesRevenueCurrentYear(): array
    {
        return $this->customerSalesRevenueCurrentYear;
    }

    /**
     * @param  list<string>  $customerSalesRevenueCurrentYear
     */
    public function setCustomerSalesRevenueCurrentYear(array $customerSalesRevenueCurrentYear): self
    {
        $this->initialized['customerSalesRevenueCurrentYear'] = true;
        $this->customerSalesRevenueCurrentYear = $customerSalesRevenueCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getCustomerSalesRevenuePreviousYear(): array
    {
        return $this->customerSalesRevenuePreviousYear;
    }

    /**
     * @param  list<string>  $customerSalesRevenuePreviousYear
     */
    public function setCustomerSalesRevenuePreviousYear(array $customerSalesRevenuePreviousYear): self
    {
        $this->initialized['customerSalesRevenuePreviousYear'] = true;
        $this->customerSalesRevenuePreviousYear = $customerSalesRevenuePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadChildrenExpectedRevenueOpportunities(): array
    {
        return $this->leadChildrenExpectedRevenueOpportunities;
    }

    /**
     * @param  list<string>  $leadChildrenExpectedRevenueOpportunities
     */
    public function setLeadChildrenExpectedRevenueOpportunities(array $leadChildrenExpectedRevenueOpportunities): self
    {
        $this->initialized['leadChildrenExpectedRevenueOpportunities'] = true;
        $this->leadChildrenExpectedRevenueOpportunities = $leadChildrenExpectedRevenueOpportunities;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadChildrenExpectedRevenueQuotations(): array
    {
        return $this->leadChildrenExpectedRevenueQuotations;
    }

    /**
     * @param  list<string>  $leadChildrenExpectedRevenueQuotations
     */
    public function setLeadChildrenExpectedRevenueQuotations(array $leadChildrenExpectedRevenueQuotations): self
    {
        $this->initialized['leadChildrenExpectedRevenueQuotations'] = true;
        $this->leadChildrenExpectedRevenueQuotations = $leadChildrenExpectedRevenueQuotations;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadChildrenQuotationVolume(): array
    {
        return $this->leadChildrenQuotationVolume;
    }

    /**
     * @param  list<string>  $leadChildrenQuotationVolume
     */
    public function setLeadChildrenQuotationVolume(array $leadChildrenQuotationVolume): self
    {
        $this->initialized['leadChildrenQuotationVolume'] = true;
        $this->leadChildrenQuotationVolume = $leadChildrenQuotationVolume;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadExpectedRevenueOpportunities(): array
    {
        return $this->leadExpectedRevenueOpportunities;
    }

    /**
     * @param  list<string>  $leadExpectedRevenueOpportunities
     */
    public function setLeadExpectedRevenueOpportunities(array $leadExpectedRevenueOpportunities): self
    {
        $this->initialized['leadExpectedRevenueOpportunities'] = true;
        $this->leadExpectedRevenueOpportunities = $leadExpectedRevenueOpportunities;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadExpectedRevenueQuotations(): array
    {
        return $this->leadExpectedRevenueQuotations;
    }

    /**
     * @param  list<string>  $leadExpectedRevenueQuotations
     */
    public function setLeadExpectedRevenueQuotations(array $leadExpectedRevenueQuotations): self
    {
        $this->initialized['leadExpectedRevenueQuotations'] = true;
        $this->leadExpectedRevenueQuotations = $leadExpectedRevenueQuotations;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLeadQuotationVolume(): array
    {
        return $this->leadQuotationVolume;
    }

    /**
     * @param  list<string>  $leadQuotationVolume
     */
    public function setLeadQuotationVolume(array $leadQuotationVolume): self
    {
        $this->initialized['leadQuotationVolume'] = true;
        $this->leadQuotationVolume = $leadQuotationVolume;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierChildrenPurchaseOrderVolumeCurrentYear(): array
    {
        return $this->supplierChildrenPurchaseOrderVolumeCurrentYear;
    }

    /**
     * @param  list<string>  $supplierChildrenPurchaseOrderVolumeCurrentYear
     */
    public function setSupplierChildrenPurchaseOrderVolumeCurrentYear(array $supplierChildrenPurchaseOrderVolumeCurrentYear): self
    {
        $this->initialized['supplierChildrenPurchaseOrderVolumeCurrentYear'] = true;
        $this->supplierChildrenPurchaseOrderVolumeCurrentYear = $supplierChildrenPurchaseOrderVolumeCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierChildrenPurchaseOrderVolumePreviousYear(): array
    {
        return $this->supplierChildrenPurchaseOrderVolumePreviousYear;
    }

    /**
     * @param  list<string>  $supplierChildrenPurchaseOrderVolumePreviousYear
     */
    public function setSupplierChildrenPurchaseOrderVolumePreviousYear(array $supplierChildrenPurchaseOrderVolumePreviousYear): self
    {
        $this->initialized['supplierChildrenPurchaseOrderVolumePreviousYear'] = true;
        $this->supplierChildrenPurchaseOrderVolumePreviousYear = $supplierChildrenPurchaseOrderVolumePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierChildrenPurchaseRevenueCurrentYear(): array
    {
        return $this->supplierChildrenPurchaseRevenueCurrentYear;
    }

    /**
     * @param  list<string>  $supplierChildrenPurchaseRevenueCurrentYear
     */
    public function setSupplierChildrenPurchaseRevenueCurrentYear(array $supplierChildrenPurchaseRevenueCurrentYear): self
    {
        $this->initialized['supplierChildrenPurchaseRevenueCurrentYear'] = true;
        $this->supplierChildrenPurchaseRevenueCurrentYear = $supplierChildrenPurchaseRevenueCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierChildrenPurchaseRevenuePreviousYear(): array
    {
        return $this->supplierChildrenPurchaseRevenuePreviousYear;
    }

    /**
     * @param  list<string>  $supplierChildrenPurchaseRevenuePreviousYear
     */
    public function setSupplierChildrenPurchaseRevenuePreviousYear(array $supplierChildrenPurchaseRevenuePreviousYear): self
    {
        $this->initialized['supplierChildrenPurchaseRevenuePreviousYear'] = true;
        $this->supplierChildrenPurchaseRevenuePreviousYear = $supplierChildrenPurchaseRevenuePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierPurchaseOrderVolumeCurrentYear(): array
    {
        return $this->supplierPurchaseOrderVolumeCurrentYear;
    }

    /**
     * @param  list<string>  $supplierPurchaseOrderVolumeCurrentYear
     */
    public function setSupplierPurchaseOrderVolumeCurrentYear(array $supplierPurchaseOrderVolumeCurrentYear): self
    {
        $this->initialized['supplierPurchaseOrderVolumeCurrentYear'] = true;
        $this->supplierPurchaseOrderVolumeCurrentYear = $supplierPurchaseOrderVolumeCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierPurchaseOrderVolumePreviousYear(): array
    {
        return $this->supplierPurchaseOrderVolumePreviousYear;
    }

    /**
     * @param  list<string>  $supplierPurchaseOrderVolumePreviousYear
     */
    public function setSupplierPurchaseOrderVolumePreviousYear(array $supplierPurchaseOrderVolumePreviousYear): self
    {
        $this->initialized['supplierPurchaseOrderVolumePreviousYear'] = true;
        $this->supplierPurchaseOrderVolumePreviousYear = $supplierPurchaseOrderVolumePreviousYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierPurchaseRevenueCurrentYear(): array
    {
        return $this->supplierPurchaseRevenueCurrentYear;
    }

    /**
     * @param  list<string>  $supplierPurchaseRevenueCurrentYear
     */
    public function setSupplierPurchaseRevenueCurrentYear(array $supplierPurchaseRevenueCurrentYear): self
    {
        $this->initialized['supplierPurchaseRevenueCurrentYear'] = true;
        $this->supplierPurchaseRevenueCurrentYear = $supplierPurchaseRevenueCurrentYear;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getSupplierPurchaseRevenuePreviousYear(): array
    {
        return $this->supplierPurchaseRevenuePreviousYear;
    }

    /**
     * @param  list<string>  $supplierPurchaseRevenuePreviousYear
     */
    public function setSupplierPurchaseRevenuePreviousYear(array $supplierPurchaseRevenuePreviousYear): self
    {
        $this->initialized['supplierPurchaseRevenuePreviousYear'] = true;
        $this->supplierPurchaseRevenuePreviousYear = $supplierPurchaseRevenuePreviousYear;

        return $this;
    }
}
