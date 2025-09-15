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
     * @var list<string>|null
     */
    protected $availability;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $availabilityForAllWarehouses;
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
     * @var list<bool>|null
     */
    protected $consignment;
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
     * @var list<list<ItemAvailability>>|null
     */
    protected $itemsAvailability;
    /**
     * 
     *
     * @var list<list<ItemAvailability>>|null
     */
    protected $itemsAvailabilityForAllWarehouses;
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
     * @return list<string>|null
     */
    public function getAvailability(): ?array
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param list<string>|null $availability
     *
     * @return self
     */
    public function setAvailability(?array $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getAvailabilityForAllWarehouses(): ?array
    {
        return $this->availabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param list<string>|null $availabilityForAllWarehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses(?array $availabilityForAllWarehouses): self
    {
        $this->initialized['availabilityForAllWarehouses'] = true;
        $this->availabilityForAllWarehouses = $availabilityForAllWarehouses;
        return $this;
    }
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
     * @return list<bool>|null
     */
    public function getConsignment(): ?array
    {
        return $this->consignment;
    }
    /**
     * 
     *
     * @param list<bool>|null $consignment
     *
     * @return self
     */
    public function setConsignment(?array $consignment): self
    {
        $this->initialized['consignment'] = true;
        $this->consignment = $consignment;
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
     * @return list<list<ItemAvailability>>|null
     */
    public function getItemsAvailability(): ?array
    {
        return $this->itemsAvailability;
    }
    /**
     * 
     *
     * @param list<list<ItemAvailability>>|null $itemsAvailability
     *
     * @return self
     */
    public function setItemsAvailability(?array $itemsAvailability): self
    {
        $this->initialized['itemsAvailability'] = true;
        $this->itemsAvailability = $itemsAvailability;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<ItemAvailability>>|null
     */
    public function getItemsAvailabilityForAllWarehouses(): ?array
    {
        return $this->itemsAvailabilityForAllWarehouses;
    }
    /**
     * 
     *
     * @param list<list<ItemAvailability>>|null $itemsAvailabilityForAllWarehouses
     *
     * @return self
     */
    public function setItemsAvailabilityForAllWarehouses(?array $itemsAvailabilityForAllWarehouses): self
    {
        $this->initialized['itemsAvailabilityForAllWarehouses'] = true;
        $this->itemsAvailabilityForAllWarehouses = $itemsAvailabilityForAllWarehouses;
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