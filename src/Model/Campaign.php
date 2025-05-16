<?php

namespace Webhubworks\WeclappApiCore\Model;

class Campaign extends \ArrayObject
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
     * @var list<CustomAttribute>|null
     */
    protected $customAttributes;

    /**
     * @var int|null
     */
    protected $campaignEndDate;

    /**
     * @var string|null
     */
    protected $campaignName;

    /**
     * @var string|null
     */
    protected $campaignNumber;

    /**
     * @var int|null
     */
    protected $campaignStartDate;

    /**
     * @var string|null
     */
    protected $campaignType;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $responsibleUserId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $responsibleUserUsername;

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

    /**
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<CustomAttribute>|null  $customAttributes
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getCampaignEndDate(): ?int
    {
        return $this->campaignEndDate;
    }

    public function setCampaignEndDate(?int $campaignEndDate): self
    {
        $this->initialized['campaignEndDate'] = true;
        $this->campaignEndDate = $campaignEndDate;

        return $this;
    }

    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    public function setCampaignName(?string $campaignName): self
    {
        $this->initialized['campaignName'] = true;
        $this->campaignName = $campaignName;

        return $this;
    }

    public function getCampaignNumber(): ?string
    {
        return $this->campaignNumber;
    }

    public function setCampaignNumber(?string $campaignNumber): self
    {
        $this->initialized['campaignNumber'] = true;
        $this->campaignNumber = $campaignNumber;

        return $this;
    }

    public function getCampaignStartDate(): ?int
    {
        return $this->campaignStartDate;
    }

    public function setCampaignStartDate(?int $campaignStartDate): self
    {
        $this->initialized['campaignStartDate'] = true;
        $this->campaignStartDate = $campaignStartDate;

        return $this;
    }

    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    public function setCampaignType(?string $campaignType): self
    {
        $this->initialized['campaignType'] = true;
        $this->campaignType = $campaignType;

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

    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }

    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getResponsibleUserUsername(): ?string
    {
        return $this->responsibleUserUsername;
    }

    /**
     * @deprecated
     */
    public function setResponsibleUserUsername(?string $responsibleUserUsername): self
    {
        $this->initialized['responsibleUserUsername'] = true;
        $this->responsibleUserUsername = $responsibleUserUsername;

        return $this;
    }
}
