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
     * @var list<Duration>
     */
    protected $assignmentTime;

    /**
     * @var list<Duration>
     */
    protected $billableTime;

    /**
     * @var list<Amount>
     */
    protected $costOfServices;

    /**
     * @var list<Duration>
     */
    protected $invoiceableTime;

    /**
     * @var list<Duration>
     */
    protected $processTime;

    /**
     * @var list<Duration>
     */
    protected $resolutionTime;

    /**
     * @var list<Duration>
     */
    protected $responseTime;

    /**
     * @var list<bool>
     */
    protected $tasksCompleted;

    /**
     * @var list<string>
     */
    protected $tasksCompletedPercentage;

    /**
     * @return list<Duration>
     */
    public function getAssignmentTime(): array
    {
        return $this->assignmentTime;
    }

    /**
     * @param  list<Duration>  $assignmentTime
     */
    public function setAssignmentTime(array $assignmentTime): self
    {
        $this->initialized['assignmentTime'] = true;
        $this->assignmentTime = $assignmentTime;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getBillableTime(): array
    {
        return $this->billableTime;
    }

    /**
     * @param  list<Duration>  $billableTime
     */
    public function setBillableTime(array $billableTime): self
    {
        $this->initialized['billableTime'] = true;
        $this->billableTime = $billableTime;

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
     * @return list<Duration>
     */
    public function getInvoiceableTime(): array
    {
        return $this->invoiceableTime;
    }

    /**
     * @param  list<Duration>  $invoiceableTime
     */
    public function setInvoiceableTime(array $invoiceableTime): self
    {
        $this->initialized['invoiceableTime'] = true;
        $this->invoiceableTime = $invoiceableTime;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getProcessTime(): array
    {
        return $this->processTime;
    }

    /**
     * @param  list<Duration>  $processTime
     */
    public function setProcessTime(array $processTime): self
    {
        $this->initialized['processTime'] = true;
        $this->processTime = $processTime;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getResolutionTime(): array
    {
        return $this->resolutionTime;
    }

    /**
     * @param  list<Duration>  $resolutionTime
     */
    public function setResolutionTime(array $resolutionTime): self
    {
        $this->initialized['resolutionTime'] = true;
        $this->resolutionTime = $resolutionTime;

        return $this;
    }

    /**
     * @return list<Duration>
     */
    public function getResponseTime(): array
    {
        return $this->responseTime;
    }

    /**
     * @param  list<Duration>  $responseTime
     */
    public function setResponseTime(array $responseTime): self
    {
        $this->initialized['responseTime'] = true;
        $this->responseTime = $responseTime;

        return $this;
    }

    /**
     * @return list<bool>
     */
    public function getTasksCompleted(): array
    {
        return $this->tasksCompleted;
    }

    /**
     * @param  list<bool>  $tasksCompleted
     */
    public function setTasksCompleted(array $tasksCompleted): self
    {
        $this->initialized['tasksCompleted'] = true;
        $this->tasksCompleted = $tasksCompleted;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTasksCompletedPercentage(): array
    {
        return $this->tasksCompletedPercentage;
    }

    /**
     * @param  list<string>  $tasksCompletedPercentage
     */
    public function setTasksCompletedPercentage(array $tasksCompletedPercentage): self
    {
        $this->initialized['tasksCompletedPercentage'] = true;
        $this->tasksCompletedPercentage = $tasksCompletedPercentage;

        return $this;
    }
}
