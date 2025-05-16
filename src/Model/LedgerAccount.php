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
    protected $accountNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $automatic;
    /**
     * 
     *
     * @var string|null
     */
    protected $balanceSheetItem;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentAccountId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $parentAccountNumber;
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
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string|null $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutomatic(): ?bool
    {
        return $this->automatic;
    }
    /**
     * 
     *
     * @param bool|null $automatic
     *
     * @return self
     */
    public function setAutomatic(?bool $automatic): self
    {
        $this->initialized['automatic'] = true;
        $this->automatic = $automatic;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBalanceSheetItem(): ?string
    {
        return $this->balanceSheetItem;
    }
    /**
     * 
     *
     * @param string|null $balanceSheetItem
     *
     * @return self
     */
    public function setBalanceSheetItem(?string $balanceSheetItem): self
    {
        $this->initialized['balanceSheetItem'] = true;
        $this->balanceSheetItem = $balanceSheetItem;
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
     * @return string|null
     */
    public function getParentAccountId(): ?string
    {
        return $this->parentAccountId;
    }
    /**
     * 
     *
     * @param string|null $parentAccountId
     *
     * @return self
     */
    public function setParentAccountId(?string $parentAccountId): self
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
     * @return string|null
     */
    public function getParentAccountNumber(): ?string
    {
        return $this->parentAccountNumber;
    }
    /**
     * 
     *
     * @param string|null $parentAccountNumber
     *
     * @deprecated
     *
     * @return self
     */
    public function setParentAccountNumber(?string $parentAccountNumber): self
    {
        $this->initialized['parentAccountNumber'] = true;
        $this->parentAccountNumber = $parentAccountNumber;
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