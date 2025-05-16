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
     * @var int|null
     */
    protected $assignmentTimeQuantity;

    /**
     * @var string|null
     */
    protected $assignmentTimeUnit;

    /**
     * @var int|null
     */
    protected $businessHolidaysId;

    /**
     * @var int|null
     */
    protected $businessHoursId;

    /**
     * @var int|null
     */
    protected $firstReplyTimeQuantity;

    /**
     * @var string|null
     */
    protected $firstReplyTimeUnit;

    /**
     * @var bool|null
     */
    protected $notification;

    /**
     * @var int|null
     */
    protected $priorityId;

    /**
     * @var bool|null
     */
    protected $sendEscalationEmail;

    /**
     * @var int|null
     */
    protected $solutionTimeQuantity;

    /**
     * @var string|null
     */
    protected $solutionTimeUnit;

    public function getAssignmentTimeQuantity(): ?int
    {
        return $this->assignmentTimeQuantity;
    }

    public function setAssignmentTimeQuantity(?int $assignmentTimeQuantity): self
    {
        $this->initialized['assignmentTimeQuantity'] = true;
        $this->assignmentTimeQuantity = $assignmentTimeQuantity;

        return $this;
    }

    public function getAssignmentTimeUnit(): ?string
    {
        return $this->assignmentTimeUnit;
    }

    public function setAssignmentTimeUnit(?string $assignmentTimeUnit): self
    {
        $this->initialized['assignmentTimeUnit'] = true;
        $this->assignmentTimeUnit = $assignmentTimeUnit;

        return $this;
    }

    public function getBusinessHolidaysId(): ?int
    {
        return $this->businessHolidaysId;
    }

    public function setBusinessHolidaysId(?int $businessHolidaysId): self
    {
        $this->initialized['businessHolidaysId'] = true;
        $this->businessHolidaysId = $businessHolidaysId;

        return $this;
    }

    public function getBusinessHoursId(): ?int
    {
        return $this->businessHoursId;
    }

    public function setBusinessHoursId(?int $businessHoursId): self
    {
        $this->initialized['businessHoursId'] = true;
        $this->businessHoursId = $businessHoursId;

        return $this;
    }

    public function getFirstReplyTimeQuantity(): ?int
    {
        return $this->firstReplyTimeQuantity;
    }

    public function setFirstReplyTimeQuantity(?int $firstReplyTimeQuantity): self
    {
        $this->initialized['firstReplyTimeQuantity'] = true;
        $this->firstReplyTimeQuantity = $firstReplyTimeQuantity;

        return $this;
    }

    public function getFirstReplyTimeUnit(): ?string
    {
        return $this->firstReplyTimeUnit;
    }

    public function setFirstReplyTimeUnit(?string $firstReplyTimeUnit): self
    {
        $this->initialized['firstReplyTimeUnit'] = true;
        $this->firstReplyTimeUnit = $firstReplyTimeUnit;

        return $this;
    }

    public function getNotification(): ?bool
    {
        return $this->notification;
    }

    public function setNotification(?bool $notification): self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;

        return $this;
    }

    public function getPriorityId(): ?int
    {
        return $this->priorityId;
    }

    public function setPriorityId(?int $priorityId): self
    {
        $this->initialized['priorityId'] = true;
        $this->priorityId = $priorityId;

        return $this;
    }

    public function getSendEscalationEmail(): ?bool
    {
        return $this->sendEscalationEmail;
    }

    public function setSendEscalationEmail(?bool $sendEscalationEmail): self
    {
        $this->initialized['sendEscalationEmail'] = true;
        $this->sendEscalationEmail = $sendEscalationEmail;

        return $this;
    }

    public function getSolutionTimeQuantity(): ?int
    {
        return $this->solutionTimeQuantity;
    }

    public function setSolutionTimeQuantity(?int $solutionTimeQuantity): self
    {
        $this->initialized['solutionTimeQuantity'] = true;
        $this->solutionTimeQuantity = $solutionTimeQuantity;

        return $this;
    }

    public function getSolutionTimeUnit(): ?string
    {
        return $this->solutionTimeUnit;
    }

    public function setSolutionTimeUnit(?string $solutionTimeUnit): self
    {
        $this->initialized['solutionTimeUnit'] = true;
        $this->solutionTimeUnit = $solutionTimeUnit;

        return $this;
    }
}
