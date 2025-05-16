<?php

namespace Webhubworks\WeclappApiCore\Model;

class DemoTestSystemInfo extends \ArrayObject
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
     * @var bool
     */
    protected $createPossible;
    /**
     * 
     *
     * @var bool
     */
    protected $creationInProgress;
    /**
     * 
     *
     * @var string
     */
    protected $demoInstanceUrl;
    /**
     * 
     *
     * @var string
     */
    protected $mainInstanceUrl;
    /**
     * 
     *
     * @return bool
     */
    public function getCreatePossible(): bool
    {
        return $this->createPossible;
    }
    /**
     * 
     *
     * @param bool $createPossible
     *
     * @return self
     */
    public function setCreatePossible(bool $createPossible): self
    {
        $this->initialized['createPossible'] = true;
        $this->createPossible = $createPossible;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCreationInProgress(): bool
    {
        return $this->creationInProgress;
    }
    /**
     * 
     *
     * @param bool $creationInProgress
     *
     * @return self
     */
    public function setCreationInProgress(bool $creationInProgress): self
    {
        $this->initialized['creationInProgress'] = true;
        $this->creationInProgress = $creationInProgress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDemoInstanceUrl(): string
    {
        return $this->demoInstanceUrl;
    }
    /**
     * 
     *
     * @param string $demoInstanceUrl
     *
     * @return self
     */
    public function setDemoInstanceUrl(string $demoInstanceUrl): self
    {
        $this->initialized['demoInstanceUrl'] = true;
        $this->demoInstanceUrl = $demoInstanceUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMainInstanceUrl(): string
    {
        return $this->mainInstanceUrl;
    }
    /**
     * 
     *
     * @param string $mainInstanceUrl
     *
     * @return self
     */
    public function setMainInstanceUrl(string $mainInstanceUrl): self
    {
        $this->initialized['mainInstanceUrl'] = true;
        $this->mainInstanceUrl = $mainInstanceUrl;
        return $this;
    }
}