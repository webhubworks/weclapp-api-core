<?php

namespace Webhubworks\WeclappApiCore\Model;

class CampaignParticipant extends \ArrayObject
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
    protected $campaignId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $campaignNumber;

    /**
     * @var bool|null
     */
    protected $participation;

    /**
     * @var string|null
     */
    protected $partyId;

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

    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    public function setCampaignId(?string $campaignId): self
    {
        $this->initialized['campaignId'] = true;
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getCampaignNumber(): ?string
    {
        return $this->campaignNumber;
    }

    /**
     * @deprecated
     */
    public function setCampaignNumber(?string $campaignNumber): self
    {
        $this->initialized['campaignNumber'] = true;
        $this->campaignNumber = $campaignNumber;

        return $this;
    }

    public function getParticipation(): ?bool
    {
        return $this->participation;
    }

    public function setParticipation(?bool $participation): self
    {
        $this->initialized['participation'] = true;
        $this->participation = $participation;

        return $this;
    }

    public function getPartyId(): ?string
    {
        return $this->partyId;
    }

    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;

        return $this;
    }
}
