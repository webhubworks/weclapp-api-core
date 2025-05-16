<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyBankAccount extends \ArrayObject
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
    protected $accountHolder;

    /**
     * @var string|null
     */
    protected $accountNumber;

    /**
     * @var string|null
     */
    protected $bankCode;

    /**
     * @var string|null
     */
    protected $creditInstitute;

    /**
     * @var string|null
     */
    protected $partyId;

    /**
     * @var bool|null
     */
    protected $primary;

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

    public function getAccountHolder(): ?string
    {
        return $this->accountHolder;
    }

    public function setAccountHolder(?string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    public function setBankCode(?string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;

        return $this;
    }

    public function getCreditInstitute(): ?string
    {
        return $this->creditInstitute;
    }

    public function setCreditInstitute(?string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;

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

    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    public function setPrimary(?bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;

        return $this;
    }
}
