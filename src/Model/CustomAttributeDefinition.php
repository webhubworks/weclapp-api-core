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
     * @var string
     */
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var string
     */
    protected $attributeDescription;

    /**
     * @var string
     */
    protected $attributeEntityType;

    /**
     * @var string
     */
    protected $attributeKey;

    /**
     * @var list<CustomAttributeDefinitionTranslation>
     */
    protected $attributeLabels;

    /**
     * @var string
     */
    protected $attributeType;

    /**
     * @var CustomAttributeDefinitionConditions
     */
    protected $conditions;

    /**
     * @var bool
     */
    protected $defaultBooleanValue;

    /**
     * @var int
     */
    protected $defaultDateValue;

    /**
     * @var string
     */
    protected $defaultNumberValue;

    /**
     * @var string
     */
    protected $defaultStringValue;

    /**
     * @var list<string>
     */
    protected $entities;

    /**
     * @var string
     */
    protected $groupName;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var list<string>
     */
    protected $legacyEntities;

    /**
     * @var bool
     */
    protected $mandatory;

    /**
     * @var list<CustomAttributeDefinitionPermission>
     */
    protected $permissions;

    /**
     * @var list<string>
     */
    protected $publicPageTypes;

    /**
     * @var bool
     */
    protected $readOnly;

    /**
     * @var list<CustomAttributeDefinitionListValue>
     */
    protected $selectableValues;

    /**
     * @var bool
     */
    protected $showAttributeEntityType;

    /**
     * @var bool
     */
    protected $showInOverview;

    /**
     * @var bool
     */
    protected $showOnCreationDialog;

    /**
     * @var bool
     */
    protected $systemCustomAttribute;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    public function getAttributeDescription(): string
    {
        return $this->attributeDescription;
    }

    public function setAttributeDescription(string $attributeDescription): self
    {
        $this->initialized['attributeDescription'] = true;
        $this->attributeDescription = $attributeDescription;

        return $this;
    }

    public function getAttributeEntityType(): string
    {
        return $this->attributeEntityType;
    }

    public function setAttributeEntityType(string $attributeEntityType): self
    {
        $this->initialized['attributeEntityType'] = true;
        $this->attributeEntityType = $attributeEntityType;

        return $this;
    }

    public function getAttributeKey(): string
    {
        return $this->attributeKey;
    }

    public function setAttributeKey(string $attributeKey): self
    {
        $this->initialized['attributeKey'] = true;
        $this->attributeKey = $attributeKey;

        return $this;
    }

    /**
     * @return list<CustomAttributeDefinitionTranslation>
     */
    public function getAttributeLabels(): array
    {
        return $this->attributeLabels;
    }

    /**
     * @param  list<CustomAttributeDefinitionTranslation>  $attributeLabels
     */
    public function setAttributeLabels(array $attributeLabels): self
    {
        $this->initialized['attributeLabels'] = true;
        $this->attributeLabels = $attributeLabels;

        return $this;
    }

    public function getAttributeType(): string
    {
        return $this->attributeType;
    }

    public function setAttributeType(string $attributeType): self
    {
        $this->initialized['attributeType'] = true;
        $this->attributeType = $attributeType;

        return $this;
    }

    public function getConditions(): CustomAttributeDefinitionConditions
    {
        return $this->conditions;
    }

    public function setConditions(CustomAttributeDefinitionConditions $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }

    public function getDefaultBooleanValue(): bool
    {
        return $this->defaultBooleanValue;
    }

    public function setDefaultBooleanValue(bool $defaultBooleanValue): self
    {
        $this->initialized['defaultBooleanValue'] = true;
        $this->defaultBooleanValue = $defaultBooleanValue;

        return $this;
    }

    public function getDefaultDateValue(): int
    {
        return $this->defaultDateValue;
    }

    public function setDefaultDateValue(int $defaultDateValue): self
    {
        $this->initialized['defaultDateValue'] = true;
        $this->defaultDateValue = $defaultDateValue;

        return $this;
    }

    public function getDefaultNumberValue(): string
    {
        return $this->defaultNumberValue;
    }

    public function setDefaultNumberValue(string $defaultNumberValue): self
    {
        $this->initialized['defaultNumberValue'] = true;
        $this->defaultNumberValue = $defaultNumberValue;

        return $this;
    }

    public function getDefaultStringValue(): string
    {
        return $this->defaultStringValue;
    }

    public function setDefaultStringValue(string $defaultStringValue): self
    {
        $this->initialized['defaultStringValue'] = true;
        $this->defaultStringValue = $defaultStringValue;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @param  list<string>  $entities
     */
    public function setEntities(array $entities): self
    {
        $this->initialized['entities'] = true;
        $this->entities = $entities;

        return $this;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getLegacyEntities(): array
    {
        return $this->legacyEntities;
    }

    /**
     * @param  list<string>  $legacyEntities
     */
    public function setLegacyEntities(array $legacyEntities): self
    {
        $this->initialized['legacyEntities'] = true;
        $this->legacyEntities = $legacyEntities;

        return $this;
    }

    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    public function setMandatory(bool $mandatory): self
    {
        $this->initialized['mandatory'] = true;
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * @return list<CustomAttributeDefinitionPermission>
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param  list<CustomAttributeDefinitionPermission>  $permissions
     */
    public function setPermissions(array $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getPublicPageTypes(): array
    {
        return $this->publicPageTypes;
    }

    /**
     * @param  list<string>  $publicPageTypes
     */
    public function setPublicPageTypes(array $publicPageTypes): self
    {
        $this->initialized['publicPageTypes'] = true;
        $this->publicPageTypes = $publicPageTypes;

        return $this;
    }

    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }

    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return list<CustomAttributeDefinitionListValue>
     */
    public function getSelectableValues(): array
    {
        return $this->selectableValues;
    }

    /**
     * @param  list<CustomAttributeDefinitionListValue>  $selectableValues
     */
    public function setSelectableValues(array $selectableValues): self
    {
        $this->initialized['selectableValues'] = true;
        $this->selectableValues = $selectableValues;

        return $this;
    }

    public function getShowAttributeEntityType(): bool
    {
        return $this->showAttributeEntityType;
    }

    public function setShowAttributeEntityType(bool $showAttributeEntityType): self
    {
        $this->initialized['showAttributeEntityType'] = true;
        $this->showAttributeEntityType = $showAttributeEntityType;

        return $this;
    }

    public function getShowInOverview(): bool
    {
        return $this->showInOverview;
    }

    public function setShowInOverview(bool $showInOverview): self
    {
        $this->initialized['showInOverview'] = true;
        $this->showInOverview = $showInOverview;

        return $this;
    }

    public function getShowOnCreationDialog(): bool
    {
        return $this->showOnCreationDialog;
    }

    public function setShowOnCreationDialog(bool $showOnCreationDialog): self
    {
        $this->initialized['showOnCreationDialog'] = true;
        $this->showOnCreationDialog = $showOnCreationDialog;

        return $this;
    }

    public function getSystemCustomAttribute(): bool
    {
        return $this->systemCustomAttribute;
    }

    public function setSystemCustomAttribute(bool $systemCustomAttribute): self
    {
        $this->initialized['systemCustomAttribute'] = true;
        $this->systemCustomAttribute = $systemCustomAttribute;

        return $this;
    }
}
