<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesStageHistory extends \ArrayObject
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
    protected $salesStageId;

    /**
     * @deprecated
     *
     * @var string
     */
    protected $salesStageName;

    /**
     * @var string
     */
    protected $userId;

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

    public function getSalesStageId(): string
    {
        return $this->salesStageId;
    }

    public function setSalesStageId(string $salesStageId): self
    {
        $this->initialized['salesStageId'] = true;
        $this->salesStageId = $salesStageId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getSalesStageName(): string
    {
        return $this->salesStageName;
    }

    /**
     * @deprecated
     */
    public function setSalesStageName(string $salesStageName): self
    {
        $this->initialized['salesStageName'] = true;
        $this->salesStageName = $salesStageName;

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
}
