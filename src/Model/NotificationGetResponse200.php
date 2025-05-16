<?php

namespace Webhubworks\WeclappApiCore\Model;

class NotificationGetResponse200 extends \ArrayObject
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
     * @var list<Notification>
     */
    protected $result;

    /**
     * @return list<Notification>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Notification>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
