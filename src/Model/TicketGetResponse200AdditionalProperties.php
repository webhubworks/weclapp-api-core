<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketGetResponse200AdditionalProperties extends \ArrayObject
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
    protected $assignmentTime;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $billableTime;
    /**
     * 
     *
     * @var list<Amount>|null
     */
    protected $costOfServices;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $invoiceableTime;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $processTime;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $resolutionTime;
    /**
     * 
     *
     * @var list<Duration>|null
     */
    protected $responseTime;
    /**
     * 
     *
     * @var list<bool>|null
     */
    protected $tasksCompleted;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $tasksCompletedPercentage;
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getAssignmentTime(): ?array
    {
        return $this->assignmentTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $assignmentTime
     *
     * @return self
     */
    public function setAssignmentTime(?array $assignmentTime): self
    {
        $this->initialized['assignmentTime'] = true;
        $this->assignmentTime = $assignmentTime;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getBillableTime(): ?array
    {
        return $this->billableTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $billableTime
     *
     * @return self
     */
    public function setBillableTime(?array $billableTime): self
    {
        $this->initialized['billableTime'] = true;
        $this->billableTime = $billableTime;
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
     * @return list<Duration>|null
     */
    public function getInvoiceableTime(): ?array
    {
        return $this->invoiceableTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $invoiceableTime
     *
     * @return self
     */
    public function setInvoiceableTime(?array $invoiceableTime): self
    {
        $this->initialized['invoiceableTime'] = true;
        $this->invoiceableTime = $invoiceableTime;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getProcessTime(): ?array
    {
        return $this->processTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $processTime
     *
     * @return self
     */
    public function setProcessTime(?array $processTime): self
    {
        $this->initialized['processTime'] = true;
        $this->processTime = $processTime;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getResolutionTime(): ?array
    {
        return $this->resolutionTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $resolutionTime
     *
     * @return self
     */
    public function setResolutionTime(?array $resolutionTime): self
    {
        $this->initialized['resolutionTime'] = true;
        $this->resolutionTime = $resolutionTime;
        return $this;
    }
    /**
     * 
     *
     * @return list<Duration>|null
     */
    public function getResponseTime(): ?array
    {
        return $this->responseTime;
    }
    /**
     * 
     *
     * @param list<Duration>|null $responseTime
     *
     * @return self
     */
    public function setResponseTime(?array $responseTime): self
    {
        $this->initialized['responseTime'] = true;
        $this->responseTime = $responseTime;
        return $this;
    }
    /**
     * 
     *
     * @return list<bool>|null
     */
    public function getTasksCompleted(): ?array
    {
        return $this->tasksCompleted;
    }
    /**
     * 
     *
     * @param list<bool>|null $tasksCompleted
     *
     * @return self
     */
    public function setTasksCompleted(?array $tasksCompleted): self
    {
        $this->initialized['tasksCompleted'] = true;
        $this->tasksCompleted = $tasksCompleted;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getTasksCompletedPercentage(): ?array
    {
        return $this->tasksCompletedPercentage;
    }
    /**
     * 
     *
     * @param list<string>|null $tasksCompletedPercentage
     *
     * @return self
     */
    public function setTasksCompletedPercentage(?array $tasksCompletedPercentage): self
    {
        $this->initialized['tasksCompletedPercentage'] = true;
        $this->tasksCompletedPercentage = $tasksCompletedPercentage;
        return $this;
    }
}