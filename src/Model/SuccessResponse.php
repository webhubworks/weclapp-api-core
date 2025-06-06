<?php

namespace Webhubworks\WeclappApiCore\Model;

class SuccessResponse extends \ArrayObject
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
    protected $success;

    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(?bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;

        return $this;
    }
}
