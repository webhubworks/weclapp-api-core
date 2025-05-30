<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketFaq extends \ArrayObject
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
     * @var bool|null
     */
    protected $active;

    /**
     * @var string|null
     */
    protected $answer;

    /**
     * @var string|null
     */
    protected $createdById;

    /**
     * @var list<OnlyId>|null
     */
    protected $customers;

    /**
     * @var int|null
     */
    protected $positionNumber;

    /**
     * @var string|null
     */
    protected $question;

    /**
     * @var list<OnlyId>|null
     */
    protected $ticketCategories;

    /**
     * @var string|null
     */
    protected $visibility;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;

        return $this;
    }

    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }

    public function setCreatedById(?string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }

    /**
     * @param  list<OnlyId>|null  $customers
     */
    public function setCustomers(?array $customers): self
    {
        $this->initialized['customers'] = true;
        $this->customers = $customers;

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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->initialized['question'] = true;
        $this->question = $question;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getTicketCategories(): ?array
    {
        return $this->ticketCategories;
    }

    /**
     * @param  list<OnlyId>|null  $ticketCategories
     */
    public function setTicketCategories(?array $ticketCategories): self
    {
        $this->initialized['ticketCategories'] = true;
        $this->ticketCategories = $ticketCategories;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;

        return $this;
    }
}
