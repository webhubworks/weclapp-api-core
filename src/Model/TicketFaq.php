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
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $answer;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdById;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $customers;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $question;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $ticketCategories;
    /**
     * 
     *
     * @var string|null
     */
    protected $visibility;
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
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAnswer(): ?string
    {
        return $this->answer;
    }
    /**
     * 
     *
     * @param string|null $answer
     *
     * @return self
     */
    public function setAnswer(?string $answer): self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedById(): ?string
    {
        return $this->createdById;
    }
    /**
     * 
     *
     * @param string|null $createdById
     *
     * @return self
     */
    public function setCreatedById(?string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getCustomers(): ?array
    {
        return $this->customers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $customers
     *
     * @return self
     */
    public function setCustomers(?array $customers): self
    {
        $this->initialized['customers'] = true;
        $this->customers = $customers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuestion(): ?string
    {
        return $this->question;
    }
    /**
     * 
     *
     * @param string|null $question
     *
     * @return self
     */
    public function setQuestion(?string $question): self
    {
        $this->initialized['question'] = true;
        $this->question = $question;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTicketCategories(): ?array
    {
        return $this->ticketCategories;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $ticketCategories
     *
     * @return self
     */
    public function setTicketCategories(?array $ticketCategories): self
    {
        $this->initialized['ticketCategories'] = true;
        $this->ticketCategories = $ticketCategories;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVisibility(): ?string
    {
        return $this->visibility;
    }
    /**
     * 
     *
     * @param string|null $visibility
     *
     * @return self
     */
    public function setVisibility(?string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
}