<?php

namespace Webhub\Weclapp\Model;

class ArticleImage extends \ArrayObject
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
    protected $fileName;

    /**
     * @var bool
     */
    protected $mainImage;

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

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;

        return $this;
    }

    public function getMainImage(): bool
    {
        return $this->mainImage;
    }

    public function setMainImage(bool $mainImage): self
    {
        $this->initialized['mainImage'] = true;
        $this->mainImage = $mainImage;

        return $this;
    }
}
