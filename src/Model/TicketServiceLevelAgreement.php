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
     * @var list<OnlyId>|null
     */
    protected $categories;
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
    protected $degreeOfPerformance;
    /**
     * 
     *
     * @var bool|null
     */
    protected $includeNoTicketType;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $ratingId;
    /**
     * 
     *
     * @var list<TicketServiceLevelAgreementTarget>|null
     */
    protected $targets;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $types;
    /**
     * 
     *
     * @var bool|null
     */
    protected $visible;
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
     * @return list<OnlyId>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
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
    public function getDegreeOfPerformance(): ?int
    {
        return $this->degreeOfPerformance;
    }
    /**
     * 
     *
     * @param int|null $degreeOfPerformance
     *
     * @return self
     */
    public function setDegreeOfPerformance(?int $degreeOfPerformance): self
    {
        $this->initialized['degreeOfPerformance'] = true;
        $this->degreeOfPerformance = $degreeOfPerformance;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIncludeNoTicketType(): ?bool
    {
        return $this->includeNoTicketType;
    }
    /**
     * 
     *
     * @param bool|null $includeNoTicketType
     *
     * @return self
     */
    public function setIncludeNoTicketType(?bool $includeNoTicketType): self
    {
        $this->initialized['includeNoTicketType'] = true;
        $this->includeNoTicketType = $includeNoTicketType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRatingId(): ?string
    {
        return $this->ratingId;
    }
    /**
     * 
     *
     * @param string|null $ratingId
     *
     * @return self
     */
    public function setRatingId(?string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TicketServiceLevelAgreementTarget>|null
     */
    public function getTargets(): ?array
    {
        return $this->targets;
    }
    /**
     * 
     *
     * @param list<TicketServiceLevelAgreementTarget>|null $targets
     *
     * @return self
     */
    public function setTargets(?array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $types
     *
     * @return self
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * 
     *
     * @param bool|null $visible
     *
     * @return self
     */
    public function setVisible(?bool $visible): self
    {
        $this->initialized['visible'] = true;
        $this->visible = $visible;
        return $this;
    }
}