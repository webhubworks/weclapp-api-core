<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionReadOrderGetResponse200 extends \ArrayObject
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
     * @var list<CustomAttributeDefinitionOrder>
     */
    protected $result;

    /**
     * @return list<CustomAttributeDefinitionOrder>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<CustomAttributeDefinitionOrder>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
