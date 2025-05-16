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
     * @var bool
     */
    protected $autoClearingAccountTransaction;
    /**
     * 
     *
     * @var string
     */
    protected $clearingAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var string
     */
    protected $discountValue;
    /**
     * 
     *
     * @var string
     */
    protected $documentText;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $reference;
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
     * @return bool
     */
    public function getAutoClearingAccountTransaction(): bool
    {
        return $this->autoClearingAccountTransaction;
    }
    /**
     * 
     *
     * @param bool $autoClearingAccountTransaction
     *
     * @return self
     */
    public function setAutoClearingAccountTransaction(bool $autoClearingAccountTransaction): self
    {
        $this->initialized['autoClearingAccountTransaction'] = true;
        $this->autoClearingAccountTransaction = $autoClearingAccountTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClearingAccountId(): string
    {
        return $this->clearingAccountId;
    }
    /**
     * 
     *
     * @param string $clearingAccountId
     *
     * @return self
     */
    public function setClearingAccountId(string $clearingAccountId): self
    {
        $this->initialized['clearingAccountId'] = true;
        $this->clearingAccountId = $clearingAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscountPercentage(): string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscountValue(): string
    {
        return $this->discountValue;
    }
    /**
     * 
     *
     * @param string $discountValue
     *
     * @return self
     */
    public function setDiscountValue(string $discountValue): self
    {
        $this->initialized['discountValue'] = true;
        $this->discountValue = $discountValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDocumentText(): string
    {
        return $this->documentText;
    }
    /**
     * 
     *
     * @param string $documentText
     *
     * @return self
     */
    public function setDocumentText(string $documentText): self
    {
        $this->initialized['documentText'] = true;
        $this->documentText = $documentText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
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