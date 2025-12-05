<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaskIdIdUpdateBillingDataPostBody extends \ArrayObject
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
     * @var TaskIdIdUpdateBillingDataPostBodyBillingData|null
     */
    protected $billingData;
    /**
     * 
     *
     * @return TaskIdIdUpdateBillingDataPostBodyBillingData|null
     */
    public function getBillingData(): ?TaskIdIdUpdateBillingDataPostBodyBillingData
    {
        return $this->billingData;
    }
    /**
     * 
     *
     * @param TaskIdIdUpdateBillingDataPostBodyBillingData|null $billingData
     *
     * @return self
     */
    public function setBillingData(?TaskIdIdUpdateBillingDataPostBodyBillingData $billingData): self
    {
        $this->initialized['billingData'] = true;
        $this->billingData = $billingData;
        return $this;
    }
}