<?php

namespace Webhubworks\WeclappApiCore\Model;

class SystemPermissionsGetResponse200 extends \ArrayObject
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
     * @var list<string>
     */
    protected $result;

    /**
     * @return list<string>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<string>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
