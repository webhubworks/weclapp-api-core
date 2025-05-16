<?php

namespace Webhubworks\WeclappApiCore\Model;

class User extends \ArrayObject
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
     * @var int
     */
    protected $birthDate;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $faxNumber;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $imageId;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var list<string>
     */
    protected $licenses;

    /**
     * @var string
     */
    protected $mobilePhoneNumber;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var list<OnlyId>
     */
    protected $userRoles;

    /**
     * @var string
     */
    protected $username;

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

    public function getFaxNumber(): string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(string $faxNumber): self
    {
        $this->initialized['faxNumber'] = true;
        $this->faxNumber = $faxNumber;

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

    public function getImageId(): string
    {
        return $this->imageId;
    }

    public function setImageId(string $imageId): self
    {
        $this->initialized['imageId'] = true;
        $this->imageId = $imageId;

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

    /**
     * @return list<string>
     */
    public function getLicenses(): array
    {
        return $this->licenses;
    }

    /**
     * @param  list<string>  $licenses
     */
    public function setLicenses(array $licenses): self
    {
        $this->initialized['licenses'] = true;
        $this->licenses = $licenses;

        return $this;
    }

    public function getMobilePhoneNumber(): string
    {
        return $this->mobilePhoneNumber;
    }

    public function setMobilePhoneNumber(string $mobilePhoneNumber): self
    {
        $this->initialized['mobilePhoneNumber'] = true;
        $this->mobilePhoneNumber = $mobilePhoneNumber;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * @return list<OnlyId>
     */
    public function getUserRoles(): array
    {
        return $this->userRoles;
    }

    /**
     * @param  list<OnlyId>  $userRoles
     */
    public function setUserRoles(array $userRoles): self
    {
        $this->initialized['userRoles'] = true;
        $this->userRoles = $userRoles;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }
}
