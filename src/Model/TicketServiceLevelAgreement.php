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
     * @var list<OnlyId>|null
     */
    protected $categories;

    /**
     * @var list<OnlyId>|null
     */
    protected $customers;

    /**
     * @var int|null
     */
    protected $degreeOfPerformance;

    /**
     * @var bool|null
     */
    protected $includeNoTicketType;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $ratingId;

    /**
     * @var list<TicketServiceLevelAgreementTarget>|null
     */
    protected $targets;

    /**
     * @var list<OnlyId>|null
     */
    protected $types;

    /**
     * @var bool|null
     */
    protected $visible;

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

    /**
     * @return list<OnlyId>|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param  list<OnlyId>|null  $categories
     */
    public function setCategories(?array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

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

    public function getDegreeOfPerformance(): ?int
    {
        return $this->degreeOfPerformance;
    }

    public function setDegreeOfPerformance(?int $degreeOfPerformance): self
    {
        $this->initialized['degreeOfPerformance'] = true;
        $this->degreeOfPerformance = $degreeOfPerformance;

        return $this;
    }

    public function getIncludeNoTicketType(): ?bool
    {
        return $this->includeNoTicketType;
    }

    public function setIncludeNoTicketType(?bool $includeNoTicketType): self
    {
        $this->initialized['includeNoTicketType'] = true;
        $this->includeNoTicketType = $includeNoTicketType;

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

    public function getRatingId(): ?string
    {
        return $this->ratingId;
    }

    public function setRatingId(?string $ratingId): self
    {
        $this->initialized['ratingId'] = true;
        $this->ratingId = $ratingId;

        return $this;
    }

    /**
     * @return list<TicketServiceLevelAgreementTarget>|null
     */
    public function getTargets(): ?array
    {
        return $this->targets;
    }

    /**
     * @param  list<TicketServiceLevelAgreementTarget>|null  $targets
     */
    public function setTargets(?array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * @param  list<OnlyId>|null  $types
     */
    public function setTypes(?array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): self
    {
        $this->initialized['visible'] = true;
        $this->visible = $visible;

        return $this;
    }
}
