<?php

namespace Webhubworks\WeclappApiCore\Model;

class SepaDirectDebitMandateGetResponse200 extends \ArrayObject
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
     * @var list<SepaDirectDebitMandate>
     */
    protected $result;
    /**
     * 
     *
     * @return list<SepaDirectDebitMandate>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<SepaDirectDebitMandate> $result
     *
     * @return self
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}