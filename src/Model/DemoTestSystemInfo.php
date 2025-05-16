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
     * @var bool|null
     */
    protected $createPossible;
    /**
     * 
     *
     * @var bool|null
     */
    protected $creationInProgress;
    /**
     * 
     *
     * @var string|null
     */
    protected $demoInstanceUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $mainInstanceUrl;
    /**
     * 
     *
     * @return bool|null
     */
    public function getCreatePossible(): ?bool
    {
        return $this->createPossible;
    }
    /**
     * 
     *
     * @param bool|null $createPossible
     *
     * @return self
     */
    public function setCreatePossible(?bool $createPossible): self
    {
        $this->initialized['createPossible'] = true;
        $this->createPossible = $createPossible;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCreationInProgress(): ?bool
    {
        return $this->creationInProgress;
    }
    /**
     * 
     *
     * @param bool|null $creationInProgress
     *
     * @return self
     */
    public function setCreationInProgress(?bool $creationInProgress): self
    {
        $this->initialized['creationInProgress'] = true;
        $this->creationInProgress = $creationInProgress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDemoInstanceUrl(): ?string
    {
        return $this->demoInstanceUrl;
    }
    /**
     * 
     *
     * @param string|null $demoInstanceUrl
     *
     * @return self
     */
    public function setDemoInstanceUrl(?string $demoInstanceUrl): self
    {
        $this->initialized['demoInstanceUrl'] = true;
        $this->demoInstanceUrl = $demoInstanceUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMainInstanceUrl(): ?string
    {
        return $this->mainInstanceUrl;
    }
    /**
     * 
     *
     * @param string|null $mainInstanceUrl
     *
     * @return self
     */
    public function setMainInstanceUrl(?string $mainInstanceUrl): self
    {
        $this->initialized['mainInstanceUrl'] = true;
        $this->mainInstanceUrl = $mainInstanceUrl;
        return $this;
    }
}