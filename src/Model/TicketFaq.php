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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $answer;
    /**
     * 
     *
     * @var string
     */
    protected $createdById;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $customers;
    /**
     * 
     *
     * @var int
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $question;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $ticketCategories;
    /**
     * 
     *
     * @var string
     */
    protected $visibility;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }
    /**
     * 
     *
     * @param string $answer
     *
     * @return self
     */
    public function setAnswer(string $answer): self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedById(): string
    {
        return $this->createdById;
    }
    /**
     * 
     *
     * @param string $createdById
     *
     * @return self
     */
    public function setCreatedById(string $createdById): self
    {
        $this->initialized['createdById'] = true;
        $this->createdById = $createdById;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }
    /**
     * 
     *
     * @param list<OnlyId> $customers
     *
     * @return self
     */
    public function setCustomers(array $customers): self
    {
        $this->initialized['customers'] = true;
        $this->customers = $customers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPositionNumber(): int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }
    /**
     * 
     *
     * @param string $question
     *
     * @return self
     */
    public function setQuestion(string $question): self
    {
        $this->initialized['question'] = true;
        $this->question = $question;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getTicketCategories(): array
    {
        return $this->ticketCategories;
    }
    /**
     * 
     *
     * @param list<OnlyId> $ticketCategories
     *
     * @return self
     */
    public function setTicketCategories(array $ticketCategories): self
    {
        $this->initialized['ticketCategories'] = true;
        $this->ticketCategories = $ticketCategories;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }
    /**
     * 
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
}