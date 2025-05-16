<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionGetResponse200 extends \ArrayObject
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
     * @var list<CustomAttributeDefinition>|null
     */
    protected $result;

    /**
     * @return list<CustomAttributeDefinition>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<CustomAttributeDefinition>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
