<?php

namespace Webhubworks\WeclappApiCore\Model;

class UserRole extends \ArrayObject
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
     * @var bool|null
     */
    protected $allPermissionsEnabled;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $includedUserRoles;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $permissions;
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
     * @return bool|null
     */
    public function getAllPermissionsEnabled(): ?bool
    {
        return $this->allPermissionsEnabled;
    }
    /**
     * 
     *
     * @param bool|null $allPermissionsEnabled
     *
     * @return self
     */
    public function setAllPermissionsEnabled(?bool $allPermissionsEnabled): self
    {
        $this->initialized['allPermissionsEnabled'] = true;
        $this->allPermissionsEnabled = $allPermissionsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getIncludedUserRoles(): ?array
    {
        return $this->includedUserRoles;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $includedUserRoles
     *
     * @return self
     */
    public function setIncludedUserRoles(?array $includedUserRoles): self
    {
        $this->initialized['includedUserRoles'] = true;
        $this->includedUserRoles = $includedUserRoles;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param list<string>|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}