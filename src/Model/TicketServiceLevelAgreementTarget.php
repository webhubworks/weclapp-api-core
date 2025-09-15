<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketServiceLevelAgreementTarget extends \ArrayObject
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
     * @var int|null
     */
    protected $assignmentTimeQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $assignmentTimeUnit;
    /**
     * 
     *
     * @var int|null
     */
    protected $businessHolidaysId;
    /**
     * 
     *
     * @var int|null
     */
    protected $businessHoursId;
    /**
     * 
     *
     * @var int|null
     */
    protected $firstReplyTimeQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstReplyTimeUnit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $notification;
    /**
     * 
     *
     * @var int|null
     */
    protected $priorityId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sendEscalationEmail;
    /**
     * 
     *
     * @var int|null
     */
    protected $solutionTimeQuantity;
    /**
     * 
     *
     * @var string|null
     */
    protected $solutionTimeUnit;
    /**
     * 
     *
     * @return int|null
     */
    public function getAssignmentTimeQuantity(): ?int
    {
        return $this->assignmentTimeQuantity;
    }
    /**
     * 
     *
     * @param int|null $assignmentTimeQuantity
     *
     * @return self
     */
    public function setAssignmentTimeQuantity(?int $assignmentTimeQuantity): self
    {
        $this->initialized['assignmentTimeQuantity'] = true;
        $this->assignmentTimeQuantity = $assignmentTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAssignmentTimeUnit(): ?string
    {
        return $this->assignmentTimeUnit;
    }
    /**
     * 
     *
     * @param string|null $assignmentTimeUnit
     *
     * @return self
     */
    public function setAssignmentTimeUnit(?string $assignmentTimeUnit): self
    {
        $this->initialized['assignmentTimeUnit'] = true;
        $this->assignmentTimeUnit = $assignmentTimeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBusinessHolidaysId(): ?int
    {
        return $this->businessHolidaysId;
    }
    /**
     * 
     *
     * @param int|null $businessHolidaysId
     *
     * @return self
     */
    public function setBusinessHolidaysId(?int $businessHolidaysId): self
    {
        $this->initialized['businessHolidaysId'] = true;
        $this->businessHolidaysId = $businessHolidaysId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBusinessHoursId(): ?int
    {
        return $this->businessHoursId;
    }
    /**
     * 
     *
     * @param int|null $businessHoursId
     *
     * @return self
     */
    public function setBusinessHoursId(?int $businessHoursId): self
    {
        $this->initialized['businessHoursId'] = true;
        $this->businessHoursId = $businessHoursId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFirstReplyTimeQuantity(): ?int
    {
        return $this->firstReplyTimeQuantity;
    }
    /**
     * 
     *
     * @param int|null $firstReplyTimeQuantity
     *
     * @return self
     */
    public function setFirstReplyTimeQuantity(?int $firstReplyTimeQuantity): self
    {
        $this->initialized['firstReplyTimeQuantity'] = true;
        $this->firstReplyTimeQuantity = $firstReplyTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstReplyTimeUnit(): ?string
    {
        return $this->firstReplyTimeUnit;
    }
    /**
     * 
     *
     * @param string|null $firstReplyTimeUnit
     *
     * @return self
     */
    public function setFirstReplyTimeUnit(?string $firstReplyTimeUnit): self
    {
        $this->initialized['firstReplyTimeUnit'] = true;
        $this->firstReplyTimeUnit = $firstReplyTimeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getNotification(): ?bool
    {
        return $this->notification;
    }
    /**
     * 
     *
     * @param bool|null $notification
     *
     * @return self
     */
    public function setNotification(?bool $notification): self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPriorityId(): ?int
    {
        return $this->priorityId;
    }
    /**
     * 
     *
     * @param int|null $priorityId
     *
     * @return self
     */
    public function setPriorityId(?int $priorityId): self
    {
        $this->initialized['priorityId'] = true;
        $this->priorityId = $priorityId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSendEscalationEmail(): ?bool
    {
        return $this->sendEscalationEmail;
    }
    /**
     * 
     *
     * @param bool|null $sendEscalationEmail
     *
     * @return self
     */
    public function setSendEscalationEmail(?bool $sendEscalationEmail): self
    {
        $this->initialized['sendEscalationEmail'] = true;
        $this->sendEscalationEmail = $sendEscalationEmail;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSolutionTimeQuantity(): ?int
    {
        return $this->solutionTimeQuantity;
    }
    /**
     * 
     *
     * @param int|null $solutionTimeQuantity
     *
     * @return self
     */
    public function setSolutionTimeQuantity(?int $solutionTimeQuantity): self
    {
        $this->initialized['solutionTimeQuantity'] = true;
        $this->solutionTimeQuantity = $solutionTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSolutionTimeUnit(): ?string
    {
        return $this->solutionTimeUnit;
    }
    /**
     * 
     *
     * @param string|null $solutionTimeUnit
     *
     * @return self
     */
    public function setSolutionTimeUnit(?string $solutionTimeUnit): self
    {
        $this->initialized['solutionTimeUnit'] = true;
        $this->solutionTimeUnit = $solutionTimeUnit;
        return $this;
    }
}