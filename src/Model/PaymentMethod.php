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
     * @var bool|null
     */
    protected $autoClearingAccountTransaction;
    /**
     * 
     *
     * @var string|null
     */
    protected $clearingAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $discountPercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $discountValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentText;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $reference;
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
     * @return bool|null
     */
    public function getAutoClearingAccountTransaction(): ?bool
    {
        return $this->autoClearingAccountTransaction;
    }
    /**
     * 
     *
     * @param bool|null $autoClearingAccountTransaction
     *
     * @return self
     */
    public function setAutoClearingAccountTransaction(?bool $autoClearingAccountTransaction): self
    {
        $this->initialized['autoClearingAccountTransaction'] = true;
        $this->autoClearingAccountTransaction = $autoClearingAccountTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClearingAccountId(): ?string
    {
        return $this->clearingAccountId;
    }
    /**
     * 
     *
     * @param string|null $clearingAccountId
     *
     * @return self
     */
    public function setClearingAccountId(?string $clearingAccountId): self
    {
        $this->initialized['clearingAccountId'] = true;
        $this->clearingAccountId = $clearingAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscountPercentage(): ?string
    {
        return $this->discountPercentage;
    }
    /**
     * 
     *
     * @param string|null $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage(?string $discountPercentage): self
    {
        $this->initialized['discountPercentage'] = true;
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDiscountValue(): ?string
    {
        return $this->discountValue;
    }
    /**
     * 
     *
     * @param string|null $discountValue
     *
     * @return self
     */
    public function setDiscountValue(?string $discountValue): self
    {
        $this->initialized['discountValue'] = true;
        $this->discountValue = $discountValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentText(): ?string
    {
        return $this->documentText;
    }
    /**
     * 
     *
     * @param string|null $documentText
     *
     * @return self
     */
    public function setDocumentText(?string $documentText): self
    {
        $this->initialized['documentText'] = true;
        $this->documentText = $documentText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * 
     *
     * @param string|null $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;
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