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
     * @var Party|null
     */
    protected $result;
    /**
     * 
     *
     * @return Party|null
     */
    public function getResult(): ?Party
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Party|null $result
     *
     * @return self
     */
    public function setResult(?Party $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}