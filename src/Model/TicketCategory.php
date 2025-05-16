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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $parentTicketCategoryId;
    /**
     * 
     *
     * @var bool
     */
    protected $pseudoCategory;
    /**
     * 
     *
     * @var bool
     */
    protected $published;
    /**
     * 
     *
     * @var bool
     */
    protected $visibleInCustomerPortal;
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
    public function getParentTicketCategoryId(): string
    {
        return $this->parentTicketCategoryId;
    }
    /**
     * 
     *
     * @param string $parentTicketCategoryId
     *
     * @return self
     */
    public function setParentTicketCategoryId(string $parentTicketCategoryId): self
    {
        $this->initialized['parentTicketCategoryId'] = true;
        $this->parentTicketCategoryId = $parentTicketCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPseudoCategory(): bool
    {
        return $this->pseudoCategory;
    }
    /**
     * 
     *
     * @param bool $pseudoCategory
     *
     * @return self
     */
    public function setPseudoCategory(bool $pseudoCategory): self
    {
        $this->initialized['pseudoCategory'] = true;
        $this->pseudoCategory = $pseudoCategory;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->published;
    }
    /**
     * 
     *
     * @param bool $published
     *
     * @return self
     */
    public function setPublished(bool $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getVisibleInCustomerPortal(): bool
    {
        return $this->visibleInCustomerPortal;
    }
    /**
     * 
     *
     * @param bool $visibleInCustomerPortal
     *
     * @return self
     */
    public function setVisibleInCustomerPortal(bool $visibleInCustomerPortal): self
    {
        $this->initialized['visibleInCustomerPortal'] = true;
        $this->visibleInCustomerPortal = $visibleInCustomerPortal;
        return $this;
    }
}