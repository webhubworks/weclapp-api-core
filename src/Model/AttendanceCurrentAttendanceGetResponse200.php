<?php

namespace Webhubworks\WeclappApiCore\Model;

class AttendanceCurrentAttendanceGetResponse200 extends \ArrayObject
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
     * @var Attendance
     */
    protected $result;
    /**
     * 
     *
     * @return Attendance
     */
    public function getResult(): Attendance
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Attendance $result
     *
     * @return self
     */
    public function setResult(Attendance $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}