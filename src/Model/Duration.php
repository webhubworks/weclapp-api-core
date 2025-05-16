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
     * @var int
     */
    protected $durationSeconds;

    public function getDurationSeconds(): int
    {
        return $this->durationSeconds;
    }

    public function setDurationSeconds(int $durationSeconds): self
    {
        $this->initialized['durationSeconds'] = true;
        $this->durationSeconds = $durationSeconds;

        return $this;
    }
}
