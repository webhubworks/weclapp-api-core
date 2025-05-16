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
    protected $bankAccountId;
    /**
     * 
     *
     * @var int|null
     */
    protected $cancellationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $firstDebit;
    /**
     * 
     *
     * @var string|null
     */
    protected $mandateReference;
    /**
     * 
     *
     * @var string|null
     */
    protected $partyBankAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $runtime;
    /**
     * 
     *
     * @var int|null
     */
    protected $signatureDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }
    /**
     * 
     *
     * @param string|null $bankAccountId
     *
     * @return self
     */
    public function setBankAccountId(?string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }
    /**
     * 
     *
     * @param int|null $cancellationDate
     *
     * @return self
     */
    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;
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
     * @return bool|null
     */
    public function getFirstDebit(): ?bool
    {
        return $this->firstDebit;
    }
    /**
     * 
     *
     * @param bool|null $firstDebit
     *
     * @return self
     */
    public function setFirstDebit(?bool $firstDebit): self
    {
        $this->initialized['firstDebit'] = true;
        $this->firstDebit = $firstDebit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * 
     *
     * @param string|null $mandateReference
     *
     * @return self
     */
    public function setMandateReference(?string $mandateReference): self
    {
        $this->initialized['mandateReference'] = true;
        $this->mandateReference = $mandateReference;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyBankAccountId(): ?string
    {
        return $this->partyBankAccountId;
    }
    /**
     * 
     *
     * @param string|null $partyBankAccountId
     *
     * @return self
     */
    public function setPartyBankAccountId(?string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRuntime(): ?string
    {
        return $this->runtime;
    }
    /**
     * 
     *
     * @param string|null $runtime
     *
     * @return self
     */
    public function setRuntime(?string $runtime): self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSignatureDate(): ?int
    {
        return $this->signatureDate;
    }
    /**
     * 
     *
     * @param int|null $signatureDate
     *
     * @return self
     */
    public function setSignatureDate(?int $signatureDate): self
    {
        $this->initialized['signatureDate'] = true;
        $this->signatureDate = $signatureDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}