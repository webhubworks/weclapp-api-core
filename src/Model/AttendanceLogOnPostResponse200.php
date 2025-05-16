<?php

namespace Webhubworks\WeclappApiCore\Model;

class AttendanceLogOnPostResponse200 extends \ArrayObject
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
     * @var Attendance|null
     */
    protected $result;

    public function getResult(): ?Attendance
    {
        return $this->result;
    }

    public function setResult(?Attendance $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
