<?php

namespace Webhubworks\WeclappApiCore\Model;

class License extends \ArrayObject
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
     * @var string|null
     */
    protected $name;

    /**
     * @var list<string>|null
     */
    protected $permissions;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }

    /**
     * @param  list<string>|null  $permissions
     */
    public function setPermissions(?array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }
}
