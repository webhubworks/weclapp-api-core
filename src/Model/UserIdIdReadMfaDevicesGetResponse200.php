<?php

namespace Webhubworks\WeclappApiCore\Model;

class UserIdIdReadMfaDevicesGetResponse200 extends \ArrayObject
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
     * @var list<UserMfaDevice>|null
     */
    protected $result;
    /**
     * 
     *
     * @return list<UserMfaDevice>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<UserMfaDevice>|null $result
     *
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}