<?php

namespace Webhubworks\WeclappApiCore\Model;

class PropertyTranslationUpdatePropertyTranslationsPostBody extends \ArrayObject
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
     * @var string
     */
    protected $entityId;

    /**
     * @var string
     */
    protected $entityName;

    /**
     * @var list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>
     */
    protected $propertyTranslations;

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): string
    {
        return $this->entityName;
    }

    public function setEntityName(string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }

    /**
     * @return list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>
     */
    public function getPropertyTranslations(): array
    {
        return $this->propertyTranslations;
    }

    /**
     * @param  list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>  $propertyTranslations
     */
    public function setPropertyTranslations(array $propertyTranslations): self
    {
        $this->initialized['propertyTranslations'] = true;
        $this->propertyTranslations = $propertyTranslations;

        return $this;
    }
}
