<?php

namespace Webhubworks\WeclappApiCore\Model;

class PerformanceRecordIdIdRemoveSignaturePostBody extends \ArrayObject
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
     * @var bool|null
     */
    protected $customerSignature;
    /**
     * 
     *
     * @return bool|null
     */
    public function getCustomerSignature(): ?bool
    {
        return $this->customerSignature;
    }
    /**
     * 
     *
     * @param bool|null $customerSignature
     *
     * @return self
     */
    public function setCustomerSignature(?bool $customerSignature): self
    {
        $this->initialized['customerSignature'] = true;
        $this->customerSignature = $customerSignature;
        return $this;
    }
}