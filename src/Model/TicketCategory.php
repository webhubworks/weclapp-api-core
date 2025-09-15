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
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentTicketCategoryId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $pseudoCategory;
    /**
     * 
     *
     * @var bool|null
     */
    protected $published;
    /**
     * 
     *
     * @var bool|null
     */
    protected $visibleInCustomerPortal;
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
    public function getParentTicketCategoryId(): ?string
    {
        return $this->parentTicketCategoryId;
    }
    /**
     * 
     *
     * @param string|null $parentTicketCategoryId
     *
     * @return self
     */
    public function setParentTicketCategoryId(?string $parentTicketCategoryId): self
    {
        $this->initialized['parentTicketCategoryId'] = true;
        $this->parentTicketCategoryId = $parentTicketCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPseudoCategory(): ?bool
    {
        return $this->pseudoCategory;
    }
    /**
     * 
     *
     * @param bool|null $pseudoCategory
     *
     * @return self
     */
    public function setPseudoCategory(?bool $pseudoCategory): self
    {
        $this->initialized['pseudoCategory'] = true;
        $this->pseudoCategory = $pseudoCategory;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPublished(): ?bool
    {
        return $this->published;
    }
    /**
     * 
     *
     * @param bool|null $published
     *
     * @return self
     */
    public function setPublished(?bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getVisibleInCustomerPortal(): ?bool
    {
        return $this->visibleInCustomerPortal;
    }
    /**
     * 
     *
     * @param bool|null $visibleInCustomerPortal
     *
     * @return self
     */
    public function setVisibleInCustomerPortal(?bool $visibleInCustomerPortal): self
    {
        $this->initialized['visibleInCustomerPortal'] = true;
        $this->visibleInCustomerPortal = $visibleInCustomerPortal;
        return $this;
    }
}