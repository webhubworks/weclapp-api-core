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
     * @var bool
     */
    protected $allPermissionsEnabled;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $includedUserRoles;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<string>
     */
    protected $permissions;
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
     * @return bool
     */
    public function getAllPermissionsEnabled(): bool
    {
        return $this->allPermissionsEnabled;
    }
    /**
     * 
     *
     * @param bool $allPermissionsEnabled
     *
     * @return self
     */
    public function setAllPermissionsEnabled(bool $allPermissionsEnabled): self
    {
        $this->initialized['allPermissionsEnabled'] = true;
        $this->allPermissionsEnabled = $allPermissionsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getIncludedUserRoles(): array
    {
        return $this->includedUserRoles;
    }
    /**
     * 
     *
     * @param list<OnlyId> $includedUserRoles
     *
     * @return self
     */
    public function setIncludedUserRoles(array $includedUserRoles): self
    {
        $this->initialized['includedUserRoles'] = true;
        $this->includedUserRoles = $includedUserRoles;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param list<string> $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}