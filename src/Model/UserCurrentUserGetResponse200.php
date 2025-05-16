<?php

namespace Webhubworks\WeclappApiCore\Model;

class UserCurrentUserGetResponse200 extends \ArrayObject
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
     * @var User|null
     */
    protected $result;
    /**
     * 
     *
     * @return User|null
     */
    public function getResult(): ?User
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param User|null $result
     *
     * @return self
     */
    public function setResult(?User $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}