<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionPermission extends \ArrayObject
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
    protected $permissionType;

    /**
     * @var string
     */
    protected $userRoleId;

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

    public function getPermissionType(): string
    {
        return $this->permissionType;
    }

    public function setPermissionType(string $permissionType): self
    {
        $this->initialized['permissionType'] = true;
        $this->permissionType = $permissionType;

        return $this;
    }

    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }

    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;

        return $this;
    }
}
