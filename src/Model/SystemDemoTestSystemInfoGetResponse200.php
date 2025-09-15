<?php

namespace Webhubworks\WeclappApiCore\Model;

class SystemDemoTestSystemInfoGetResponse200 extends \ArrayObject
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
     * @var DemoTestSystemInfo|null
     */
    protected $result;
    /**
     * 
     *
     * @return DemoTestSystemInfo|null
     */
    public function getResult(): ?DemoTestSystemInfo
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param DemoTestSystemInfo|null $result
     *
     * @return self
     */
    public function setResult(?DemoTestSystemInfo $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}