<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<Duration>|null
     */
    protected $bookedBillableWork;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $bookedWork;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $costOfServices;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $invoiceableServices;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $invoicedServices;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $notInvoicedServices;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $plannedBillableEffort;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $plannedEffort;
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getBookedBillableWork(): ?array
    {
        return $this->bookedBillableWork;
    }
    /**
     * 
     *
     * @param list<Duration>|null $bookedBillableWork
     *
     * @return self
     */
    public function setBookedBillableWork(?array $bookedBillableWork): self
    {
        $this->initialized['bookedBillableWork'] = true;
        $this->bookedBillableWork = $bookedBillableWork;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getBookedWork(): ?array
    {
        return $this->bookedWork;
    }
    /**
     * 
     *
     * @param list<Duration>|null $bookedWork
     *
     * @return self
     */
    public function setBookedWork(?array $bookedWork): self
    {
        $this->initialized['bookedWork'] = true;
        $this->bookedWork = $bookedWork;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getCostOfServices(): ?array
    {
        return $this->costOfServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $costOfServices
     *
     * @return self
     */
    public function setCostOfServices(?array $costOfServices): self
    {
        $this->initialized['costOfServices'] = true;
        $this->costOfServices = $costOfServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getInvoiceableServices(): ?array
    {
        return $this->invoiceableServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $invoiceableServices
     *
     * @return self
     */
    public function setInvoiceableServices(?array $invoiceableServices): self
    {
        $this->initialized['invoiceableServices'] = true;
        $this->invoiceableServices = $invoiceableServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getInvoicedServices(): ?array
    {
        return $this->invoicedServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $invoicedServices
     *
     * @return self
     */
    public function setInvoicedServices(?array $invoicedServices): self
    {
        $this->initialized['invoicedServices'] = true;
        $this->invoicedServices = $invoicedServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<Amount>|null
     */
    public function getNotInvoicedServices(): ?array
    {
        return $this->notInvoicedServices;
    }
    /**
     * 
     *
     * @param list<Amount>|null $notInvoicedServices
     *
     * @return self
     */
    public function setNotInvoicedServices(?array $notInvoicedServices): self
    {
        $this->initialized['notInvoicedServices'] = true;
        $this->notInvoicedServices = $notInvoicedServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getPlannedBillableEffort(): ?array
    {
        return $this->plannedBillableEffort;
    }
    /**
     * 
     *
     * @param list<Duration>|null $plannedBillableEffort
     *
     * @return self
     */
    public function setPlannedBillableEffort(?array $plannedBillableEffort): self
    {
        $this->initialized['plannedBillableEffort'] = true;
        $this->plannedBillableEffort = $plannedBillableEffort;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getPlannedEffort(): ?array
    {
        return $this->plannedEffort;
    }
    /**
     * 
     *
     * @param list<Duration>|null $plannedEffort
     *
     * @return self
     */
    public function setPlannedEffort(?array $plannedEffort): self
    {
        $this->initialized['plannedEffort'] = true;
        $this->plannedEffort = $plannedEffort;
        return $this;
    }
}