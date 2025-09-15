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
     * @var string|null
     */
    protected $accountHolder;
    /**
     * 
     *
     * @var string|null
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $bankCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditInstitute;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $primary;
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
     * @return string|null
     */
    public function getAccountHolder(): ?string
    {
        return $this->accountHolder;
    }
    /**
     * 
     *
     * @param string|null $accountHolder
     *
     * @return self
     */
    public function setAccountHolder(?string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }
    /**
     * 
     *
     * @param string|null $bankCode
     *
     * @return self
     */
    public function setBankCode(?string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditInstitute(): ?string
    {
        return $this->creditInstitute;
    }
    /**
     * 
     *
     * @param string|null $creditInstitute
     *
     * @return self
     */
    public function setCreditInstitute(?string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyId(): ?string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string|null $partyId
     *
     * @return self
     */
    public function setPartyId(?string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool|null $primary
     *
     * @return self
     */
    public function setPrimary(?bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
}