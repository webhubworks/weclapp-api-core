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
     * @var int|null
     */
    protected $failedCreateCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $failedUpdateCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $succeededCreateCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $succeededUpdateCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * 
     *
     * @return int|null
     */
    public function getFailedCreateCount(): ?int
    {
        return $this->failedCreateCount;
    }
    /**
     * 
     *
     * @param int|null $failedCreateCount
     *
     * @return self
     */
    public function setFailedCreateCount(?int $failedCreateCount): self
    {
        $this->initialized['failedCreateCount'] = true;
        $this->failedCreateCount = $failedCreateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFailedUpdateCount(): ?int
    {
        return $this->failedUpdateCount;
    }
    /**
     * 
     *
     * @param int|null $failedUpdateCount
     *
     * @return self
     */
    public function setFailedUpdateCount(?int $failedUpdateCount): self
    {
        $this->initialized['failedUpdateCount'] = true;
        $this->failedUpdateCount = $failedUpdateCount;
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
     * @return int|null
     */
    public function getSucceededCreateCount(): ?int
    {
        return $this->succeededCreateCount;
    }
    /**
     * 
     *
     * @param int|null $succeededCreateCount
     *
     * @return self
     */
    public function setSucceededCreateCount(?int $succeededCreateCount): self
    {
        $this->initialized['succeededCreateCount'] = true;
        $this->succeededCreateCount = $succeededCreateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSucceededUpdateCount(): ?int
    {
        return $this->succeededUpdateCount;
    }
    /**
     * 
     *
     * @param int|null $succeededUpdateCount
     *
     * @return self
     */
    public function setSucceededUpdateCount(?int $succeededUpdateCount): self
    {
        $this->initialized['succeededUpdateCount'] = true;
        $this->succeededUpdateCount = $succeededUpdateCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int|null $totalCount
     *
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}