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
     * @var string
     */
    protected $accountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $contraAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $contraAccountNumber;

    /**
     * @var string
     */
    protected $defaultDiscountAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $defaultDiscountAccountNumber;

    /**
     * @var string
     */
    protected $defaultNominalAccountId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $defaultNominalAccountNumber;

    /**
     * @var string
     */
    protected $depositAccountId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $taxKey;

    /**
     * @var string
     */
    protected $taxType;

    /**
     * @var string
     */
    protected $taxValue;

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

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): self
    {
        $this->initialized['accountId'] = true;
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @deprecated
     */
    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getContraAccountId(): string
    {
        return $this->contraAccountId;
    }

    public function setContraAccountId(string $contraAccountId): self
    {
        $this->initialized['contraAccountId'] = true;
        $this->contraAccountId = $contraAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getContraAccountNumber(): string
    {
        return $this->contraAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setContraAccountNumber(string $contraAccountNumber): self
    {
        $this->initialized['contraAccountNumber'] = true;
        $this->contraAccountNumber = $contraAccountNumber;

        return $this;
    }

    public function getDefaultDiscountAccountId(): string
    {
        return $this->defaultDiscountAccountId;
    }

    public function setDefaultDiscountAccountId(string $defaultDiscountAccountId): self
    {
        $this->initialized['defaultDiscountAccountId'] = true;
        $this->defaultDiscountAccountId = $defaultDiscountAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDefaultDiscountAccountNumber(): string
    {
        return $this->defaultDiscountAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setDefaultDiscountAccountNumber(string $defaultDiscountAccountNumber): self
    {
        $this->initialized['defaultDiscountAccountNumber'] = true;
        $this->defaultDiscountAccountNumber = $defaultDiscountAccountNumber;

        return $this;
    }

    public function getDefaultNominalAccountId(): string
    {
        return $this->defaultNominalAccountId;
    }

    public function setDefaultNominalAccountId(string $defaultNominalAccountId): self
    {
        $this->initialized['defaultNominalAccountId'] = true;
        $this->defaultNominalAccountId = $defaultNominalAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getDefaultNominalAccountNumber(): string
    {
        return $this->defaultNominalAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setDefaultNominalAccountNumber(string $defaultNominalAccountNumber): self
    {
        $this->initialized['defaultNominalAccountNumber'] = true;
        $this->defaultNominalAccountNumber = $defaultNominalAccountNumber;

        return $this;
    }

    public function getDepositAccountId(): string
    {
        return $this->depositAccountId;
    }

    public function setDepositAccountId(string $depositAccountId): self
    {
        $this->initialized['depositAccountId'] = true;
        $this->depositAccountId = $depositAccountId;

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

    public function getTaxKey(): string
    {
        return $this->taxKey;
    }

    public function setTaxKey(string $taxKey): self
    {
        $this->initialized['taxKey'] = true;
        $this->taxKey = $taxKey;

        return $this;
    }

    public function getTaxType(): string
    {
        return $this->taxType;
    }

    public function setTaxType(string $taxType): self
    {
        $this->initialized['taxType'] = true;
        $this->taxType = $taxType;

        return $this;
    }

    public function getTaxValue(): string
    {
        return $this->taxValue;
    }

    public function setTaxValue(string $taxValue): self
    {
        $this->initialized['taxValue'] = true;
        $this->taxValue = $taxValue;

        return $this;
    }
}
