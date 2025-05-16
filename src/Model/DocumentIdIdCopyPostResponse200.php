<?php

namespace Webhubworks\WeclappApiCore\Model;

class DocumentIdIdCopyPostResponse200 extends \ArrayObject
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
     * @var Document|null
     */
    protected $result;

    public function getResult(): ?Document
    {
        return $this->result;
    }

    public function setResult(?Document $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;

        return $this;
    }
}
