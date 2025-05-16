<?php

namespace Webhubworks\WeclappApiCore\Model;

class JobAbortGetResponse200 extends \ArrayObject
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
     * @var JobResult
     */
    protected $result;

    public function getResult(): JobResult
    {
        return $this->result;
    }

    public function setResult(JobResult $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
