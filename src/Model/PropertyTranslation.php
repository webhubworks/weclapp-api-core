<?php

namespace Webhubworks\WeclappApiCore\Model;

class PropertyTranslation extends \ArrayObject
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
     * @var string|null
     */
    protected $propertyName;

    /**
     * @var list<PropertyTranslationValue>|null
     */
    protected $values;

    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }

    public function setPropertyName(?string $propertyName): self
    {
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;

        return $this;
    }

    /**
     * @return list<PropertyTranslationValue>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * @param  list<PropertyTranslationValue>|null  $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
