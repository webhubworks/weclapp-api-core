<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskTemplate extends \ArrayObject
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
     * @var list<mixed>|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @var string|null
     */
    protected $articleId;
    /**
     * 
     *
     * @var list<TaskTemplateAssignee>|null
     */
    protected $assignees;
    /**
     * 
     *
     * @var string|null
     */
    protected $creatorUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var list<EntityReference>|null
     */
    protected $entityReferences;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentTaskTemplateId;
    /**
     * 
     *
     * @var int|null
     */
    protected $plannedEffort;
    /**
     * 
     *
     * @var int|null
     */
    protected $positionNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskPriority;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $taskTopics;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $taskTypes;
    /**
     * 
     *
     * @var string|null
     */
    protected $taskVisibilityType;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $watchers;
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
     * @return list<mixed>|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * 
     *
     * @param list<mixed>|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getArticleId(): ?string
    {
        return $this->articleId;
    }
    /**
     * 
     *
     * @param string|null $articleId
     *
     * @return self
     */
    public function setArticleId(?string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;
        return $this;
    }
    /**
     * 
     *
     * @return list<TaskTemplateAssignee>|null
     */
    public function getAssignees(): ?array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param list<TaskTemplateAssignee>|null $assignees
     *
     * @return self
     */
    public function setAssignees(?array $assignees): self
    {
        $this->initialized['assignees'] = true;
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatorUserId(): ?string
    {
        return $this->creatorUserId;
    }
    /**
     * 
     *
     * @param string|null $creatorUserId
     *
     * @return self
     */
    public function setCreatorUserId(?string $creatorUserId): self
    {
        $this->initialized['creatorUserId'] = true;
        $this->creatorUserId = $creatorUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return list<EntityReference>|null
     */
    public function getEntityReferences(): ?array
    {
        return $this->entityReferences;
    }
    /**
     * 
     *
     * @param list<EntityReference>|null $entityReferences
     *
     * @return self
     */
    public function setEntityReferences(?array $entityReferences): self
    {
        $this->initialized['entityReferences'] = true;
        $this->entityReferences = $entityReferences;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentTaskTemplateId(): ?string
    {
        return $this->parentTaskTemplateId;
    }
    /**
     * 
     *
     * @param string|null $parentTaskTemplateId
     *
     * @return self
     */
    public function setParentTaskTemplateId(?string $parentTaskTemplateId): self
    {
        $this->initialized['parentTaskTemplateId'] = true;
        $this->parentTaskTemplateId = $parentTaskTemplateId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlannedEffort(): ?int
    {
        return $this->plannedEffort;
    }
    /**
     * 
     *
     * @param int|null $plannedEffort
     *
     * @return self
     */
    public function setPlannedEffort(?int $plannedEffort): self
    {
        $this->initialized['plannedEffort'] = true;
        $this->plannedEffort = $plannedEffort;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPositionNumber(): ?int
    {
        return $this->positionNumber;
    }
    /**
     * 
     *
     * @param int|null $positionNumber
     *
     * @return self
     */
    public function setPositionNumber(?int $positionNumber): self
    {
        $this->initialized['positionNumber'] = true;
        $this->positionNumber = $positionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskPriority(): ?string
    {
        return $this->taskPriority;
    }
    /**
     * 
     *
     * @param string|null $taskPriority
     *
     * @return self
     */
    public function setTaskPriority(?string $taskPriority): self
    {
        $this->initialized['taskPriority'] = true;
        $this->taskPriority = $taskPriority;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTaskTopics(): ?array
    {
        return $this->taskTopics;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $taskTopics
     *
     * @return self
     */
    public function setTaskTopics(?array $taskTopics): self
    {
        $this->initialized['taskTopics'] = true;
        $this->taskTopics = $taskTopics;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getTaskTypes(): ?array
    {
        return $this->taskTypes;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $taskTypes
     *
     * @return self
     */
    public function setTaskTypes(?array $taskTypes): self
    {
        $this->initialized['taskTypes'] = true;
        $this->taskTypes = $taskTypes;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTaskVisibilityType(): ?string
    {
        return $this->taskVisibilityType;
    }
    /**
     * 
     *
     * @param string|null $taskVisibilityType
     *
     * @return self
     */
    public function setTaskVisibilityType(?string $taskVisibilityType): self
    {
        $this->initialized['taskVisibilityType'] = true;
        $this->taskVisibilityType = $taskVisibilityType;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getWatchers(): ?array
    {
        return $this->watchers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $watchers
     *
     * @return self
     */
    public function setWatchers(?array $watchers): self
    {
        $this->initialized['watchers'] = true;
        $this->watchers = $watchers;
        return $this;
    }
}