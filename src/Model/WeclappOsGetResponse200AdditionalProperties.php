<?php

namespace Webhubworks\WeclappApiCore\Model;

class WeclappOsGetResponse200AdditionalProperties extends \ArrayObject
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
     * @var list<bool>|null
     */
    protected $online;
    /**
     * 
     *
     * @return list<bool>|null
     */
    public function getOnline(): ?array
    {
        return $this->online;
    }
    /**
     * 
     *
     * @param list<bool>|null $online
     *
     * @return self
     */
    public function setOnline(?array $online): self
    {
        $this->initialized['online'] = true;
        $this->online = $online;
        return $this;
    }
}