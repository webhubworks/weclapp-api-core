<?php

namespace Webhubworks\WeclappApiCore\Model;

class SepaDirectDebitMandate extends \ArrayObject
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
    protected $bankAccountId;
    /**
     * 
     *
     * @var int
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $firstDebit;
    /**
     * 
     *
     * @var string
     */
    protected $mandateReference;
    /**
     * 
     *
     * @var string
     */
    protected $partyBankAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $runtime;
    /**
     * 
     *
     * @var int
     */
    protected $signatureDate;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
    public function getBankAccountId(): string
    {
        return $this->bankAccountId;
    }
    /**
     * 
     *
     * @param string $bankAccountId
     *
     * @return self
     */
    public function setBankAccountId(string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCancellationDate(): int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFirstDebit(): bool
    {
        return $this->firstDebit;
    }
    /**
     * 
     *
     * @param bool $firstDebit
     *
     * @return self
     */
    public function setFirstDebit(bool $firstDebit): self
    {
        $this->initialized['firstDebit'] = true;
        $this->firstDebit = $firstDebit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMandateReference(): string
    {
        return $this->mandateReference;
    }
    /**
     * 
     *
     * @param string $mandateReference
     *
     * @return self
     */
    public function setMandateReference(string $mandateReference): self
    {
        $this->initialized['mandateReference'] = true;
        $this->mandateReference = $mandateReference;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyBankAccountId(): string
    {
        return $this->partyBankAccountId;
    }
    /**
     * 
     *
     * @param string $partyBankAccountId
     *
     * @return self
     */
    public function setPartyBankAccountId(string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRuntime(): string
    {
        return $this->runtime;
    }
    /**
     * 
     *
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime(string $runtime): self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSignatureDate(): int
    {
        return $this->signatureDate;
    }
    /**
     * 
     *
     * @param int $signatureDate
     *
     * @return self
     */
    public function setSignatureDate(int $signatureDate): self
    {
        $this->initialized['signatureDate'] = true;
        $this->signatureDate = $signatureDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}