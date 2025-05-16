<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyButNotContact extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var list<Address>
     */
    protected $addresses;

    /**
     * @var int
     */
    protected $birthDate;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $company2;

    /**
     * @var string
     */
    protected $deliveryAddressId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $fax;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $invoiceAddressId;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $mobilePhone1;

    /**
     * @var list<OnlineAccount>
     */
    protected $onlineAccounts;

    /**
     * @var string
     */
    protected $partyType;

    /**
     * @var string
     */
    protected $personCompany;

    /**
     * @var string
     */
    protected $personDepartmentId;

    /**
     * @var string
     */
    protected $personRoleId;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $primaryAddressId;

    /**
     * @var string
     */
    protected $salutation;

    /**
     * @var list<string>
     */
    protected $tags;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $titleId;

    /**
     * @var string
     */
    protected $website;

    /**
     * @var string
     */
    protected $commercialLanguageId;

    /**
     * @var list<Contact>
     */
    protected $contacts;

    /**
     * @var string
     */
    protected $currencyId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $currencyName;

    /**
     * @var string
     */
    protected $primaryContactId;

    /**
     * @var string
     */
    protected $sectorId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $sectorName;

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

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return list<Address>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param  list<Address>  $addresses
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;

        return $this;
    }

    public function getBirthDate(): int
    {
        return $this->birthDate;
    }

    public function setBirthDate(int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    public function getCompany2(): string
    {
        return $this->company2;
    }

    public function setCompany2(string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;

        return $this;
    }

    public function getDeliveryAddressId(): string
    {
        return $this->deliveryAddressId;
    }

    public function setDeliveryAddressId(string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getInvoiceAddressId(): string
    {
        return $this->invoiceAddressId;
    }

    public function setInvoiceAddressId(string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function setMiddleName(string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;

        return $this;
    }

    public function getMobilePhone1(): string
    {
        return $this->mobilePhone1;
    }

    public function setMobilePhone1(string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;

        return $this;
    }

    /**
     * @return list<OnlineAccount>
     */
    public function getOnlineAccounts(): array
    {
        return $this->onlineAccounts;
    }

    /**
     * @param  list<OnlineAccount>  $onlineAccounts
     */
    public function setOnlineAccounts(array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;

        return $this;
    }

    public function getPartyType(): string
    {
        return $this->partyType;
    }

    public function setPartyType(string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;

        return $this;
    }

    public function getPersonCompany(): string
    {
        return $this->personCompany;
    }

    public function setPersonCompany(string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;

        return $this;
    }

    public function getPersonDepartmentId(): string
    {
        return $this->personDepartmentId;
    }

    public function setPersonDepartmentId(string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;

        return $this;
    }

    public function getPersonRoleId(): string
    {
        return $this->personRoleId;
    }

    public function setPersonRoleId(string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;

        return $this;
    }

    public function getPrimaryAddressId(): string
    {
        return $this->primaryAddressId;
    }

    public function setPrimaryAddressId(string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;

        return $this;
    }

    public function getSalutation(): string
    {
        return $this->salutation;
    }

    public function setSalutation(string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param  list<string>  $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @deprecated
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getTitleId(): string
    {
        return $this->titleId;
    }

    public function setTitleId(string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;

        return $this;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;

        return $this;
    }

    public function getCommercialLanguageId(): string
    {
        return $this->commercialLanguageId;
    }

    public function setCommercialLanguageId(string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;

        return $this;
    }

    /**
     * @return list<Contact>
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @param  list<Contact>  $contacts
     */
    public function setContacts(array $contacts): self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;

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

    /**
     * @deprecated
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @deprecated
     */
    public function setCurrencyName(string $currencyName): self
    {
        $this->initialized['currencyName'] = true;
        $this->currencyName = $currencyName;

        return $this;
    }

    public function getPrimaryContactId(): string
    {
        return $this->primaryContactId;
    }

    public function setPrimaryContactId(string $primaryContactId): self
    {
        $this->initialized['primaryContactId'] = true;
        $this->primaryContactId = $primaryContactId;

        return $this;
    }

    public function getSectorId(): string
    {
        return $this->sectorId;
    }

    public function setSectorId(string $sectorId): self
    {
        $this->initialized['sectorId'] = true;
        $this->sectorId = $sectorId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSectorName(): string
    {
        return $this->sectorName;
    }

    /**
     * @deprecated
     */
    public function setSectorName(string $sectorName): self
    {
        $this->initialized['sectorName'] = true;
        $this->sectorName = $sectorName;

        return $this;
    }
}
