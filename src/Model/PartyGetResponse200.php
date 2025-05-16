<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyGetResponse200 extends \ArrayObject
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
     * @var PartyGetResponse200AdditionalProperties
     */
    protected $additionalProperties;
    /**
     * 
     *
     * @var list<Party>
     */
    protected $result;
    /**
     * 
     *
     * @return PartyGetResponse200AdditionalProperties
     */
    public function getAdditionalProperties(): PartyGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param PartyGetResponse200AdditionalProperties $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(PartyGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * 
     *
     * @return list<Party>
     */
    public function getResult(): array
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param list<Party> $result
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