<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketPoolingGroup extends \ArrayObject
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
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var list<OnlyId>|null
     */
    protected $ticketCategories;

    /**
     * @var list<TicketPoolingGroupMember>|null
     */
    protected $ticketPoolingGroupMembers;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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

    /**
     * @return list<TicketPoolingGroupMember>|null
     */
    public function getTicketPoolingGroupMembers(): ?array
    {
        return $this->ticketPoolingGroupMembers;
    }

    /**
     * @param  list<TicketPoolingGroupMember>|null  $ticketPoolingGroupMembers
     */
    public function setTicketPoolingGroupMembers(?array $ticketPoolingGroupMembers): self
    {
        $this->initialized['ticketPoolingGroupMembers'] = true;
        $this->ticketPoolingGroupMembers = $ticketPoolingGroupMembers;

        return $this;
    }
}
