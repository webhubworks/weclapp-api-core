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
     * @var PartyGetResponse200AdditionalProperties|null
     */
    protected $additionalProperties;

    /**
     * @var list<Party>|null
     */
    protected $result;

    public function getAdditionalProperties(): ?PartyGetResponse200AdditionalProperties
    {
        return $this->additionalProperties;
    }

    public function setAdditionalProperties(?PartyGetResponse200AdditionalProperties $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return list<Party>|null
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * @param  list<Party>|null  $result
     */
    public function setResult(?array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
