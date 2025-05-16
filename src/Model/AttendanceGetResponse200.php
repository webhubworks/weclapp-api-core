<?php

namespace Webhubworks\WeclappApiCore\Model;

class AttendanceGetResponse200 extends \ArrayObject
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
     * @var list<Attendance>
     */
    protected $result;

    /**
     * @return list<Attendance>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Attendance>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
