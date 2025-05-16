<?php

namespace Webhubworks\WeclappApiCore\Model;

class NotificationIdIdMarkReadPostResponse200 extends \ArrayObject
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
     * @var Notification
     */
    protected $result;
    /**
     * 
     *
     * @return Notification
     */
    public function getResult(): Notification
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Notification $result
     *
     * @return self
     */
    public function setResult(Notification $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}