<?php

namespace Webhubworks\WeclappApiCore\Model;

class PaymentMethod extends \ArrayObject
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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var bool
     */
    protected $autoClearingAccountTransaction;

    /**
     * @var string
     */
    protected $clearingAccountId;

    /**
     * @var string
     */
    protected $discountPercentage;

    /**
     * @var string
     */
    protected $discountValue;

    /**
     * @var string
     */
    protected $documentText;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $type;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAutoClearingAccountTransaction(): bool
    {
        return $this->autoClearingAccountTransaction;
    }

    public function setAutoClearingAccountTransaction(bool $autoClearingAccountTransaction): self
    {
        $this->initialized['autoClearingAccountTransaction'] = true;
        $this->autoClearingAccountTransaction = $autoClearingAccountTransaction;

        return $this;
    }

    public function getClearingAccountId(): string
    {
        return $this->clearingAccountId;
    }

    public function setClearingAccountId(string $clearingAccountId): self
    {
        $this->initialized['clearingAccountId'] = true;
        $this->clearingAccountId = $clearingAccountId;

        return $this;
    }

    public function getDiscountPercentage(): string
    {
        return $this->discountPercentage;
    }

    public function setDiscountPercentage(string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    public function getDiscountValue(): string
    {
        return $this->discountValue;
    }

    public function setDiscountValue(string $discountValue): self
    {
        $this->initialized['discountValue'] = true;
        $this->discountValue = $discountValue;

        return $this;
    }

    public function getDocumentText(): string
    {
        return $this->documentText;
    }

    public function setDocumentText(string $documentText): self
    {
        $this->initialized['documentText'] = true;
        $this->documentText = $documentText;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
