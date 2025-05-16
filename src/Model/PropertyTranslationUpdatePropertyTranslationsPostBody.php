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
     * 
     *
     * @var string
     */
    protected $entityId;
    /**
     * 
     *
     * @var string
     */
    protected $entityName;
    /**
     * 
     *
     * @var list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>
     */
    protected $propertyTranslations;
    /**
     * 
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string $entityName
     *
     * @return self
     */
    public function setEntityName(string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem>
     */
    public function getPropertyTranslations(): array
    {
        return $this->propertyTranslations;
    }
    /**
     * 
     *
     * @param list<PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem> $propertyTranslations
     *
     * @return self
     */
    public function setPropertyTranslations(array $propertyTranslations): self
    {
        $this->initialized['propertyTranslations'] = true;
        $this->propertyTranslations = $propertyTranslations;
        return $this;
    }
}