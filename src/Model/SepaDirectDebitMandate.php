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
    protected $bankAccountId;

    /**
     * @var int|null
     */
    protected $cancellationDate;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var bool|null
     */
    protected $firstDebit;

    /**
     * @var string|null
     */
    protected $mandateReference;

    /**
     * @var string|null
     */
    protected $partyBankAccountId;

    /**
     * @var string|null
     */
    protected $runtime;

    /**
     * @var int|null
     */
    protected $signatureDate;

    /**
     * @var string|null
     */
    protected $type;

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

    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }

    public function setBankAccountId(?string $bankAccountId): self
    {
        $this->initialized['bankAccountId'] = true;
        $this->bankAccountId = $bankAccountId;

        return $this;
    }

    public function getCancellationDate(): ?int
    {
        return $this->cancellationDate;
    }

    public function setCancellationDate(?int $cancellationDate): self
    {
        $this->initialized['cancellationDate'] = true;
        $this->cancellationDate = $cancellationDate;

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

    public function getFirstDebit(): ?bool
    {
        return $this->firstDebit;
    }

    public function setFirstDebit(?bool $firstDebit): self
    {
        $this->initialized['firstDebit'] = true;
        $this->firstDebit = $firstDebit;

        return $this;
    }

    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }

    public function setMandateReference(?string $mandateReference): self
    {
        $this->initialized['mandateReference'] = true;
        $this->mandateReference = $mandateReference;

        return $this;
    }

    public function getPartyBankAccountId(): ?string
    {
        return $this->partyBankAccountId;
    }

    public function setPartyBankAccountId(?string $partyBankAccountId): self
    {
        $this->initialized['partyBankAccountId'] = true;
        $this->partyBankAccountId = $partyBankAccountId;

        return $this;
    }

    public function getRuntime(): ?string
    {
        return $this->runtime;
    }

    public function setRuntime(?string $runtime): self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;

        return $this;
    }

    public function getSignatureDate(): ?int
    {
        return $this->signatureDate;
    }

    public function setSignatureDate(?int $signatureDate): self
    {
        $this->initialized['signatureDate'] = true;
        $this->signatureDate = $signatureDate;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
