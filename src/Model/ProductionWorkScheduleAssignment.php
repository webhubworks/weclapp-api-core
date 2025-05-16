<?php

namespace Webhubworks\WeclappApiCore\Model;

class ProductionWorkScheduleAssignment extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $customAttributes;

    /**
     * @var bool
     */
    protected $alternative;

    /**
     * @var string
     */
    protected $articleId;

    /**
     * @var string
     */
    protected $productionWorkScheduleId;

    /**
     * @var int
     */
    protected $validFrom;

    /**
     * @var int
     */
    protected $validTo;

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

    /**
     * @return list<mixed>
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    /**
     * @param  list<mixed>  $customAttributes
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function getAlternative(): bool
    {
        return $this->alternative;
    }

    public function setAlternative(bool $alternative): self
    {
        $this->initialized['alternative'] = true;
        $this->alternative = $alternative;

        return $this;
    }

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function setArticleId(string $articleId): self
    {
        $this->initialized['articleId'] = true;
        $this->articleId = $articleId;

        return $this;
    }

    public function getProductionWorkScheduleId(): string
    {
        return $this->productionWorkScheduleId;
    }

    public function setProductionWorkScheduleId(string $productionWorkScheduleId): self
    {
        $this->initialized['productionWorkScheduleId'] = true;
        $this->productionWorkScheduleId = $productionWorkScheduleId;

        return $this;
    }

    public function getValidFrom(): int
    {
        return $this->validFrom;
    }

    public function setValidFrom(int $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): int
    {
        return $this->validTo;
    }

    public function setValidTo(int $validTo): self
    {
        $this->initialized['validTo'] = true;
        $this->validTo = $validTo;

        return $this;
    }
}
