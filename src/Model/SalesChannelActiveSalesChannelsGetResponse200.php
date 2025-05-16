<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesChannelActiveSalesChannelsGetResponse200 extends \ArrayObject
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
     * @var list<SalesChannel>
     */
    protected $result;

    /**
     * @return list<SalesChannel>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<SalesChannel>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
