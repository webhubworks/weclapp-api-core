<?php

namespace Webhubworks\WeclappApiCore\Model;

class ContactGetResponse200 extends \ArrayObject
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
     * @var list<Contact>
     */
    protected $result;

    /**
     * @return list<Contact>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Contact>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
