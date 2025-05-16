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
     * @var string|null
     */
    protected $entityId;

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>|null
     */
    protected $propertyTranslations;

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }

    /**
     * @return list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>|null
     */
    public function getPropertyTranslations(): ?array
    {
        return $this->propertyTranslations;
    }

    /**
     * @param  list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>|null  $propertyTranslations
     */
    public function setPropertyTranslations(?array $propertyTranslations): self
    {
        $this->initialized['propertyTranslations'] = true;
        $this->propertyTranslations = $propertyTranslations;

        return $this;
    }
}
