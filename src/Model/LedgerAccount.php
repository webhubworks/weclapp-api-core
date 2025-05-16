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
    protected $accountNumber;

    /**
     * @var bool|null
     */
    protected $automatic;

    /**
     * @var string|null
     */
    protected $balanceSheetItem;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $parentAccountId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $parentAccountNumber;

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

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getAutomatic(): ?bool
    {
        return $this->automatic;
    }

    public function setAutomatic(?bool $automatic): self
    {
        $this->initialized['automatic'] = true;
        $this->automatic = $automatic;

        return $this;
    }

    public function getBalanceSheetItem(): ?string
    {
        return $this->balanceSheetItem;
    }

    public function setBalanceSheetItem(?string $balanceSheetItem): self
    {
        $this->initialized['balanceSheetItem'] = true;
        $this->balanceSheetItem = $balanceSheetItem;

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

    public function getParentAccountId(): ?string
    {
        return $this->parentAccountId;
    }

    public function setParentAccountId(?string $parentAccountId): self
    {
        $this->initialized['parentAccountId'] = true;
        $this->parentAccountId = $parentAccountId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getParentAccountNumber(): ?string
    {
        return $this->parentAccountNumber;
    }

    /**
     * @deprecated
     */
    public function setParentAccountNumber(?string $parentAccountNumber): self
    {
        $this->initialized['parentAccountNumber'] = true;
        $this->parentAccountNumber = $parentAccountNumber;

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
