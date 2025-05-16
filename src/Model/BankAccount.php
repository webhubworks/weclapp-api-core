<?php

namespace Webhubworks\WeclappApiCore\Model;

class BankAccount extends \ArrayObject
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
    protected $accountHolder;
    /**
     * 
     *
     * @var string
     */
    protected $accountId;
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
    protected $active;
    /**
     * 
     *
     * @var bool
     */
    protected $autoSync;
    /**
     * 
     *
     * @var string
     */
    protected $automaticProcessing;
    /**
     * 
     *
     * @var string
     */
    protected $balance;
    /**
     * 
     *
     * @var string
     */
    protected $bankCode;
    /**
     * 
     *
     * @var string
     */
    protected $connectionFailure;
    /**
     * 
     *
     * @var string
     */
    protected $creditInstitute;
    /**
     * 
     *
     * @var string
     */
    protected $creditInstituteCity;
    /**
     * 
     *
     * @var string
     */
    protected $creditInstituteStreet;
    /**
     * 
     *
     * @var string
     */
    protected $creditInstituteZip;
    /**
     * 
     *
     * @var string
     */
    protected $creditLine;
    /**
     * 
     *
     * @var string
     */
    protected $currencyId;
    /**
     * 
     *
     * @var string
     */
    protected $differentSepaCreditorIdentifier;
    /**
     * 
     *
     * @var bool
     */
    protected $enabledForElectronicPaymentTransactions;
    /**
     * 
     *
     * @var string
     */
    protected $iban;
    /**
     * 
     *
     * @var string
     */
    protected $incidentalCostsOfMonetaryTrafficAccountId;
    /**
     * 
     *
     * @var string
     */
    protected $incidentalCostsOfMonetaryTrafficTaxId;
    /**
     * 
     *
     * @var int
     */
    protected $lastDownload;
    /**
     * 
     *
     * @var bool
     */
    protected $primary;
    /**
     * 
     *
     * @var string
     */
    protected $qrIban;
    /**
     * 
     *
     * @var string
     */
    protected $qrIdentifier;
    /**
     * 
     *
     * @var string
     */
    protected $swiftBic;
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
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }
    /**
     * 
     *
     * @param string $accountHolder
     *
     * @return self
     */
    public function setAccountHolder(string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;
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
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutoSync(): bool
    {
        return $this->autoSync;
    }
    /**
     * 
     *
     * @param bool $autoSync
     *
     * @return self
     */
    public function setAutoSync(bool $autoSync): self
    {
        $this->initialized['autoSync'] = true;
        $this->autoSync = $autoSync;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutomaticProcessing(): string
    {
        return $this->automaticProcessing;
    }
    /**
     * 
     *
     * @param string $automaticProcessing
     *
     * @return self
     */
    public function setAutomaticProcessing(string $automaticProcessing): self
    {
        $this->initialized['automaticProcessing'] = true;
        $this->automaticProcessing = $automaticProcessing;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }
    /**
     * 
     *
     * @param string $balance
     *
     * @return self
     */
    public function setBalance(string $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBankCode(): string
    {
        return $this->bankCode;
    }
    /**
     * 
     *
     * @param string $bankCode
     *
     * @return self
     */
    public function setBankCode(string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectionFailure(): string
    {
        return $this->connectionFailure;
    }
    /**
     * 
     *
     * @param string $connectionFailure
     *
     * @return self
     */
    public function setConnectionFailure(string $connectionFailure): self
    {
        $this->initialized['connectionFailure'] = true;
        $this->connectionFailure = $connectionFailure;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditInstitute(): string
    {
        return $this->creditInstitute;
    }
    /**
     * 
     *
     * @param string $creditInstitute
     *
     * @return self
     */
    public function setCreditInstitute(string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditInstituteCity(): string
    {
        return $this->creditInstituteCity;
    }
    /**
     * 
     *
     * @param string $creditInstituteCity
     *
     * @return self
     */
    public function setCreditInstituteCity(string $creditInstituteCity): self
    {
        $this->initialized['creditInstituteCity'] = true;
        $this->creditInstituteCity = $creditInstituteCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditInstituteStreet(): string
    {
        return $this->creditInstituteStreet;
    }
    /**
     * 
     *
     * @param string $creditInstituteStreet
     *
     * @return self
     */
    public function setCreditInstituteStreet(string $creditInstituteStreet): self
    {
        $this->initialized['creditInstituteStreet'] = true;
        $this->creditInstituteStreet = $creditInstituteStreet;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditInstituteZip(): string
    {
        return $this->creditInstituteZip;
    }
    /**
     * 
     *
     * @param string $creditInstituteZip
     *
     * @return self
     */
    public function setCreditInstituteZip(string $creditInstituteZip): self
    {
        $this->initialized['creditInstituteZip'] = true;
        $this->creditInstituteZip = $creditInstituteZip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreditLine(): string
    {
        return $this->creditLine;
    }
    /**
     * 
     *
     * @param string $creditLine
     *
     * @return self
     */
    public function setCreditLine(string $creditLine): self
    {
        $this->initialized['creditLine'] = true;
        $this->creditLine = $creditLine;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string $currencyId
     *
     * @return self
     */
    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDifferentSepaCreditorIdentifier(): string
    {
        return $this->differentSepaCreditorIdentifier;
    }
    /**
     * 
     *
     * @param string $differentSepaCreditorIdentifier
     *
     * @return self
     */
    public function setDifferentSepaCreditorIdentifier(string $differentSepaCreditorIdentifier): self
    {
        $this->initialized['differentSepaCreditorIdentifier'] = true;
        $this->differentSepaCreditorIdentifier = $differentSepaCreditorIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabledForElectronicPaymentTransactions(): bool
    {
        return $this->enabledForElectronicPaymentTransactions;
    }
    /**
     * 
     *
     * @param bool $enabledForElectronicPaymentTransactions
     *
     * @return self
     */
    public function setEnabledForElectronicPaymentTransactions(bool $enabledForElectronicPaymentTransactions): self
    {
        $this->initialized['enabledForElectronicPaymentTransactions'] = true;
        $this->enabledForElectronicPaymentTransactions = $enabledForElectronicPaymentTransactions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    /**
     * 
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIncidentalCostsOfMonetaryTrafficAccountId(): string
    {
        return $this->incidentalCostsOfMonetaryTrafficAccountId;
    }
    /**
     * 
     *
     * @param string $incidentalCostsOfMonetaryTrafficAccountId
     *
     * @return self
     */
    public function setIncidentalCostsOfMonetaryTrafficAccountId(string $incidentalCostsOfMonetaryTrafficAccountId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficAccountId'] = true;
        $this->incidentalCostsOfMonetaryTrafficAccountId = $incidentalCostsOfMonetaryTrafficAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIncidentalCostsOfMonetaryTrafficTaxId(): string
    {
        return $this->incidentalCostsOfMonetaryTrafficTaxId;
    }
    /**
     * 
     *
     * @param string $incidentalCostsOfMonetaryTrafficTaxId
     *
     * @return self
     */
    public function setIncidentalCostsOfMonetaryTrafficTaxId(string $incidentalCostsOfMonetaryTrafficTaxId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficTaxId'] = true;
        $this->incidentalCostsOfMonetaryTrafficTaxId = $incidentalCostsOfMonetaryTrafficTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastDownload(): int
    {
        return $this->lastDownload;
    }
    /**
     * 
     *
     * @param int $lastDownload
     *
     * @return self
     */
    public function setLastDownload(int $lastDownload): self
    {
        $this->initialized['lastDownload'] = true;
        $this->lastDownload = $lastDownload;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQrIban(): string
    {
        return $this->qrIban;
    }
    /**
     * 
     *
     * @param string $qrIban
     *
     * @return self
     */
    public function setQrIban(string $qrIban): self
    {
        $this->initialized['qrIban'] = true;
        $this->qrIban = $qrIban;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQrIdentifier(): string
    {
        return $this->qrIdentifier;
    }
    /**
     * 
     *
     * @param string $qrIdentifier
     *
     * @return self
     */
    public function setQrIdentifier(string $qrIdentifier): self
    {
        $this->initialized['qrIdentifier'] = true;
        $this->qrIdentifier = $qrIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSwiftBic(): string
    {
        return $this->swiftBic;
    }
    /**
     * 
     *
     * @param string $swiftBic
     *
     * @return self
     */
    public function setSwiftBic(string $swiftBic): self
    {
        $this->initialized['swiftBic'] = true;
        $this->swiftBic = $swiftBic;
        return $this;
    }
}