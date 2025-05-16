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
     * 
     *
     * @var bool|null
     */
    protected $allUsers;
    /**
     * 
     *
     * @var string|null
     */
    protected $label;
    /**
     * 
     *
     * @var string|null
     */
    protected $preset;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllUsers(): ?bool
    {
        return $this->allUsers;
    }
    /**
     * 
     *
     * @param bool|null $allUsers
     *
     * @return self
     */
    public function setAllUsers(?bool $allUsers): self
    {
        $this->initialized['allUsers'] = true;
        $this->allUsers = $allUsers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPreset(): ?string
    {
        return $this->preset;
    }
    /**
     * 
     *
     * @param string|null $preset
     *
     * @return self
     */
    public function setPreset(?string $preset): self
    {
        $this->initialized['preset'] = true;
        $this->preset = $preset;
        return $this;
    }
}