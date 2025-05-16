<?php

namespace Webhubworks\WeclappApiCore\Model;

class TicketIdIdLinkSalesOrderPostBody extends \ArrayObject
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
    protected $salesOrderId;

    /**
     * @var array<string, mixed>
     */
    protected $taskIdToOrderItemId;

    public function getSalesOrderId(): int
    {
        return $this->salesOrderId;
    }

    public function setSalesOrderId(int $salesOrderId): self
    {
        $this->initialized['salesOrderId'] = true;
        $this->salesOrderId = $salesOrderId;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getTaskIdToOrderItemId(): iterable
    {
        return $this->taskIdToOrderItemId;
    }

    /**
     * @param  array<string, mixed>  $taskIdToOrderItemId
     */
    public function setTaskIdToOrderItemId(iterable $taskIdToOrderItemId): self
    {
        $this->initialized['taskIdToOrderItemId'] = true;
        $this->taskIdToOrderItemId = $taskIdToOrderItemId;

        return $this;
    }
}
