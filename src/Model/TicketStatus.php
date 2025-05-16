<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketStatus extends \ArrayObject
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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var int|null
     */
    protected $autoChangeDays;

    /**
     * @var string|null
     */
    protected $autoChangeTicketStatusId;

    /**
     * @var string|null
     */
    protected $color;

    /**
     * @var bool|null
     */
    protected $defaultForInternal;

    /**
     * @var string|null
     */
    protected $internalTicketStatus;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $targetStatusId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAutoChangeDays(): ?int
    {
        return $this->autoChangeDays;
    }

    public function setAutoChangeDays(?int $autoChangeDays): self
    {
        $this->initialized['autoChangeDays'] = true;
        $this->autoChangeDays = $autoChangeDays;

        return $this;
    }

    public function getAutoChangeTicketStatusId(): ?string
    {
        return $this->autoChangeTicketStatusId;
    }

    public function setAutoChangeTicketStatusId(?string $autoChangeTicketStatusId): self
    {
        $this->initialized['autoChangeTicketStatusId'] = true;
        $this->autoChangeTicketStatusId = $autoChangeTicketStatusId;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;

        return $this;
    }

    public function getDefaultForInternal(): ?bool
    {
        return $this->defaultForInternal;
    }

    public function setDefaultForInternal(?bool $defaultForInternal): self
    {
        $this->initialized['defaultForInternal'] = true;
        $this->defaultForInternal = $defaultForInternal;

        return $this;
    }

    public function getInternalTicketStatus(): ?string
    {
        return $this->internalTicketStatus;
    }

    public function setInternalTicketStatus(?string $internalTicketStatus): self
    {
        $this->initialized['internalTicketStatus'] = true;
        $this->internalTicketStatus = $internalTicketStatus;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }

    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;

        return $this;
    }

    public function getTargetStatusId(): ?string
    {
        return $this->targetStatusId;
    }

    public function setTargetStatusId(?string $targetStatusId): self
    {
        $this->initialized['targetStatusId'] = true;
        $this->targetStatusId = $targetStatusId;

        return $this;
    }
}
