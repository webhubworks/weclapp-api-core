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
     * @var string
     */
    protected $replacementCalendarId;

    public function getReplacementCalendarId(): string
    {
        return $this->replacementCalendarId;
    }

    public function setReplacementCalendarId(string $replacementCalendarId): self
    {
        $this->initialized['replacementCalendarId'] = true;
        $this->replacementCalendarId = $replacementCalendarId;

        return $this;
    }
}
