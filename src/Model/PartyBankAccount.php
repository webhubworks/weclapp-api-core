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
     * @var string
     */
    protected $accountHolder;
    /**
     * 
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $bankCode;
    /**
     * 
     *
     * @var string
     */
    protected $creditInstitute;
    /**
     * 
     *
     * @var string
     */
    protected $partyId;
    /**
     * 
     *
     * @var bool
     */
    protected $primary;
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
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }
    /**
     * 
     *
     * @param string $accountHolder
     *
     * @return self
     */
    public function setAccountHolder(string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBankCode(): string
    {
        return $this->bankCode;
    }
    /**
     * 
     *
     * @param string $bankCode
     *
     * @return self
     */
    public function setBankCode(string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditInstitute(): string
    {
        return $this->creditInstitute;
    }
    /**
     * 
     *
     * @param string $creditInstitute
     *
     * @return self
     */
    public function setCreditInstitute(string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyId(): string
    {
        return $this->partyId;
    }
    /**
     * 
     *
     * @param string $partyId
     *
     * @return self
     */
    public function setPartyId(string $partyId): self
    {
        $this->initialized['partyId'] = true;
        $this->partyId = $partyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
}