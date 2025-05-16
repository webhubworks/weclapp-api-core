<?php

namespace Webhubworks\WeclappApiCore\Model;

class SystemCreateDemoTestSystemPostBody extends \ArrayObject
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
     * @var bool|null
     */
    protected $allUsers;

    /**
     * @var string|null
     */
    protected $label;

    /**
     * @var string|null
     */
    protected $preset;

    public function getAllUsers(): ?bool
    {
        return $this->allUsers;
    }

    public function setAllUsers(?bool $allUsers): self
    {
        $this->initialized['allUsers'] = true;
        $this->allUsers = $allUsers;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getPreset(): ?string
    {
        return $this->preset;
    }

    public function setPreset(?string $preset): self
    {
        $this->initialized['preset'] = true;
        $this->preset = $preset;

        return $this;
    }
}
