<?php

namespace Webhubworks\WeclappApiCore\Model;

class CalendarEventGetResponse200 extends \ArrayObject
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
     * @var list<CalendarEvent>
     */
    protected $result;

    /**
     * @return list<CalendarEvent>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<CalendarEvent>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
