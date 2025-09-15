<?php

namespace Webhubworks\WeclappApiCore\Model;

class DocumentCopyPostResponse200 extends \ArrayObject
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
     * @var Document|null
     */
    protected $result;
    /**
     * 
     *
     * @return Document|null
     */
    public function getResult(): ?Document
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param Document|null $result
     *
     * @return self
     */
    public function setResult(?Document $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}