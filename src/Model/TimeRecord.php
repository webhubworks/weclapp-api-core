<?php

namespace Webhubworks\WeclappApiCore\Model;

class TimeRecord extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $billable;
    /**
     * 
     *
     * @var int|null
     */
    protected $billableDurationSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $billableInvoiceStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var int|null
     */
    protected $durationSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $externalConnectionSourceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $hourlyRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $performanceRecordedStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $placeOfServiceId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $printOnPerformanceRecord;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectId;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectTaskId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesInvoiceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesOrderTicketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $serviceQuotaId;
    /**
     * 
     *
     * @var int|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ticketId;
    /**
     * 
     *
     * @var string|null
     */
    protected $timeRecordSource;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBillable(): ?bool
    {
        return $this->billable;
    }
    /**
     * 
     *
     * @param bool|null $billable
     *
     * @return self
     */
    public function setBillable(?bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBillableDurationSeconds(): ?int
    {
        return $this->billableDurationSeconds;
    }
    /**
     * 
     *
     * @param int|null $billableDurationSeconds
     *
     * @return self
     */
    public function setBillableDurationSeconds(?int $billableDurationSeconds): self
    {
        $this->initialized['billableDurationSeconds'] = true;
        $this->billableDurationSeconds = $billableDurationSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillableInvoiceStatus(): ?string
    {
        return $this->billableInvoiceStatus;
    }
    /**
     * 
     *
     * @param string|null $billableInvoiceStatus
     *
     * @return self
     */
    public function setBillableInvoiceStatus(?string $billableInvoiceStatus): self
    {
        $this->initialized['billableInvoiceStatus'] = true;
        $this->billableInvoiceStatus = $billableInvoiceStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDurationSeconds(): ?int
    {
        return $this->durationSeconds;
    }
    /**
     * 
     *
     * @param int|null $durationSeconds
     *
     * @return self
     */
    public function setDurationSeconds(?int $durationSeconds): self
    {
        $this->initialized['durationSeconds'] = true;
        $this->durationSeconds = $durationSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExternalConnectionSourceId(): ?string
    {
        return $this->externalConnectionSourceId;
    }
    /**
     * 
     *
     * @param string|null $externalConnectionSourceId
     *
     * @return self
     */
    public function setExternalConnectionSourceId(?string $externalConnectionSourceId): self
    {
        $this->initialized['externalConnectionSourceId'] = true;
        $this->externalConnectionSourceId = $externalConnectionSourceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHourlyRate(): ?string
    {
        return $this->hourlyRate;
    }
    /**
     * 
     *
     * @param string|null $hourlyRate
     *
     * @return self
     */
    public function setHourlyRate(?string $hourlyRate): self
    {
        $this->initialized['hourlyRate'] = true;
        $this->hourlyRate = $hourlyRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPerformanceRecordedStatus(): ?string
    {
        return $this->performanceRecordedStatus;
    }
    /**
     * 
     *
     * @param string|null $performanceRecordedStatus
     *
     * @return self
     */
    public function setPerformanceRecordedStatus(?string $performanceRecordedStatus): self
    {
        $this->initialized['performanceRecordedStatus'] = true;
        $this->performanceRecordedStatus = $performanceRecordedStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlaceOfServiceId(): ?string
    {
        return $this->placeOfServiceId;
    }
    /**
     * 
     *
     * @param string|null $placeOfServiceId
     *
     * @return self
     */
    public function setPlaceOfServiceId(?string $placeOfServiceId): self
    {
        $this->initialized['placeOfServiceId'] = true;
        $this->placeOfServiceId = $placeOfServiceId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrintOnPerformanceRecord(): ?bool
    {
        return $this->printOnPerformanceRecord;
    }
    /**
     * 
     *
     * @param bool|null $printOnPerformanceRecord
     *
     * @return self
     */
    public function setPrintOnPerformanceRecord(?bool $printOnPerformanceRecord): self
    {
        $this->initialized['printOnPerformanceRecord'] = true;
        $this->printOnPerformanceRecord = $printOnPerformanceRecord;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param string|null $projectId
     *
     * @return self
     */
    public function setProjectId(?string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectTaskId(): ?string
    {
        return $this->projectTaskId;
    }
    /**
     * 
     *
     * @param string|null $projectTaskId
     *
     * @return self
     */
    public function setProjectTaskId(?string $projectTaskId): self
    {
        $this->initialized['projectTaskId'] = true;
        $this->projectTaskId = $projectTaskId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesInvoiceId(): ?string
    {
        return $this->salesInvoiceId;
    }
    /**
     * 
     *
     * @param string|null $salesInvoiceId
     *
     * @return self
     */
    public function setSalesInvoiceId(?string $salesInvoiceId): self
    {
        $this->initialized['salesInvoiceId'] = true;
        $this->salesInvoiceId = $salesInvoiceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderId(): ?string
    {
        return $this->salesOrderId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderId
     *
     * @return self
     */
    public function setSalesOrderId(?string $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesOrderTicketId(): ?string
    {
        return $this->salesOrderTicketId;
    }
    /**
     * 
     *
     * @param string|null $salesOrderTicketId
     *
     * @return self
     */
    public function setSalesOrderTicketId(?string $salesOrderTicketId): self
    {
        $this->initialized['salesOrderTicketId'] = true;
        $this->salesOrderTicketId = $salesOrderTicketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServiceQuotaId(): ?string
    {
        return $this->serviceQuotaId;
    }
    /**
     * 
     *
     * @param string|null $serviceQuotaId
     *
     * @return self
     */
    public function setServiceQuotaId(?string $serviceQuotaId): self
    {
        $this->initialized['serviceQuotaId'] = true;
        $this->serviceQuotaId = $serviceQuotaId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param int|null $startDate
     *
     * @return self
     */
    public function setStartDate(?int $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskId(): ?string
    {
        return $this->taskId;
    }
    /**
     * 
     *
     * @param string|null $taskId
     *
     * @return self
     */
    public function setTaskId(?string $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTicketId(): ?string
    {
        return $this->ticketId;
    }
    /**
     * 
     *
     * @param string|null $ticketId
     *
     * @return self
     */
    public function setTicketId(?string $ticketId): self
    {
        $this->initialized['ticketId'] = true;
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTimeRecordSource(): ?string
    {
        return $this->timeRecordSource;
    }
    /**
     * 
     *
     * @param string|null $timeRecordSource
     *
     * @return self
     */
    public function setTimeRecordSource(?string $timeRecordSource): self
    {
        $this->initialized['timeRecordSource'] = true;
        $this->timeRecordSource = $timeRecordSource;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}