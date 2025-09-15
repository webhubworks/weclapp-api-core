<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinition extends \ArrayObject
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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeDescription;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeEntityType;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeKey;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionTranslation>|null
     */
    protected $attributeLabels;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeType;
    /**
     * 
     *
     * @var CustomAttributeDefinitionConditions|null
     */
    protected $conditions;
    /**
     * 
     *
     * @var bool|null
     */
    protected $defaultBooleanValue;
    /**
     * 
     *
     * @var int|null
     */
    protected $defaultDateValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultNumberValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultStringValue;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $entities;
    /**
     * 
     *
     * @var string|null
     */
    protected $groupName;
    /**
     * 
     *
     * @var string|null
     */
    protected $label;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $legacyEntities;
    /**
     * 
     *
     * @var bool|null
     */
    protected $mandatory;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionPermission>|null
     */
    protected $permissions;
    /**
     * 
     *
     * @var list<string>|null
     */
    protected $publicPageTypes;
    /**
     * 
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionListValue>|null
     */
    protected $selectableValues;
    /**
     * 
     *
     * @var bool|null
     */
    protected $showAttributeEntityType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $showInOverview;
    /**
     * 
     *
     * @var bool|null
     */
    protected $showOnCreationDialog;
    /**
     * 
     *
     * @var bool|null
     */
    protected $systemCustomAttribute;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeDescription(): ?string
    {
        return $this->attributeDescription;
    }
    /**
     * 
     *
     * @param string|null $attributeDescription
     *
     * @return self
     */
    public function setAttributeDescription(?string $attributeDescription): self
    {
        $this->initialized['attributeDescription'] = true;
        $this->attributeDescription = $attributeDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeEntityType(): ?string
    {
        return $this->attributeEntityType;
    }
    /**
     * 
     *
     * @param string|null $attributeEntityType
     *
     * @return self
     */
    public function setAttributeEntityType(?string $attributeEntityType): self
    {
        $this->initialized['attributeEntityType'] = true;
        $this->attributeEntityType = $attributeEntityType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeKey(): ?string
    {
        return $this->attributeKey;
    }
    /**
     * 
     *
     * @param string|null $attributeKey
     *
     * @return self
     */
    public function setAttributeKey(?string $attributeKey): self
    {
        $this->initialized['attributeKey'] = true;
        $this->attributeKey = $attributeKey;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionTranslation>|null
     */
    public function getAttributeLabels(): ?array
    {
        return $this->attributeLabels;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionTranslation>|null $attributeLabels
     *
     * @return self
     */
    public function setAttributeLabels(?array $attributeLabels): self
    {
        $this->initialized['attributeLabels'] = true;
        $this->attributeLabels = $attributeLabels;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeType(): ?string
    {
        return $this->attributeType;
    }
    /**
     * 
     *
     * @param string|null $attributeType
     *
     * @return self
     */
    public function setAttributeType(?string $attributeType): self
    {
        $this->initialized['attributeType'] = true;
        $this->attributeType = $attributeType;
        return $this;
    }
    /**
     * 
     *
     * @return CustomAttributeDefinitionConditions|null
     */
    public function getConditions(): ?CustomAttributeDefinitionConditions
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param CustomAttributeDefinitionConditions|null $conditions
     *
     * @return self
     */
    public function setConditions(?CustomAttributeDefinitionConditions $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDefaultBooleanValue(): ?bool
    {
        return $this->defaultBooleanValue;
    }
    /**
     * 
     *
     * @param bool|null $defaultBooleanValue
     *
     * @return self
     */
    public function setDefaultBooleanValue(?bool $defaultBooleanValue): self
    {
        $this->initialized['defaultBooleanValue'] = true;
        $this->defaultBooleanValue = $defaultBooleanValue;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefaultDateValue(): ?int
    {
        return $this->defaultDateValue;
    }
    /**
     * 
     *
     * @param int|null $defaultDateValue
     *
     * @return self
     */
    public function setDefaultDateValue(?int $defaultDateValue): self
    {
        $this->initialized['defaultDateValue'] = true;
        $this->defaultDateValue = $defaultDateValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultNumberValue(): ?string
    {
        return $this->defaultNumberValue;
    }
    /**
     * 
     *
     * @param string|null $defaultNumberValue
     *
     * @return self
     */
    public function setDefaultNumberValue(?string $defaultNumberValue): self
    {
        $this->initialized['defaultNumberValue'] = true;
        $this->defaultNumberValue = $defaultNumberValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultStringValue(): ?string
    {
        return $this->defaultStringValue;
    }
    /**
     * 
     *
     * @param string|null $defaultStringValue
     *
     * @return self
     */
    public function setDefaultStringValue(?string $defaultStringValue): self
    {
        $this->initialized['defaultStringValue'] = true;
        $this->defaultStringValue = $defaultStringValue;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }
    /**
     * 
     *
     * @param list<string>|null $entities
     *
     * @return self
     */
    public function setEntities(?array $entities): self
    {
        $this->initialized['entities'] = true;
        $this->entities = $entities;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }
    /**
     * 
     *
     * @param string|null $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getLegacyEntities(): ?array
    {
        return $this->legacyEntities;
    }
    /**
     * 
     *
     * @param list<string>|null $legacyEntities
     *
     * @return self
     */
    public function setLegacyEntities(?array $legacyEntities): self
    {
        $this->initialized['legacyEntities'] = true;
        $this->legacyEntities = $legacyEntities;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMandatory(): ?bool
    {
        return $this->mandatory;
    }
    /**
     * 
     *
     * @param bool|null $mandatory
     *
     * @return self
     */
    public function setMandatory(?bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionPermission>|null
     */
    public function getPermissions(): ?array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionPermission>|null $permissions
     *
     * @return self
     */
    public function setPermissions(?array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getPublicPageTypes(): ?array
    {
        return $this->publicPageTypes;
    }
    /**
     * 
     *
     * @param list<string>|null $publicPageTypes
     *
     * @return self
     */
    public function setPublicPageTypes(?array $publicPageTypes): self
    {
        $this->initialized['publicPageTypes'] = true;
        $this->publicPageTypes = $publicPageTypes;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionListValue>|null
     */
    public function getSelectableValues(): ?array
    {
        return $this->selectableValues;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionListValue>|null $selectableValues
     *
     * @return self
     */
    public function setSelectableValues(?array $selectableValues): self
    {
        $this->initialized['selectableValues'] = true;
        $this->selectableValues = $selectableValues;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShowAttributeEntityType(): ?bool
    {
        return $this->showAttributeEntityType;
    }
    /**
     * 
     *
     * @param bool|null $showAttributeEntityType
     *
     * @return self
     */
    public function setShowAttributeEntityType(?bool $showAttributeEntityType): self
    {
        $this->initialized['showAttributeEntityType'] = true;
        $this->showAttributeEntityType = $showAttributeEntityType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShowInOverview(): ?bool
    {
        return $this->showInOverview;
    }
    /**
     * 
     *
     * @param bool|null $showInOverview
     *
     * @return self
     */
    public function setShowInOverview(?bool $showInOverview): self
    {
        $this->initialized['showInOverview'] = true;
        $this->showInOverview = $showInOverview;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShowOnCreationDialog(): ?bool
    {
        return $this->showOnCreationDialog;
    }
    /**
     * 
     *
     * @param bool|null $showOnCreationDialog
     *
     * @return self
     */
    public function setShowOnCreationDialog(?bool $showOnCreationDialog): self
    {
        $this->initialized['showOnCreationDialog'] = true;
        $this->showOnCreationDialog = $showOnCreationDialog;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSystemCustomAttribute(): ?bool
    {
        return $this->systemCustomAttribute;
    }
    /**
     * 
     *
     * @param bool|null $systemCustomAttribute
     *
     * @return self
     */
    public function setSystemCustomAttribute(?bool $systemCustomAttribute): self
    {
        $this->initialized['systemCustomAttribute'] = true;
        $this->systemCustomAttribute = $systemCustomAttribute;
        return $this;
    }
}