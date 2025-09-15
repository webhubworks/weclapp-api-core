<?php

namespace Webhubworks\WeclappApiCore\Model;

class Webhook extends \ArrayObject
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
    protected $atCreate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $atDelete;
    /**
     * 
     *
     * @var bool|null
     */
    protected $atUpdate;
    /**
     * 
     *
     * @var int|null
     */
    protected $deactivatedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * 
     *
     * @var string|null
     */
    protected $errorMessage;
    /**
     * 
     *
     * @var string|null
     */
    protected $requestMethod;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
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
    public function getAtCreate(): ?bool
    {
        return $this->atCreate;
    }
    /**
     * 
     *
     * @param bool|null $atCreate
     *
     * @return self
     */
    public function setAtCreate(?bool $atCreate): self
    {
        $this->initialized['atCreate'] = true;
        $this->atCreate = $atCreate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAtDelete(): ?bool
    {
        return $this->atDelete;
    }
    /**
     * 
     *
     * @param bool|null $atDelete
     *
     * @return self
     */
    public function setAtDelete(?bool $atDelete): self
    {
        $this->initialized['atDelete'] = true;
        $this->atDelete = $atDelete;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAtUpdate(): ?bool
    {
        return $this->atUpdate;
    }
    /**
     * 
     *
     * @param bool|null $atUpdate
     *
     * @return self
     */
    public function setAtUpdate(?bool $atUpdate): self
    {
        $this->initialized['atUpdate'] = true;
        $this->atUpdate = $atUpdate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDeactivatedDate(): ?int
    {
        return $this->deactivatedDate;
    }
    /**
     * 
     *
     * @param int|null $deactivatedDate
     *
     * @return self
     */
    public function setDeactivatedDate(?int $deactivatedDate): self
    {
        $this->initialized['deactivatedDate'] = true;
        $this->deactivatedDate = $deactivatedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityName(): ?string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * 
     *
     * @param string|null $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRequestMethod(): ?string
    {
        return $this->requestMethod;
    }
    /**
     * 
     *
     * @param string|null $requestMethod
     *
     * @return self
     */
    public function setRequestMethod(?string $requestMethod): self
    {
        $this->initialized['requestMethod'] = true;
        $this->requestMethod = $requestMethod;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}