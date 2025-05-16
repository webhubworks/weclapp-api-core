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
    protected $accountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $contraAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $contraAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $defaultDiscountAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $defaultDiscountAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $defaultNominalAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $defaultNominalAccountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $depositAccountId;
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
    protected $taxKey;
    /**
     * 
     *
     * @var string
     */
    protected $taxType;
    /**
     * 
     *
     * @var string
     */
    protected $taxValue;
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
    public function getAccountId(): string
    {
        return $this->accountId;
    }
    /**
     * 
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
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
     * @deprecated
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
    public function getContraAccountId(): string
    {
        return $this->contraAccountId;
    }
    /**
     * 
     *
     * @param string $contraAccountId
     *
     * @return self
     */
    public function setContraAccountId(string $contraAccountId): self
    {
        $this->initialized['contraAccountId'] = true;
        $this->contraAccountId = $contraAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getContraAccountNumber(): string
    {
        return $this->contraAccountNumber;
    }
    /**
     * 
     *
     * @param string $contraAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setContraAccountNumber(string $contraAccountNumber): self
    {
        $this->initialized['contraAccountNumber'] = true;
        $this->contraAccountNumber = $contraAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultDiscountAccountId(): string
    {
        return $this->defaultDiscountAccountId;
    }
    /**
     * 
     *
     * @param string $defaultDiscountAccountId
     *
     * @return self
     */
    public function setDefaultDiscountAccountId(string $defaultDiscountAccountId): self
    {
        $this->initialized['defaultDiscountAccountId'] = true;
        $this->defaultDiscountAccountId = $defaultDiscountAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getDefaultDiscountAccountNumber(): string
    {
        return $this->defaultDiscountAccountNumber;
    }
    /**
     * 
     *
     * @param string $defaultDiscountAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultDiscountAccountNumber(string $defaultDiscountAccountNumber): self
    {
        $this->initialized['defaultDiscountAccountNumber'] = true;
        $this->defaultDiscountAccountNumber = $defaultDiscountAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultNominalAccountId(): string
    {
        return $this->defaultNominalAccountId;
    }
    /**
     * 
     *
     * @param string $defaultNominalAccountId
     *
     * @return self
     */
    public function setDefaultNominalAccountId(string $defaultNominalAccountId): self
    {
        $this->initialized['defaultNominalAccountId'] = true;
        $this->defaultNominalAccountId = $defaultNominalAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getDefaultNominalAccountNumber(): string
    {
        return $this->defaultNominalAccountNumber;
    }
    /**
     * 
     *
     * @param string $defaultNominalAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setDefaultNominalAccountNumber(string $defaultNominalAccountNumber): self
    {
        $this->initialized['defaultNominalAccountNumber'] = true;
        $this->defaultNominalAccountNumber = $defaultNominalAccountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDepositAccountId(): string
    {
        return $this->depositAccountId;
    }
    /**
     * 
     *
     * @param string $depositAccountId
     *
     * @return self
     */
    public function setDepositAccountId(string $depositAccountId): self
    {
        $this->initialized['depositAccountId'] = true;
        $this->depositAccountId = $depositAccountId;
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
    public function getTaxKey(): string
    {
        return $this->taxKey;
    }
    /**
     * 
     *
     * @param string $taxKey
     *
     * @return self
     */
    public function setTaxKey(string $taxKey): self
    {
        $this->initialized['taxKey'] = true;
        $this->taxKey = $taxKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxType(): string
    {
        return $this->taxType;
    }
    /**
     * 
     *
     * @param string $taxType
     *
     * @return self
     */
    public function setTaxType(string $taxType): self
    {
        $this->initialized['taxType'] = true;
        $this->taxType = $taxType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTaxValue(): string
    {
        return $this->taxValue;
    }
    /**
     * 
     *
     * @param string $taxValue
     *
     * @return self
     */
    public function setTaxValue(string $taxValue): self
    {
        $this->initialized['taxValue'] = true;
        $this->taxValue = $taxValue;
        return $this;
    }
}