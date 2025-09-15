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
     * @var list<CustomAttribute>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var int|null
     */
    protected $campaignEndDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $campaignName;
    /**
     * 
     *
     * @var string|null
     */
    protected $campaignNumber;
    /**
     * 
     *
     * @var int|null
     */
    protected $campaignStartDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $campaignType;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $responsibleUserId;
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
     * @return list<CustomAttribute>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCampaignEndDate(): ?int
    {
        return $this->campaignEndDate;
    }
    /**
     * 
     *
     * @param int|null $campaignEndDate
     *
     * @return self
     */
    public function setCampaignEndDate(?int $campaignEndDate): self
    {
        $this->initialized['campaignEndDate'] = true;
        $this->campaignEndDate = $campaignEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }
    /**
     * 
     *
     * @param string|null $campaignName
     *
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->initialized['campaignName'] = true;
        $this->campaignName = $campaignName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCampaignNumber(): ?string
    {
        return $this->campaignNumber;
    }
    /**
     * 
     *
     * @param string|null $campaignNumber
     *
     * @return self
     */
    public function setCampaignNumber(?string $campaignNumber): self
    {
        $this->initialized['campaignNumber'] = true;
        $this->campaignNumber = $campaignNumber;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCampaignStartDate(): ?int
    {
        return $this->campaignStartDate;
    }
    /**
     * 
     *
     * @param int|null $campaignStartDate
     *
     * @return self
     */
    public function setCampaignStartDate(?int $campaignStartDate): self
    {
        $this->initialized['campaignStartDate'] = true;
        $this->campaignStartDate = $campaignStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }
    /**
     * 
     *
     * @param string|null $campaignType
     *
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->initialized['campaignType'] = true;
        $this->campaignType = $campaignType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResponsibleUserId(): ?string
    {
        return $this->responsibleUserId;
    }
    /**
     * 
     *
     * @param string|null $responsibleUserId
     *
     * @return self
     */
    public function setResponsibleUserId(?string $responsibleUserId): self
    {
        $this->initialized['responsibleUserId'] = true;
        $this->responsibleUserId = $responsibleUserId;
        return $this;
    }
}