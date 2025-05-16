<?php

namespace Webhubworks\WeclappApiCore\Model;

class LedgerAccount extends \ArrayObject
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
    protected $accountNumber;
    /**
     * 
     *
     * @var bool
     */
    protected $automatic;
    /**
     * 
     *
     * @var string
     */
    protected $balanceSheetItem;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $parentAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $parentAccountNumber;
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
     * @return bool
     */
    public function getAutomatic(): bool
    {
        return $this->automatic;
    }
    /**
     * 
     *
     * @param bool $automatic
     *
     * @return self
     */
    public function setAutomatic(bool $automatic): self
    {
        $this->initialized['automatic'] = true;
        $this->automatic = $automatic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBalanceSheetItem(): string
    {
        return $this->balanceSheetItem;
    }
    /**
     * 
     *
     * @param string $balanceSheetItem
     *
     * @return self
     */
    public function setBalanceSheetItem(string $balanceSheetItem): self
    {
        $this->initialized['balanceSheetItem'] = true;
        $this->balanceSheetItem = $balanceSheetItem;
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
     * @return string
     */
    public function getParentAccountId(): string
    {
        return $this->parentAccountId;
    }
    /**
     * 
     *
     * @param string $parentAccountId
     *
     * @return self
     */
    public function setParentAccountId(string $parentAccountId): self
    {
        $this->initialized['parentAccountId'] = true;
        $this->parentAccountId = $parentAccountId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getParentAccountNumber(): string
    {
        return $this->parentAccountNumber;
    }
    /**
     * 
     *
     * @param string $parentAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setParentAccountNumber(string $parentAccountNumber): self
    {
        $this->initialized['parentAccountNumber'] = true;
        $this->parentAccountNumber = $parentAccountNumber;
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