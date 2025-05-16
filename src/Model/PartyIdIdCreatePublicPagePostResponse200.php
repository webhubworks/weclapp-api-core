<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyIdIdCreatePublicPagePostResponse200 extends \ArrayObject
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
     * @var Party
     */
    protected $result;

    public function getResult(): Party
    {
        return $this->result;
    }

    public function setResult(Party $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
