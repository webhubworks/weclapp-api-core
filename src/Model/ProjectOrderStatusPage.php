<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProjectOrderStatusPage extends \ArrayObject
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
    protected $commentsVisible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $createComments;
    /**
     * 
     *
     * @var bool|null
     */
    protected $displayAllTeamMembers;
    /**
     * 
     *
     * @var bool|null
     */
    protected $documentsVisible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $mainTasksVisible;
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
    protected $plannedWorkVisibility;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectOrderId;
    /**
     * 
     *
     * @var string|null
     */
    protected $projectStatusPageUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $realizedWorkVisibility;
    /**
     * 
     *
     * @var bool|null
     */
    protected $subTasksVisible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ticketsVisible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $uploadDocument;
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
    public function getCommentsVisible(): ?bool
    {
        return $this->commentsVisible;
    }
    /**
     * 
     *
     * @param bool|null $commentsVisible
     *
     * @return self
     */
    public function setCommentsVisible(?bool $commentsVisible): self
    {
        $this->initialized['commentsVisible'] = true;
        $this->commentsVisible = $commentsVisible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCreateComments(): ?bool
    {
        return $this->createComments;
    }
    /**
     * 
     *
     * @param bool|null $createComments
     *
     * @return self
     */
    public function setCreateComments(?bool $createComments): self
    {
        $this->initialized['createComments'] = true;
        $this->createComments = $createComments;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDisplayAllTeamMembers(): ?bool
    {
        return $this->displayAllTeamMembers;
    }
    /**
     * 
     *
     * @param bool|null $displayAllTeamMembers
     *
     * @return self
     */
    public function setDisplayAllTeamMembers(?bool $displayAllTeamMembers): self
    {
        $this->initialized['displayAllTeamMembers'] = true;
        $this->displayAllTeamMembers = $displayAllTeamMembers;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDocumentsVisible(): ?bool
    {
        return $this->documentsVisible;
    }
    /**
     * 
     *
     * @param bool|null $documentsVisible
     *
     * @return self
     */
    public function setDocumentsVisible(?bool $documentsVisible): self
    {
        $this->initialized['documentsVisible'] = true;
        $this->documentsVisible = $documentsVisible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMainTasksVisible(): ?bool
    {
        return $this->mainTasksVisible;
    }
    /**
     * 
     *
     * @param bool|null $mainTasksVisible
     *
     * @return self
     */
    public function setMainTasksVisible(?bool $mainTasksVisible): self
    {
        $this->initialized['mainTasksVisible'] = true;
        $this->mainTasksVisible = $mainTasksVisible;
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
    public function getPlannedWorkVisibility(): ?string
    {
        return $this->plannedWorkVisibility;
    }
    /**
     * 
     *
     * @param string|null $plannedWorkVisibility
     *
     * @return self
     */
    public function setPlannedWorkVisibility(?string $plannedWorkVisibility): self
    {
        $this->initialized['plannedWorkVisibility'] = true;
        $this->plannedWorkVisibility = $plannedWorkVisibility;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectOrderId(): ?string
    {
        return $this->projectOrderId;
    }
    /**
     * 
     *
     * @param string|null $projectOrderId
     *
     * @return self
     */
    public function setProjectOrderId(?string $projectOrderId): self
    {
        $this->initialized['projectOrderId'] = true;
        $this->projectOrderId = $projectOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectStatusPageUrl(): ?string
    {
        return $this->projectStatusPageUrl;
    }
    /**
     * 
     *
     * @param string|null $projectStatusPageUrl
     *
     * @return self
     */
    public function setProjectStatusPageUrl(?string $projectStatusPageUrl): self
    {
        $this->initialized['projectStatusPageUrl'] = true;
        $this->projectStatusPageUrl = $projectStatusPageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRealizedWorkVisibility(): ?string
    {
        return $this->realizedWorkVisibility;
    }
    /**
     * 
     *
     * @param string|null $realizedWorkVisibility
     *
     * @return self
     */
    public function setRealizedWorkVisibility(?string $realizedWorkVisibility): self
    {
        $this->initialized['realizedWorkVisibility'] = true;
        $this->realizedWorkVisibility = $realizedWorkVisibility;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSubTasksVisible(): ?bool
    {
        return $this->subTasksVisible;
    }
    /**
     * 
     *
     * @param bool|null $subTasksVisible
     *
     * @return self
     */
    public function setSubTasksVisible(?bool $subTasksVisible): self
    {
        $this->initialized['subTasksVisible'] = true;
        $this->subTasksVisible = $subTasksVisible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTicketsVisible(): ?bool
    {
        return $this->ticketsVisible;
    }
    /**
     * 
     *
     * @param bool|null $ticketsVisible
     *
     * @return self
     */
    public function setTicketsVisible(?bool $ticketsVisible): self
    {
        $this->initialized['ticketsVisible'] = true;
        $this->ticketsVisible = $ticketsVisible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUploadDocument(): ?bool
    {
        return $this->uploadDocument;
    }
    /**
     * 
     *
     * @param bool|null $uploadDocument
     *
     * @return self
     */
    public function setUploadDocument(?bool $uploadDocument): self
    {
        $this->initialized['uploadDocument'] = true;
        $this->uploadDocument = $uploadDocument;
        return $this;
    }
}