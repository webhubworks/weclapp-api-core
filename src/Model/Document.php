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
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $documentSize;

    /**
     * @var string
     */
    protected $documentType;

    /**
     * @var string
     */
    protected $mediaType;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var list<DocumentVersion>
     */
    protected $versions;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getDocumentSize(): int
    {
        return $this->documentSize;
    }

    public function setDocumentSize(int $documentSize): self
    {
        $this->initialized['documentSize'] = true;
        $this->documentSize = $documentSize;

        return $this;
    }

    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    public function setDocumentType(string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;

        return $this;
    }

    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    public function setMediaType(string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return list<DocumentVersion>
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param  list<DocumentVersion>  $versions
     */
    public function setVersions(array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;

        return $this;
    }
}
