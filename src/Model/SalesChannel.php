<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesChannel extends \ArrayObject
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
    protected $key;

    /**
     * @var string|null
     */
    protected $name;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

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
}
