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
    protected $atCreate;
    /**
     * 
     *
     * @var bool
     */
    protected $atDelete;
    /**
     * 
     *
     * @var bool
     */
    protected $atUpdate;
    /**
     * 
     *
     * @var int
     */
    protected $deactivatedDate;
    /**
     * 
     *
     * @var string
     */
    protected $entityName;
    /**
     * 
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * 
     *
     * @var string
     */
    protected $requestMethod;
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
    public function getAtCreate(): bool
    {
        return $this->atCreate;
    }
    /**
     * 
     *
     * @param bool $atCreate
     *
     * @return self
     */
    public function setAtCreate(bool $atCreate): self
    {
        $this->initialized['atCreate'] = true;
        $this->atCreate = $atCreate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAtDelete(): bool
    {
        return $this->atDelete;
    }
    /**
     * 
     *
     * @param bool $atDelete
     *
     * @return self
     */
    public function setAtDelete(bool $atDelete): self
    {
        $this->initialized['atDelete'] = true;
        $this->atDelete = $atDelete;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAtUpdate(): bool
    {
        return $this->atUpdate;
    }
    /**
     * 
     *
     * @param bool $atUpdate
     *
     * @return self
     */
    public function setAtUpdate(bool $atUpdate): self
    {
        $this->initialized['atUpdate'] = true;
        $this->atUpdate = $atUpdate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeactivatedDate(): int
    {
        return $this->deactivatedDate;
    }
    /**
     * 
     *
     * @param int $deactivatedDate
     *
     * @return self
     */
    public function setDeactivatedDate(int $deactivatedDate): self
    {
        $this->initialized['deactivatedDate'] = true;
        $this->deactivatedDate = $deactivatedDate;
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
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
    /**
     * 
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->requestMethod;
    }
    /**
     * 
     *
     * @param string $requestMethod
     *
     * @return self
     */
    public function setRequestMethod(string $requestMethod): self
    {
        $this->initialized['requestMethod'] = true;
        $this->requestMethod = $requestMethod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}