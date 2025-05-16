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
     * @var RemotePrintJob
     */
    protected $result;
    /**
     * 
     *
     * @return RemotePrintJob
     */
    public function getResult(): RemotePrintJob
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param RemotePrintJob $result
     *
     * @return self
     */
    public function setResult(RemotePrintJob $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}