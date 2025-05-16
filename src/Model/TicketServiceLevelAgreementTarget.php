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
     * @var int
     */
    protected $assignmentTimeQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $assignmentTimeUnit;
    /**
     * 
     *
     * @var int
     */
    protected $businessHolidaysId;
    /**
     * 
     *
     * @var int
     */
    protected $businessHoursId;
    /**
     * 
     *
     * @var int
     */
    protected $firstReplyTimeQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $firstReplyTimeUnit;
    /**
     * 
     *
     * @var bool
     */
    protected $notification;
    /**
     * 
     *
     * @var int
     */
    protected $priorityId;
    /**
     * 
     *
     * @var bool
     */
    protected $sendEscalationEmail;
    /**
     * 
     *
     * @var int
     */
    protected $solutionTimeQuantity;
    /**
     * 
     *
     * @var string
     */
    protected $solutionTimeUnit;
    /**
     * 
     *
     * @return int
     */
    public function getAssignmentTimeQuantity(): int
    {
        return $this->assignmentTimeQuantity;
    }
    /**
     * 
     *
     * @param int $assignmentTimeQuantity
     *
     * @return self
     */
    public function setAssignmentTimeQuantity(int $assignmentTimeQuantity): self
    {
        $this->initialized['assignmentTimeQuantity'] = true;
        $this->assignmentTimeQuantity = $assignmentTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAssignmentTimeUnit(): string
    {
        return $this->assignmentTimeUnit;
    }
    /**
     * 
     *
     * @param string $assignmentTimeUnit
     *
     * @return self
     */
    public function setAssignmentTimeUnit(string $assignmentTimeUnit): self
    {
        $this->initialized['assignmentTimeUnit'] = true;
        $this->assignmentTimeUnit = $assignmentTimeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBusinessHolidaysId(): int
    {
        return $this->businessHolidaysId;
    }
    /**
     * 
     *
     * @param int $businessHolidaysId
     *
     * @return self
     */
    public function setBusinessHolidaysId(int $businessHolidaysId): self
    {
        $this->initialized['businessHolidaysId'] = true;
        $this->businessHolidaysId = $businessHolidaysId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBusinessHoursId(): int
    {
        return $this->businessHoursId;
    }
    /**
     * 
     *
     * @param int $businessHoursId
     *
     * @return self
     */
    public function setBusinessHoursId(int $businessHoursId): self
    {
        $this->initialized['businessHoursId'] = true;
        $this->businessHoursId = $businessHoursId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFirstReplyTimeQuantity(): int
    {
        return $this->firstReplyTimeQuantity;
    }
    /**
     * 
     *
     * @param int $firstReplyTimeQuantity
     *
     * @return self
     */
    public function setFirstReplyTimeQuantity(int $firstReplyTimeQuantity): self
    {
        $this->initialized['firstReplyTimeQuantity'] = true;
        $this->firstReplyTimeQuantity = $firstReplyTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstReplyTimeUnit(): string
    {
        return $this->firstReplyTimeUnit;
    }
    /**
     * 
     *
     * @param string $firstReplyTimeUnit
     *
     * @return self
     */
    public function setFirstReplyTimeUnit(string $firstReplyTimeUnit): self
    {
        $this->initialized['firstReplyTimeUnit'] = true;
        $this->firstReplyTimeUnit = $firstReplyTimeUnit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNotification(): bool
    {
        return $this->notification;
    }
    /**
     * 
     *
     * @param bool $notification
     *
     * @return self
     */
    public function setNotification(bool $notification): self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPriorityId(): int
    {
        return $this->priorityId;
    }
    /**
     * 
     *
     * @param int $priorityId
     *
     * @return self
     */
    public function setPriorityId(int $priorityId): self
    {
        $this->initialized['priorityId'] = true;
        $this->priorityId = $priorityId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSendEscalationEmail(): bool
    {
        return $this->sendEscalationEmail;
    }
    /**
     * 
     *
     * @param bool $sendEscalationEmail
     *
     * @return self
     */
    public function setSendEscalationEmail(bool $sendEscalationEmail): self
    {
        $this->initialized['sendEscalationEmail'] = true;
        $this->sendEscalationEmail = $sendEscalationEmail;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSolutionTimeQuantity(): int
    {
        return $this->solutionTimeQuantity;
    }
    /**
     * 
     *
     * @param int $solutionTimeQuantity
     *
     * @return self
     */
    public function setSolutionTimeQuantity(int $solutionTimeQuantity): self
    {
        $this->initialized['solutionTimeQuantity'] = true;
        $this->solutionTimeQuantity = $solutionTimeQuantity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSolutionTimeUnit(): string
    {
        return $this->solutionTimeUnit;
    }
    /**
     * 
     *
     * @param string $solutionTimeUnit
     *
     * @return self
     */
    public function setSolutionTimeUnit(string $solutionTimeUnit): self
    {
        $this->initialized['solutionTimeUnit'] = true;
        $this->solutionTimeUnit = $solutionTimeUnit;
        return $this;
    }
}