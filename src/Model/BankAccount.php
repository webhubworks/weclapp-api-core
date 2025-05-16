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
    protected $accountHolder;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $autoSync;

    /**
     * @var string
     */
    protected $automaticProcessing;

    /**
     * @var string
     */
    protected $balance;

    /**
     * @var string
     */
    protected $bankCode;

    /**
     * @var string
     */
    protected $connectionFailure;

    /**
     * @var string
     */
    protected $creditInstitute;

    /**
     * @var string
     */
    protected $creditInstituteCity;

    /**
     * @var string
     */
    protected $creditInstituteStreet;

    /**
     * @var string
     */
    protected $creditInstituteZip;

    /**
     * @var string
     */
    protected $creditLine;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @var string
     */
    protected $differentSepaCreditorIdentifier;

    /**
     * @var bool
     */
    protected $enabledForElectronicPaymentTransactions;

    /**
     * @var string
     */
    protected $iban;

    /**
     * @var string
     */
    protected $incidentalCostsOfMonetaryTrafficAccountId;

    /**
     * @var string
     */
    protected $incidentalCostsOfMonetaryTrafficTaxId;

    /**
     * @var int
     */
    protected $lastDownload;

    /**
     * @var bool
     */
    protected $primary;

    /**
     * @var string
     */
    protected $qrIban;

    /**
     * @var string
     */
    protected $qrIdentifier;

    /**
     * @var string
     */
    protected $swiftBic;

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

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function setAccountHolder(string $accountHolder): self
    {
        $this->initialized['accountHolder'] = true;
        $this->accountHolder = $accountHolder;

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

    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getAutoSync(): bool
    {
        return $this->autoSync;
    }

    public function setAutoSync(bool $autoSync): self
    {
        $this->initialized['autoSync'] = true;
        $this->autoSync = $autoSync;

        return $this;
    }

    public function getAutomaticProcessing(): string
    {
        return $this->automaticProcessing;
    }

    public function setAutomaticProcessing(string $automaticProcessing): self
    {
        $this->initialized['automaticProcessing'] = true;
        $this->automaticProcessing = $automaticProcessing;

        return $this;
    }

    public function getBalance(): string
    {
        return $this->balance;
    }

    public function setBalance(string $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }

    public function getBankCode(): string
    {
        return $this->bankCode;
    }

    public function setBankCode(string $bankCode): self
    {
        $this->initialized['bankCode'] = true;
        $this->bankCode = $bankCode;

        return $this;
    }

    public function getConnectionFailure(): string
    {
        return $this->connectionFailure;
    }

    public function setConnectionFailure(string $connectionFailure): self
    {
        $this->initialized['connectionFailure'] = true;
        $this->connectionFailure = $connectionFailure;

        return $this;
    }

    public function getCreditInstitute(): string
    {
        return $this->creditInstitute;
    }

    public function setCreditInstitute(string $creditInstitute): self
    {
        $this->initialized['creditInstitute'] = true;
        $this->creditInstitute = $creditInstitute;

        return $this;
    }

    public function getCreditInstituteCity(): string
    {
        return $this->creditInstituteCity;
    }

    public function setCreditInstituteCity(string $creditInstituteCity): self
    {
        $this->initialized['creditInstituteCity'] = true;
        $this->creditInstituteCity = $creditInstituteCity;

        return $this;
    }

    public function getCreditInstituteStreet(): string
    {
        return $this->creditInstituteStreet;
    }

    public function setCreditInstituteStreet(string $creditInstituteStreet): self
    {
        $this->initialized['creditInstituteStreet'] = true;
        $this->creditInstituteStreet = $creditInstituteStreet;

        return $this;
    }

    public function getCreditInstituteZip(): string
    {
        return $this->creditInstituteZip;
    }

    public function setCreditInstituteZip(string $creditInstituteZip): self
    {
        $this->initialized['creditInstituteZip'] = true;
        $this->creditInstituteZip = $creditInstituteZip;

        return $this;
    }

    public function getCreditLine(): string
    {
        return $this->creditLine;
    }

    public function setCreditLine(string $creditLine): self
    {
        $this->initialized['creditLine'] = true;
        $this->creditLine = $creditLine;

        return $this;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): self
    {
        $this->initialized['currencyId'] = true;
        $this->currencyId = $currencyId;

        return $this;
    }

    public function getDifferentSepaCreditorIdentifier(): string
    {
        return $this->differentSepaCreditorIdentifier;
    }

    public function setDifferentSepaCreditorIdentifier(string $differentSepaCreditorIdentifier): self
    {
        $this->initialized['differentSepaCreditorIdentifier'] = true;
        $this->differentSepaCreditorIdentifier = $differentSepaCreditorIdentifier;

        return $this;
    }

    public function getEnabledForElectronicPaymentTransactions(): bool
    {
        return $this->enabledForElectronicPaymentTransactions;
    }

    public function setEnabledForElectronicPaymentTransactions(bool $enabledForElectronicPaymentTransactions): self
    {
        $this->initialized['enabledForElectronicPaymentTransactions'] = true;
        $this->enabledForElectronicPaymentTransactions = $enabledForElectronicPaymentTransactions;

        return $this;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;

        return $this;
    }

    public function getIncidentalCostsOfMonetaryTrafficAccountId(): string
    {
        return $this->incidentalCostsOfMonetaryTrafficAccountId;
    }

    public function setIncidentalCostsOfMonetaryTrafficAccountId(string $incidentalCostsOfMonetaryTrafficAccountId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficAccountId'] = true;
        $this->incidentalCostsOfMonetaryTrafficAccountId = $incidentalCostsOfMonetaryTrafficAccountId;

        return $this;
    }

    public function getIncidentalCostsOfMonetaryTrafficTaxId(): string
    {
        return $this->incidentalCostsOfMonetaryTrafficTaxId;
    }

    public function setIncidentalCostsOfMonetaryTrafficTaxId(string $incidentalCostsOfMonetaryTrafficTaxId): self
    {
        $this->initialized['incidentalCostsOfMonetaryTrafficTaxId'] = true;
        $this->incidentalCostsOfMonetaryTrafficTaxId = $incidentalCostsOfMonetaryTrafficTaxId;

        return $this;
    }

    public function getLastDownload(): int
    {
        return $this->lastDownload;
    }

    public function setLastDownload(int $lastDownload): self
    {
        $this->initialized['lastDownload'] = true;
        $this->lastDownload = $lastDownload;

        return $this;
    }

    public function getPrimary(): bool
    {
        return $this->primary;
    }

    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;

        return $this;
    }

    public function getQrIban(): string
    {
        return $this->qrIban;
    }

    public function setQrIban(string $qrIban): self
    {
        $this->initialized['qrIban'] = true;
        $this->qrIban = $qrIban;

        return $this;
    }

    public function getQrIdentifier(): string
    {
        return $this->qrIdentifier;
    }

    public function setQrIdentifier(string $qrIdentifier): self
    {
        $this->initialized['qrIdentifier'] = true;
        $this->qrIdentifier = $qrIdentifier;

        return $this;
    }

    public function getSwiftBic(): string
    {
        return $this->swiftBic;
    }

    public function setSwiftBic(string $swiftBic): self
    {
        $this->initialized['swiftBic'] = true;
        $this->swiftBic = $swiftBic;

        return $this;
    }
}
