<?php

namespace Webhubworks\WeclappApiCore\Model;

class UserIdIdInvitePostResponse200 extends \ArrayObject
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
     * @var User
     */
    protected $result;
    /**
     * 
     *
     * @return User
     */
    public function getResult(): User
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param User $result
     *
     * @return self
     */
    public function setResult(User $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}