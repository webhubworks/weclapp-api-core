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
     * 
     *
     * @var Party
     */
    protected $result;
    /**
     * 
     *
     * @return Party
     */
    public function getResult(): Party
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Party $result
     *
     * @return self
     */
    public function setResult(Party $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}