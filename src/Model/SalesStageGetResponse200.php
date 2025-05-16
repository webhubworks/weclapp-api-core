<?php

namespace Webhubworks\WeclappApiCore\Model;

class SalesStageGetResponse200 extends \ArrayObject
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
     * @var list<SalesStage>
     */
    protected $result;

    /**
     * @return list<SalesStage>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<SalesStage>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
