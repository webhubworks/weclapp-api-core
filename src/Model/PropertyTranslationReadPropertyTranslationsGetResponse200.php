<?php

namespace Webhubworks\WeclappApiCore\Model;

class PropertyTranslationReadPropertyTranslationsGetResponse200 extends \ArrayObject
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
     * @var list<PropertyTranslation>|null
     */
    protected $result;

    /**
     * @return list<PropertyTranslation>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<PropertyTranslation>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
