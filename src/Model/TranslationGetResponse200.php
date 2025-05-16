<?php

namespace Webhubworks\WeclappApiCore\Model;

class TranslationGetResponse200 extends \ArrayObject
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
     * @var list<Translation>
     */
    protected $result;

    /**
     * @return list<Translation>
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @param  list<Translation>  $result
     */
    public function setResult(array $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
