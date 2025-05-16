<?php

namespace Webhubworks\WeclappApiCore\Model;

class RemotePrintJobCreatePrintJobWithDocumentPostResponse200 extends \ArrayObject
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
     * @var RemotePrintJob|null
     */
    protected $result;
    /**
     * 
     *
     * @return RemotePrintJob|null
     */
    public function getResult(): ?RemotePrintJob
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param RemotePrintJob|null $result
     *
     * @return self
     */
    public function setResult(?RemotePrintJob $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}