<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketServiceLevelAgreement extends \ArrayObject
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
     * @var list<OnlyId>
     */
    protected $categories;
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
    protected $degreeOfPerformance;
    /**
     * 
     *
     * @var bool
     */
    protected $includeNoTicketType;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $ratingId;
    /**
     * 
     *
     * @var list<TicketServiceLevelAgreementTarget>
     */
    protected $targets;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $types;
    /**
     * 
     *
     * @var bool
     */
    protected $visible;
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
     * @return list<OnlyId>
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param list<OnlyId> $categories
     *
     * @return self
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
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
    public function getDegreeOfPerformance(): int
    {
        return $this->degreeOfPerformance;
    }
    /**
     * 
     *
     * @param int $degreeOfPerformance
     *
     * @return self
     */
    public function setDegreeOfPerformance(int $degreeOfPerformance): self
    {
        $this->initialized['degreeOfPerformance'] = true;
        $this->degreeOfPerformance = $degreeOfPerformance;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncludeNoTicketType(): bool
    {
        return $this->includeNoTicketType;
    }
    /**
     * 
     *
     * @param bool $includeNoTicketType
     *
     * @return self
     */
    public function setIncludeNoTicketType(bool $includeNoTicketType): self
    {
        $this->initialized['includeNoTicketType'] = true;
        $this->includeNoTicketType = $includeNoTicketType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRatingId(): string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string $ratingId
     *
     * @return self
     */
    public function setRatingId(string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TicketServiceLevelAgreementTarget>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }
    /**
     * 
     *
     * @param list<TicketServiceLevelAgreementTarget> $targets
     *
     * @return self
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param list<OnlyId> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getVisible(): bool
    {
        return $this->visible;
    }
    /**
     * 
     *
     * @param bool $visible
     *
     * @return self
     */
    public function setVisible(bool $visible): self
    {
        $this->initialized['visible'] = true;
        $this->visible = $visible;
        return $this;
    }
}