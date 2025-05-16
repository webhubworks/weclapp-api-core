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
     * 
     *
     * @var int
     */
    protected $failedCreateCount;
    /**
     * 
     *
     * @var int
     */
    protected $failedUpdateCount;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var int
     */
    protected $succeededCreateCount;
    /**
     * 
     *
     * @var int
     */
    protected $succeededUpdateCount;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @return int
     */
    public function getFailedCreateCount(): int
    {
        return $this->failedCreateCount;
    }
    /**
     * 
     *
     * @param int $failedCreateCount
     *
     * @return self
     */
    public function setFailedCreateCount(int $failedCreateCount): self
    {
        $this->initialized['failedCreateCount'] = true;
        $this->failedCreateCount = $failedCreateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFailedUpdateCount(): int
    {
        return $this->failedUpdateCount;
    }
    /**
     * 
     *
     * @param int $failedUpdateCount
     *
     * @return self
     */
    public function setFailedUpdateCount(int $failedUpdateCount): self
    {
        $this->initialized['failedUpdateCount'] = true;
        $this->failedUpdateCount = $failedUpdateCount;
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
     * @return int
     */
    public function getSucceededCreateCount(): int
    {
        return $this->succeededCreateCount;
    }
    /**
     * 
     *
     * @param int $succeededCreateCount
     *
     * @return self
     */
    public function setSucceededCreateCount(int $succeededCreateCount): self
    {
        $this->initialized['succeededCreateCount'] = true;
        $this->succeededCreateCount = $succeededCreateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSucceededUpdateCount(): int
    {
        return $this->succeededUpdateCount;
    }
    /**
     * 
     *
     * @param int $succeededUpdateCount
     *
     * @return self
     */
    public function setSucceededUpdateCount(int $succeededUpdateCount): self
    {
        $this->initialized['succeededUpdateCount'] = true;
        $this->succeededUpdateCount = $succeededUpdateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}