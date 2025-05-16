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
     * @var list<Duration>
     */
    protected $bookedBillableWork;

    /**
     * @var list<Duration>
     */
    protected $bookedWork;

    /**
     * @var list<Amount>
     */
    protected $costOfServices;

    /**
     * @var list<Amount>
     */
    protected $invoiceableServices;

    /**
     * @var list<Amount>
     */
    protected $invoicedServices;

    /**
     * @var list<Amount>
     */
    protected $notInvoicedServices;

    /**
     * @var list<Duration>
     */
    protected $plannedBillableEffort;

    /**
     * @var list<Duration>
     */
    protected $plannedEffort;

    /**
     * @return list<Duration>
     */
    public function getBookedBillableWork(): array
    {
        return $this->bookedBillableWork;
    }

    /**
     * @param  list<Duration>  $bookedBillableWork
     */
    public function setBookedBillableWork(array $bookedBillableWork): self
    {
        $this->initialized['bookedBillableWork'] = true;
        $this->bookedBillableWork = $bookedBillableWork;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getBookedWork(): array
    {
        return $this->bookedWork;
    }

    /**
     * @param  list<Duration>  $bookedWork
     */
    public function setBookedWork(array $bookedWork): self
    {
        $this->initialized['bookedWork'] = true;
        $this->bookedWork = $bookedWork;

        return $this;
    }

    /**
     * @return list<Amount>
     */
    public function getCostOfServices(): array
    {
        return $this->costOfServices;
    }

    /**
     * @param  list<Amount>  $costOfServices
     */
    public function setCostOfServices(array $costOfServices): self
    {
        $this->initialized['costOfServices'] = true;
        $this->costOfServices = $costOfServices;

        return $this;
    }

    /**
     * @return list<Amount>
     */
    public function getInvoiceableServices(): array
    {
        return $this->invoiceableServices;
    }

    /**
     * @param  list<Amount>  $invoiceableServices
     */
    public function setInvoiceableServices(array $invoiceableServices): self
    {
        $this->initialized['invoiceableServices'] = true;
        $this->invoiceableServices = $invoiceableServices;

        return $this;
    }

    /**
     * @return list<Amount>
     */
    public function getInvoicedServices(): array
    {
        return $this->invoicedServices;
    }

    /**
     * @param  list<Amount>  $invoicedServices
     */
    public function setInvoicedServices(array $invoicedServices): self
    {
        $this->initialized['invoicedServices'] = true;
        $this->invoicedServices = $invoicedServices;

        return $this;
    }

    /**
     * @return list<Amount>
     */
    public function getNotInvoicedServices(): array
    {
        return $this->notInvoicedServices;
    }

    /**
     * @param  list<Amount>  $notInvoicedServices
     */
    public function setNotInvoicedServices(array $notInvoicedServices): self
    {
        $this->initialized['notInvoicedServices'] = true;
        $this->notInvoicedServices = $notInvoicedServices;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getPlannedBillableEffort(): array
    {
        return $this->plannedBillableEffort;
    }

    /**
     * @param  list<Duration>  $plannedBillableEffort
     */
    public function setPlannedBillableEffort(array $plannedBillableEffort): self
    {
        $this->initialized['plannedBillableEffort'] = true;
        $this->plannedBillableEffort = $plannedBillableEffort;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getPlannedEffort(): array
    {
        return $this->plannedEffort;
    }

    /**
     * @param  list<Duration>  $plannedEffort
     */
    public function setPlannedEffort(array $plannedEffort): self
    {
        $this->initialized['plannedEffort'] = true;
        $this->plannedEffort = $plannedEffort;

        return $this;
    }
}
