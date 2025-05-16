<?php

namespace Webhubworks\WeclappApiCore\Model;

class JobProgress extends \ArrayObject
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
     * @var int
     */
    protected $failedCreateCount;

    /**
     * @var int
     */
    protected $failedUpdateCount;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var int
     */
    protected $succeededCreateCount;

    /**
     * @var int
     */
    protected $succeededUpdateCount;

    /**
     * @var int
     */
    protected $totalCount;

    public function getFailedCreateCount(): int
    {
        return $this->failedCreateCount;
    }

    public function setFailedCreateCount(int $failedCreateCount): self
    {
        $this->initialized['failedCreateCount'] = true;
        $this->failedCreateCount = $failedCreateCount;

        return $this;
    }

    public function getFailedUpdateCount(): int
    {
        return $this->failedUpdateCount;
    }

    public function setFailedUpdateCount(int $failedUpdateCount): self
    {
        $this->initialized['failedUpdateCount'] = true;
        $this->failedUpdateCount = $failedUpdateCount;

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

    public function getSucceededCreateCount(): int
    {
        return $this->succeededCreateCount;
    }

    public function setSucceededCreateCount(int $succeededCreateCount): self
    {
        $this->initialized['succeededCreateCount'] = true;
        $this->succeededCreateCount = $succeededCreateCount;

        return $this;
    }

    public function getSucceededUpdateCount(): int
    {
        return $this->succeededUpdateCount;
    }

    public function setSucceededUpdateCount(int $succeededUpdateCount): self
    {
        $this->initialized['succeededUpdateCount'] = true;
        $this->succeededUpdateCount = $succeededUpdateCount;

        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
