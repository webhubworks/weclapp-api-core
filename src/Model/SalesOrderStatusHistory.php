<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesOrderStatusHistory extends \ArrayObject
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
     * @var bool
     */
    protected $creditLimitExceeded;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $statusDate;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
    /**
     * 
     *
     * @return bool
     */
    public function getCreditLimitExceeded(): bool
    {
        return $this->creditLimitExceeded;
    }
    /**
     * 
     *
     * @param bool $creditLimitExceeded
     *
     * @return self
     */
    public function setCreditLimitExceeded(bool $creditLimitExceeded): self
    {
        $this->initialized['creditLimitExceeded'] = true;
        $this->creditLimitExceeded = $creditLimitExceeded;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatusDate(): int
    {
        return $this->statusDate;
    }
    /**
     * 
     *
     * @param int $statusDate
     *
     * @return self
     */
    public function setStatusDate(int $statusDate): self
    {
        $this->initialized['statusDate'] = true;
        $this->statusDate = $statusDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
}