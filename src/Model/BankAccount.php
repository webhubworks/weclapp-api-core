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
    protected $accountHolder;
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
    protected $accountNumber;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var bool|null
     */
    protected $autoSync;
    /**
     * 
     *
     * @var string|null
     */
    protected $automaticProcessing;
    /**
     * 
     *
     * @var string|null
     */
    protected $balance;
    /**
     * 
     *
     * @var string|null
     */
    protected $bankCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $connectionFailure;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditInstitute;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditInstituteCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditInstituteStreet;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditInstituteZip;
    /**
     * 
     *
     * @var string|null
     */
    protected $creditLine;
    /**
     * 
     *
     * @var string|null
     */
    protected $currencyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $differentSepaCreditorIdentifier;
    /**
     * 
     *
     * @var bool|null
     */
    protected $enabledForElectronicPaymentTransactions;
    /**
     * 
     *
     * @var string|null
     */
    protected $iban;
    /**
     * 
     *
     * @var string|null
     */
    protected $incidentalCostsOfMonetaryTrafficAccountId;
    /**
     * 
     *
     * @var string|null
     */
    protected $incidentalCostsOfMonetaryTrafficTaxId;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastDownload;
    /**
     * 
     *
     * @var bool|null
     */
    protected $primary;
    /**
     * 
     *
     * @var string|null
     */
    protected $qrIban;
    /**
     * 
     *
     * @var string|null
     */
    protected $qrIdentifier;
    /**
     * 
     *
     * @var string|null
     */
    protected $swiftBic;
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
    public function getAccountHolder(): ?string
    {
        return $this->accountHolder;
    }
    /**
     * 
     *
     * @param string|null $accountHolder
     *
     * @return self
     */
    public function setAccountHolder(?string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;
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
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutoSync(): ?bool
    {
        return $this->autoSync;
    }
    /**
     * 
     *
     * @param bool|null $autoSync
     *
     * @return self
     */
    public function setAutoSync(?bool $autoSync): self
    {
        $this->initialized['autoSync'] = true;
        $this->autoSync = $autoSync;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAutomaticProcessing(): ?string
    {
        return $this->automaticProcessing;
    }
    /**
     * 
     *
     * @param string|null $automaticProcessing
     *
     * @return self
     */
    public function setAutomaticProcessing(?string $automaticProcessing): self
    {
        $this->initialized['automaticProcessing'] = true;
        $this->automaticProcessing = $automaticProcessing;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBalance(): ?string
    {
        return $this->balance;
    }
    /**
     * 
     *
     * @param string|null $balance
     *
     * @return self
     */
    public function setBalance(?string $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }
    /**
     * 
     *
     * @param string|null $bankCode
     *
     * @return self
     */
    public function setBankCode(?string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConnectionFailure(): ?string
    {
        return $this->connectionFailure;
    }
    /**
     * 
     *
     * @param string|null $connectionFailure
     *
     * @return self
     */
    public function setConnectionFailure(?string $connectionFailure): self
    {
        $this->initialized['connectionFailure'] = true;
        $this->connectionFailure = $connectionFailure;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditInstitute(): ?string
    {
        return $this->creditInstitute;
    }
    /**
     * 
     *
     * @param string|null $creditInstitute
     *
     * @return self
     */
    public function setCreditInstitute(?string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditInstituteCity(): ?string
    {
        return $this->creditInstituteCity;
    }
    /**
     * 
     *
     * @param string|null $creditInstituteCity
     *
     * @return self
     */
    public function setCreditInstituteCity(?string $creditInstituteCity): self
    {
        $this->initialized['creditInstituteCity'] = true;
        $this->creditInstituteCity = $creditInstituteCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditInstituteStreet(): ?string
    {
        return $this->creditInstituteStreet;
    }
    /**
     * 
     *
     * @param string|null $creditInstituteStreet
     *
     * @return self
     */
    public function setCreditInstituteStreet(?string $creditInstituteStreet): self
    {
        $this->initialized['creditInstituteStreet'] = true;
        $this->creditInstituteStreet = $creditInstituteStreet;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditInstituteZip(): ?string
    {
        return $this->creditInstituteZip;
    }
    /**
     * 
     *
     * @param string|null $creditInstituteZip
     *
     * @return self
     */
    public function setCreditInstituteZip(?string $creditInstituteZip): self
    {
        $this->initialized['creditInstituteZip'] = true;
        $this->creditInstituteZip = $creditInstituteZip;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreditLine(): ?string
    {
        return $this->creditLine;
    }
    /**
     * 
     *
     * @param string|null $creditLine
     *
     * @return self
     */
    public function setCreditLine(?string $creditLine): self
    {
        $this->initialized['creditLine'] = true;
        $this->creditLine = $creditLine;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }
    /**
     * 
     *
     * @param string|null $currencyId
     *
     * @return self
     */
    public function setCurrencyId(?string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDifferentSepaCreditorIdentifier(): ?string
    {
        return $this->differentSepaCreditorIdentifier;
    }
    /**
     * 
     *
     * @param string|null $differentSepaCreditorIdentifier
     *
     * @return self
     */
    public function setDifferentSepaCreditorIdentifier(?string $differentSepaCreditorIdentifier): self
    {
        $this->initialized['differentSepaCreditorIdentifier'] = true;
        $this->differentSepaCreditorIdentifier = $differentSepaCreditorIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEnabledForElectronicPaymentTransactions(): ?bool
    {
        return $this->enabledForElectronicPaymentTransactions;
    }
    /**
     * 
     *
     * @param bool|null $enabledForElectronicPaymentTransactions
     *
     * @return self
     */
    public function setEnabledForElectronicPaymentTransactions(?bool $enabledForElectronicPaymentTransactions): self
    {
        $this->initialized['enabledForElectronicPaymentTransactions'] = true;
        $this->enabledForElectronicPaymentTransactions = $enabledForElectronicPaymentTransactions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * 
     *
     * @param string|null $iban
     *
     * @return self
     */
    public function setIban(?string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncidentalCostsOfMonetaryTrafficAccountId(): ?string
    {
        return $this->incidentalCostsOfMonetaryTrafficAccountId;
    }
    /**
     * 
     *
     * @param string|null $incidentalCostsOfMonetaryTrafficAccountId
     *
     * @return self
     */
    public function setIncidentalCostsOfMonetaryTrafficAccountId(?string $incidentalCostsOfMonetaryTrafficAccountId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficAccountId'] = true;
        $this->incidentalCostsOfMonetaryTrafficAccountId = $incidentalCostsOfMonetaryTrafficAccountId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIncidentalCostsOfMonetaryTrafficTaxId(): ?string
    {
        return $this->incidentalCostsOfMonetaryTrafficTaxId;
    }
    /**
     * 
     *
     * @param string|null $incidentalCostsOfMonetaryTrafficTaxId
     *
     * @return self
     */
    public function setIncidentalCostsOfMonetaryTrafficTaxId(?string $incidentalCostsOfMonetaryTrafficTaxId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficTaxId'] = true;
        $this->incidentalCostsOfMonetaryTrafficTaxId = $incidentalCostsOfMonetaryTrafficTaxId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastDownload(): ?int
    {
        return $this->lastDownload;
    }
    /**
     * 
     *
     * @param int|null $lastDownload
     *
     * @return self
     */
    public function setLastDownload(?int $lastDownload): self
    {
        $this->initialized['lastDownload'] = true;
        $this->lastDownload = $lastDownload;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }
    /**
     * 
     *
     * @param bool|null $primary
     *
     * @return self
     */
    public function setPrimary(?bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQrIban(): ?string
    {
        return $this->qrIban;
    }
    /**
     * 
     *
     * @param string|null $qrIban
     *
     * @return self
     */
    public function setQrIban(?string $qrIban): self
    {
        $this->initialized['qrIban'] = true;
        $this->qrIban = $qrIban;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQrIdentifier(): ?string
    {
        return $this->qrIdentifier;
    }
    /**
     * 
     *
     * @param string|null $qrIdentifier
     *
     * @return self
     */
    public function setQrIdentifier(?string $qrIdentifier): self
    {
        $this->initialized['qrIdentifier'] = true;
        $this->qrIdentifier = $qrIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSwiftBic(): ?string
    {
        return $this->swiftBic;
    }
    /**
     * 
     *
     * @param string|null $swiftBic
     *
     * @return self
     */
    public function setSwiftBic(?string $swiftBic): self
    {
        $this->initialized['swiftBic'] = true;
        $this->swiftBic = $swiftBic;
        return $this;
    }
}