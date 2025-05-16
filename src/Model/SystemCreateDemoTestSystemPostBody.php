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
     * @var bool
     */
    protected $allUsers;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string
     */
    protected $preset;
    /**
     * 
     *
     * @return bool
     */
    public function getAllUsers(): bool
    {
        return $this->allUsers;
    }
    /**
     * 
     *
     * @param bool $allUsers
     *
     * @return self
     */
    public function setAllUsers(bool $allUsers): self
    {
        $this->initialized['allUsers'] = true;
        $this->allUsers = $allUsers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreset(): string
    {
        return $this->preset;
    }
    /**
     * 
     *
     * @param string $preset
     *
     * @return self
     */
    public function setPreset(string $preset): self
    {
        $this->initialized['preset'] = true;
        $this->preset = $preset;
        return $this;
    }
}