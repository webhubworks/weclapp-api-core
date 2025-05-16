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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var bool
     */
    protected $active;
    /**
     * 
     *
     * @var string
     */
    protected $attributeDescription;
    /**
     * 
     *
     * @var string
     */
    protected $attributeEntityType;
    /**
     * 
     *
     * @var string
     */
    protected $attributeKey;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionTranslation>
     */
    protected $attributeLabels;
    /**
     * 
     *
     * @var string
     */
    protected $attributeType;
    /**
     * 
     *
     * @var CustomAttributeDefinitionConditions
     */
    protected $conditions;
    /**
     * 
     *
     * @var bool
     */
    protected $defaultBooleanValue;
    /**
     * 
     *
     * @var int
     */
    protected $defaultDateValue;
    /**
     * 
     *
     * @var string
     */
    protected $defaultNumberValue;
    /**
     * 
     *
     * @var string
     */
    protected $defaultStringValue;
    /**
     * 
     *
     * @var list<string>
     */
    protected $entities;
    /**
     * 
     *
     * @var string
     */
    protected $groupName;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var list<string>
     */
    protected $legacyEntities;
    /**
     * 
     *
     * @var bool
     */
    protected $mandatory;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionPermission>
     */
    protected $permissions;
    /**
     * 
     *
     * @var list<string>
     */
    protected $publicPageTypes;
    /**
     * 
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * 
     *
     * @var list<CustomAttributeDefinitionListValue>
     */
    protected $selectableValues;
    /**
     * 
     *
     * @var bool
     */
    protected $showAttributeEntityType;
    /**
     * 
     *
     * @var bool
     */
    protected $showInOverview;
    /**
     * 
     *
     * @var bool
     */
    protected $showOnCreationDialog;
    /**
     * 
     *
     * @var bool
     */
    protected $systemCustomAttribute;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttributeDescription(): string
    {
        return $this->attributeDescription;
    }
    /**
     * 
     *
     * @param string $attributeDescription
     *
     * @return self
     */
    public function setAttributeDescription(string $attributeDescription): self
    {
        $this->initialized['attributeDescription'] = true;
        $this->attributeDescription = $attributeDescription;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttributeEntityType(): string
    {
        return $this->attributeEntityType;
    }
    /**
     * 
     *
     * @param string $attributeEntityType
     *
     * @return self
     */
    public function setAttributeEntityType(string $attributeEntityType): self
    {
        $this->initialized['attributeEntityType'] = true;
        $this->attributeEntityType = $attributeEntityType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttributeKey(): string
    {
        return $this->attributeKey;
    }
    /**
     * 
     *
     * @param string $attributeKey
     *
     * @return self
     */
    public function setAttributeKey(string $attributeKey): self
    {
        $this->initialized['attributeKey'] = true;
        $this->attributeKey = $attributeKey;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionTranslation>
     */
    public function getAttributeLabels(): array
    {
        return $this->attributeLabels;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionTranslation> $attributeLabels
     *
     * @return self
     */
    public function setAttributeLabels(array $attributeLabels): self
    {
        $this->initialized['attributeLabels'] = true;
        $this->attributeLabels = $attributeLabels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttributeType(): string
    {
        return $this->attributeType;
    }
    /**
     * 
     *
     * @param string $attributeType
     *
     * @return self
     */
    public function setAttributeType(string $attributeType): self
    {
        $this->initialized['attributeType'] = true;
        $this->attributeType = $attributeType;
        return $this;
    }
    /**
     * 
     *
     * @return CustomAttributeDefinitionConditions
     */
    public function getConditions(): CustomAttributeDefinitionConditions
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param CustomAttributeDefinitionConditions $conditions
     *
     * @return self
     */
    public function setConditions(CustomAttributeDefinitionConditions $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDefaultBooleanValue(): bool
    {
        return $this->defaultBooleanValue;
    }
    /**
     * 
     *
     * @param bool $defaultBooleanValue
     *
     * @return self
     */
    public function setDefaultBooleanValue(bool $defaultBooleanValue): self
    {
        $this->initialized['defaultBooleanValue'] = true;
        $this->defaultBooleanValue = $defaultBooleanValue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDefaultDateValue(): int
    {
        return $this->defaultDateValue;
    }
    /**
     * 
     *
     * @param int $defaultDateValue
     *
     * @return self
     */
    public function setDefaultDateValue(int $defaultDateValue): self
    {
        $this->initialized['defaultDateValue'] = true;
        $this->defaultDateValue = $defaultDateValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultNumberValue(): string
    {
        return $this->defaultNumberValue;
    }
    /**
     * 
     *
     * @param string $defaultNumberValue
     *
     * @return self
     */
    public function setDefaultNumberValue(string $defaultNumberValue): self
    {
        $this->initialized['defaultNumberValue'] = true;
        $this->defaultNumberValue = $defaultNumberValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultStringValue(): string
    {
        return $this->defaultStringValue;
    }
    /**
     * 
     *
     * @param string $defaultStringValue
     *
     * @return self
     */
    public function setDefaultStringValue(string $defaultStringValue): self
    {
        $this->initialized['defaultStringValue'] = true;
        $this->defaultStringValue = $defaultStringValue;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getEntities(): array
    {
        return $this->entities;
    }
    /**
     * 
     *
     * @param list<string> $entities
     *
     * @return self
     */
    public function setEntities(array $entities): self
    {
        $this->initialized['entities'] = true;
        $this->entities = $entities;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }
    /**
     * 
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getLegacyEntities(): array
    {
        return $this->legacyEntities;
    }
    /**
     * 
     *
     * @param list<string> $legacyEntities
     *
     * @return self
     */
    public function setLegacyEntities(array $legacyEntities): self
    {
        $this->initialized['legacyEntities'] = true;
        $this->legacyEntities = $legacyEntities;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMandatory(): bool
    {
        return $this->mandatory;
    }
    /**
     * 
     *
     * @param bool $mandatory
     *
     * @return self
     */
    public function setMandatory(bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionPermission>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionPermission> $permissions
     *
     * @return self
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getPublicPageTypes(): array
    {
        return $this->publicPageTypes;
    }
    /**
     * 
     *
     * @param list<string> $publicPageTypes
     *
     * @return self
     */
    public function setPublicPageTypes(array $publicPageTypes): self
    {
        $this->initialized['publicPageTypes'] = true;
        $this->publicPageTypes = $publicPageTypes;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }
    /**
     * 
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * 
     *
     * @return list<CustomAttributeDefinitionListValue>
     */
    public function getSelectableValues(): array
    {
        return $this->selectableValues;
    }
    /**
     * 
     *
     * @param list<CustomAttributeDefinitionListValue> $selectableValues
     *
     * @return self
     */
    public function setSelectableValues(array $selectableValues): self
    {
        $this->initialized['selectableValues'] = true;
        $this->selectableValues = $selectableValues;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShowAttributeEntityType(): bool
    {
        return $this->showAttributeEntityType;
    }
    /**
     * 
     *
     * @param bool $showAttributeEntityType
     *
     * @return self
     */
    public function setShowAttributeEntityType(bool $showAttributeEntityType): self
    {
        $this->initialized['showAttributeEntityType'] = true;
        $this->showAttributeEntityType = $showAttributeEntityType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShowInOverview(): bool
    {
        return $this->showInOverview;
    }
    /**
     * 
     *
     * @param bool $showInOverview
     *
     * @return self
     */
    public function setShowInOverview(bool $showInOverview): self
    {
        $this->initialized['showInOverview'] = true;
        $this->showInOverview = $showInOverview;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShowOnCreationDialog(): bool
    {
        return $this->showOnCreationDialog;
    }
    /**
     * 
     *
     * @param bool $showOnCreationDialog
     *
     * @return self
     */
    public function setShowOnCreationDialog(bool $showOnCreationDialog): self
    {
        $this->initialized['showOnCreationDialog'] = true;
        $this->showOnCreationDialog = $showOnCreationDialog;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSystemCustomAttribute(): bool
    {
        return $this->systemCustomAttribute;
    }
    /**
     * 
     *
     * @param bool $systemCustomAttribute
     *
     * @return self
     */
    public function setSystemCustomAttribute(bool $systemCustomAttribute): self
    {
        $this->initialized['systemCustomAttribute'] = true;
        $this->systemCustomAttribute = $systemCustomAttribute;
        return $this;
    }
}