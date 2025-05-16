<?php

namespace Webhubworks\WeclappApiCore\Model;

class Duration extends \ArrayObject
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
     * @var int
     */
    protected $durationSeconds;
    /**
     * 
     *
     * @return int
     */
    public function getDurationSeconds(): int
    {
        return $this->durationSeconds;
    }
    /**
     * 
     *
     * @param int $durationSeconds
     *
     * @return self
     */
    public function setDurationSeconds(int $durationSeconds): self
    {
        $this->initialized['durationSeconds'] = true;
        $this->durationSeconds = $durationSeconds;
        return $this;
    }
}