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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var bool|null
     */
    protected $atCreate;

    /**
     * @var bool|null
     */
    protected $atDelete;

    /**
     * @var bool|null
     */
    protected $atUpdate;

    /**
     * @var int|null
     */
    protected $deactivatedDate;

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var string|null
     */
    protected $errorMessage;

    /**
     * @var string|null
     */
    protected $requestMethod;

    /**
     * @var string|null
     */
    protected $url;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAtCreate(): ?bool
    {
        return $this->atCreate;
    }

    public function setAtCreate(?bool $atCreate): self
    {
        $this->initialized['atCreate'] = true;
        $this->atCreate = $atCreate;

        return $this;
    }

    public function getAtDelete(): ?bool
    {
        return $this->atDelete;
    }

    public function setAtDelete(?bool $atDelete): self
    {
        $this->initialized['atDelete'] = true;
        $this->atDelete = $atDelete;

        return $this;
    }

    public function getAtUpdate(): ?bool
    {
        return $this->atUpdate;
    }

    public function setAtUpdate(?bool $atUpdate): self
    {
        $this->initialized['atUpdate'] = true;
        $this->atUpdate = $atUpdate;

        return $this;
    }

    public function getDeactivatedDate(): ?int
    {
        return $this->deactivatedDate;
    }

    public function setDeactivatedDate(?int $deactivatedDate): self
    {
        $this->initialized['deactivatedDate'] = true;
        $this->deactivatedDate = $deactivatedDate;

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

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function getRequestMethod(): ?string
    {
        return $this->requestMethod;
    }

    public function setRequestMethod(?string $requestMethod): self
    {
        $this->initialized['requestMethod'] = true;
        $this->requestMethod = $requestMethod;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
