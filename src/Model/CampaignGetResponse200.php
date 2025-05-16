<?php

namespace Webhubworks\WeclappApiCore\Model;

class CampaignGetResponse200 extends \ArrayObject
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
     * @var list<Campaign>
     */
    protected $result;

    /**
     * @return list<Campaign>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Campaign>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
