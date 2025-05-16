<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketCategory extends \ArrayObject
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
    protected $name;

    /**
     * @var string|null
     */
    protected $parentTicketCategoryId;

    /**
     * @var bool|null
     */
    protected $pseudoCategory;

    /**
     * @var bool|null
     */
    protected $published;

    /**
     * @var bool|null
     */
    protected $visibleInCustomerPortal;

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

    public function getParentTicketCategoryId(): ?string
    {
        return $this->parentTicketCategoryId;
    }

    public function setParentTicketCategoryId(?string $parentTicketCategoryId): self
    {
        $this->initialized['parentTicketCategoryId'] = true;
        $this->parentTicketCategoryId = $parentTicketCategoryId;

        return $this;
    }

    public function getPseudoCategory(): ?bool
    {
        return $this->pseudoCategory;
    }

    public function setPseudoCategory(?bool $pseudoCategory): self
    {
        $this->initialized['pseudoCategory'] = true;
        $this->pseudoCategory = $pseudoCategory;

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(?bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;

        return $this;
    }

    public function getVisibleInCustomerPortal(): ?bool
    {
        return $this->visibleInCustomerPortal;
    }

    public function setVisibleInCustomerPortal(?bool $visibleInCustomerPortal): self
    {
        $this->initialized['visibleInCustomerPortal'] = true;
        $this->visibleInCustomerPortal = $visibleInCustomerPortal;

        return $this;
    }
}
