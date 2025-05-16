<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArchivedEmailGetResponse200 extends \ArrayObject
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
     * @var list<ArchivedEmail>
     */
    protected $result;

    /**
     * @return list<ArchivedEmail>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<ArchivedEmail>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
