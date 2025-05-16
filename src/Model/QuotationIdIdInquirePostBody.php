<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdInquirePostBody extends \ArrayObject
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
    protected $taskId;

    public function getTaskId(): string
    {
        return $this->taskId;
    }

    public function setTaskId(string $taskId): self
    {
        $this->initialized['taskId'] = true;
        $this->taskId = $taskId;

        return $this;
    }
}
