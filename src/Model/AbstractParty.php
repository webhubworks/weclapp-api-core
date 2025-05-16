<?php

namespace Webhubworks\WeclappApiCore\Model;

class AbstractParty extends \ArrayObject
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
     * @var list<CustomAttribute>
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var list<Address>
     */
    protected $addresses;
    /**
     * 
     *
     * @var int
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string
     */
    protected $company;
    /**
     * 
     *
     * @var string
     */
    protected $company2;
    /**
     * 
     *
     * @var string
     */
    protected $deliveryAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $fax;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $middleName;
    /**
     * 
     *
     * @var string
     */
    protected $mobilePhone1;
    /**
     * 
     *
     * @var list<OnlineAccount>
     */
    protected $onlineAccounts;
    /**
     * 
     *
     * @var string
     */
    protected $partyType;
    /**
     * 
     *
     * @var string
     */
    protected $personCompany;
    /**
     * 
     *
     * @var string
     */
    protected $personDepartmentId;
    /**
     * 
     *
     * @var string
     */
    protected $personRoleId;
    /**
     * 
     *
     * @var string
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $primaryAddressId;
    /**
     * 
     *
     * @var string
     */
    protected $salutation;
    /**
     * 
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $titleId;
    /**
     * 
     *
     * @var string
     */
    protected $website;
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
     * @return list<CustomAttribute>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<CustomAttribute> $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return list<Address>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param list<Address> $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBirthDate(): int
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param int $birthDate
     *
     * @return self
     */
    public function setBirthDate(int $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompany2(): string
    {
        return $this->company2;
    }
    /**
     * 
     *
     * @param string $company2
     *
     * @return self
     */
    public function setCompany2(string $company2): self
    {
        $this->initialized['company2'] = true;
        $this->company2 = $company2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeliveryAddressId(): string
    {
        return $this->deliveryAddressId;
    }
    /**
     * 
     *
     * @param string $deliveryAddressId
     *
     * @return self
     */
    public function setDeliveryAddressId(string $deliveryAddressId): self
    {
        $this->initialized['deliveryAddressId'] = true;
        $this->deliveryAddressId = $deliveryAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax): self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceAddressId(): string
    {
        return $this->invoiceAddressId;
    }
    /**
     * 
     *
     * @param string $invoiceAddressId
     *
     * @return self
     */
    public function setInvoiceAddressId(string $invoiceAddressId): self
    {
        $this->initialized['invoiceAddressId'] = true;
        $this->invoiceAddressId = $invoiceAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }
    /**
     * 
     *
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName(string $middleName): self
    {
        $this->initialized['middleName'] = true;
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilePhone1(): string
    {
        return $this->mobilePhone1;
    }
    /**
     * 
     *
     * @param string $mobilePhone1
     *
     * @return self
     */
    public function setMobilePhone1(string $mobilePhone1): self
    {
        $this->initialized['mobilePhone1'] = true;
        $this->mobilePhone1 = $mobilePhone1;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlineAccount>
     */
    public function getOnlineAccounts(): array
    {
        return $this->onlineAccounts;
    }
    /**
     * 
     *
     * @param list<OnlineAccount> $onlineAccounts
     *
     * @return self
     */
    public function setOnlineAccounts(array $onlineAccounts): self
    {
        $this->initialized['onlineAccounts'] = true;
        $this->onlineAccounts = $onlineAccounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPartyType(): string
    {
        return $this->partyType;
    }
    /**
     * 
     *
     * @param string $partyType
     *
     * @return self
     */
    public function setPartyType(string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonCompany(): string
    {
        return $this->personCompany;
    }
    /**
     * 
     *
     * @param string $personCompany
     *
     * @return self
     */
    public function setPersonCompany(string $personCompany): self
    {
        $this->initialized['personCompany'] = true;
        $this->personCompany = $personCompany;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonDepartmentId(): string
    {
        return $this->personDepartmentId;
    }
    /**
     * 
     *
     * @param string $personDepartmentId
     *
     * @return self
     */
    public function setPersonDepartmentId(string $personDepartmentId): self
    {
        $this->initialized['personDepartmentId'] = true;
        $this->personDepartmentId = $personDepartmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPersonRoleId(): string
    {
        return $this->personRoleId;
    }
    /**
     * 
     *
     * @param string $personRoleId
     *
     * @return self
     */
    public function setPersonRoleId(string $personRoleId): self
    {
        $this->initialized['personRoleId'] = true;
        $this->personRoleId = $personRoleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrimaryAddressId(): string
    {
        return $this->primaryAddressId;
    }
    /**
     * 
     *
     * @param string $primaryAddressId
     *
     * @return self
     */
    public function setPrimaryAddressId(string $primaryAddressId): self
    {
        $this->initialized['primaryAddressId'] = true;
        $this->primaryAddressId = $primaryAddressId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }
    /**
     * 
     *
     * @param string $salutation
     *
     * @return self
     */
    public function setSalutation(string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @deprecated
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitleId(): string
    {
        return $this->titleId;
    }
    /**
     * 
     *
     * @param string $titleId
     *
     * @return self
     */
    public function setTitleId(string $titleId): self
    {
        $this->initialized['titleId'] = true;
        $this->titleId = $titleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite(string $website): self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
}