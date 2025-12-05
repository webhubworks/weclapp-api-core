<?php

namespace Webhubworks\WeclappApiCore\Model;

class CashAccountSheet extends \ArrayObject
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
    protected $cashAccountId;
    /**
     * 
     *
     * @var list<CashAccountCashCountItem>|null
     */
    protected $cashCountItems;
    /**
     * 
     *
     * @var bool|null
     */
    protected $closed;
    /**
     * 
     *
     * @var string|null
     */
    protected $closingBalance;
    /**
     * 
     *
     * @var string|null
     */
    protected $closingExplanation;
    /**
     * 
     *
     * @var string|null
     */
    protected $openingBalance;
    /**
     * 
     *
     * @var int|null
     */
    protected $openingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $sheetNumber;
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
    public function getCashAccountId(): ?string
    {
        return $this->cashAccountId;
    }
    /**
     * 
     *
     * @param string|null $cashAccountId
     *
     * @return self
     */
    public function setCashAccountId(?string $cashAccountId): self
    {
        $this->initialized['cashAccountId'] = true;
        $this->cashAccountId = $cashAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return list<CashAccountCashCountItem>|null
     */
    public function getCashCountItems(): ?array
    {
        return $this->cashCountItems;
    }
    /**
     * 
     *
     * @param list<CashAccountCashCountItem>|null $cashCountItems
     *
     * @return self
     */
    public function setCashCountItems(?array $cashCountItems): self
    {
        $this->initialized['cashCountItems'] = true;
        $this->cashCountItems = $cashCountItems;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getClosed(): ?bool
    {
        return $this->closed;
    }
    /**
     * 
     *
     * @param bool|null $closed
     *
     * @return self
     */
    public function setClosed(?bool $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClosingBalance(): ?string
    {
        return $this->closingBalance;
    }
    /**
     * 
     *
     * @param string|null $closingBalance
     *
     * @return self
     */
    public function setClosingBalance(?string $closingBalance): self
    {
        $this->initialized['closingBalance'] = true;
        $this->closingBalance = $closingBalance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getClosingExplanation(): ?string
    {
        return $this->closingExplanation;
    }
    /**
     * 
     *
     * @param string|null $closingExplanation
     *
     * @return self
     */
    public function setClosingExplanation(?string $closingExplanation): self
    {
        $this->initialized['closingExplanation'] = true;
        $this->closingExplanation = $closingExplanation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOpeningBalance(): ?string
    {
        return $this->openingBalance;
    }
    /**
     * 
     *
     * @param string|null $openingBalance
     *
     * @return self
     */
    public function setOpeningBalance(?string $openingBalance): self
    {
        $this->initialized['openingBalance'] = true;
        $this->openingBalance = $openingBalance;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getOpeningDate(): ?int
    {
        return $this->openingDate;
    }
    /**
     * 
     *
     * @param int|null $openingDate
     *
     * @return self
     */
    public function setOpeningDate(?int $openingDate): self
    {
        $this->initialized['openingDate'] = true;
        $this->openingDate = $openingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSheetNumber(): ?int
    {
        return $this->sheetNumber;
    }
    /**
     * 
     *
     * @param int|null $sheetNumber
     *
     * @return self
     */
    public function setSheetNumber(?int $sheetNumber): self
    {
        $this->initialized['sheetNumber'] = true;
        $this->sheetNumber = $sheetNumber;
        return $this;
    }
}