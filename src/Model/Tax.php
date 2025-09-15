<?php

namespace Webhubworks\WeclappApiCore\Model;

class Tax extends \ArrayObject
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
    protected $accountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $contraAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultDiscountAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultNominalAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $depositAccountId;
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
    protected $taxKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxType;
    /**
     * 
     *
     * @var string|null
     */
    protected $taxValue;
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
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string|null $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContraAccountId(): ?string
    {
        return $this->contraAccountId;
    }
    /**
     * 
     *
     * @param string|null $contraAccountId
     *
     * @return self
     */
    public function setContraAccountId(?string $contraAccountId): self
    {
        $this->initialized['contraAccountId'] = true;
        $this->contraAccountId = $contraAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultDiscountAccountId(): ?string
    {
        return $this->defaultDiscountAccountId;
    }
    /**
     * 
     *
     * @param string|null $defaultDiscountAccountId
     *
     * @return self
     */
    public function setDefaultDiscountAccountId(?string $defaultDiscountAccountId): self
    {
        $this->initialized['defaultDiscountAccountId'] = true;
        $this->defaultDiscountAccountId = $defaultDiscountAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultNominalAccountId(): ?string
    {
        return $this->defaultNominalAccountId;
    }
    /**
     * 
     *
     * @param string|null $defaultNominalAccountId
     *
     * @return self
     */
    public function setDefaultNominalAccountId(?string $defaultNominalAccountId): self
    {
        $this->initialized['defaultNominalAccountId'] = true;
        $this->defaultNominalAccountId = $defaultNominalAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDepositAccountId(): ?string
    {
        return $this->depositAccountId;
    }
    /**
     * 
     *
     * @param string|null $depositAccountId
     *
     * @return self
     */
    public function setDepositAccountId(?string $depositAccountId): self
    {
        $this->initialized['depositAccountId'] = true;
        $this->depositAccountId = $depositAccountId;
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
    public function getTaxKey(): ?string
    {
        return $this->taxKey;
    }
    /**
     * 
     *
     * @param string|null $taxKey
     *
     * @return self
     */
    public function setTaxKey(?string $taxKey): self
    {
        $this->initialized['taxKey'] = true;
        $this->taxKey = $taxKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }
    /**
     * 
     *
     * @param string|null $taxType
     *
     * @return self
     */
    public function setTaxType(?string $taxType): self
    {
        $this->initialized['taxType'] = true;
        $this->taxType = $taxType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaxValue(): ?string
    {
        return $this->taxValue;
    }
    /**
     * 
     *
     * @param string|null $taxValue
     *
     * @return self
     */
    public function setTaxValue(?string $taxValue): self
    {
        $this->initialized['taxValue'] = true;
        $this->taxValue = $taxValue;
        return $this;
    }
}