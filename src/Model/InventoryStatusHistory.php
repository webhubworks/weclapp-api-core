<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryStatusHistory extends \ArrayObject
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
    protected $status;

    /**
     * @var int
     */
    protected $statusDate;

    /**
     * @var string
     */
    protected $userId;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getStatusDate(): int
    {
        return $this->statusDate;
    }

    public function setStatusDate(int $statusDate): self
    {
        $this->initialized['statusDate'] = true;
        $this->statusDate = $statusDate;

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
