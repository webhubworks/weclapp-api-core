<?php

namespace Webhubworks\WeclappApiCore\Model;

class CalendarIdIdDeleteCalendarAndMoveEventsPostBody extends \ArrayObject
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
     * @var string|null
     */
    protected $replacementCalendarId;
    /**
     * 
     *
     * @return string|null
     */
    public function getReplacementCalendarId(): ?string
    {
        return $this->replacementCalendarId;
    }
    /**
     * 
     *
     * @param string|null $replacementCalendarId
     *
     * @return self
     */
    public function setReplacementCalendarId(?string $replacementCalendarId): self
    {
        $this->initialized['replacementCalendarId'] = true;
        $this->replacementCalendarId = $replacementCalendarId;
        return $this;
    }
}