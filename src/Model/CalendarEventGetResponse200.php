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
     * 
     *
     * @var list<CalendarEvent>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<CalendarEvent>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<CalendarEvent>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}