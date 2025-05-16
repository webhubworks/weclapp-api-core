<?php

namespace Webhubworks\WeclappApiCore\Model;

class Document extends \ArrayObject
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
     * @var string|null
     */
    protected $description;

    /**
     * @var int|null
     */
    protected $documentSize;

    /**
     * @var string|null
     */
    protected $documentType;

    /**
     * @var string|null
     */
    protected $mediaType;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $userId;

    /**
     * @var list<DocumentVersion>|null
     */
    protected $versions;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDocumentSize(): ?int
    {
        return $this->documentSize;
    }

    public function setDocumentSize(?int $documentSize): self
    {
        $this->initialized['documentSize'] = true;
        $this->documentSize = $documentSize;

        return $this;
    }

    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    public function setDocumentType(?string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    public function setMediaType(?string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return list<DocumentVersion>|null
     */
    public function getVersions(): ?array
    {
        return $this->versions;
    }

    /**
     * @param  list<DocumentVersion>|null  $versions
     */
    public function setVersions(?array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;

        return $this;
    }
}
