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
     * @var bool
     */
    protected $createPossible;

    /**
     * @var bool
     */
    protected $creationInProgress;

    /**
     * @var string
     */
    protected $demoInstanceUrl;

    /**
     * @var string
     */
    protected $mainInstanceUrl;

    public function getCreatePossible(): bool
    {
        return $this->createPossible;
    }

    public function setCreatePossible(bool $createPossible): self
    {
        $this->initialized['createPossible'] = true;
        $this->createPossible = $createPossible;

        return $this;
    }

    public function getCreationInProgress(): bool
    {
        return $this->creationInProgress;
    }

    public function setCreationInProgress(bool $creationInProgress): self
    {
        $this->initialized['creationInProgress'] = true;
        $this->creationInProgress = $creationInProgress;

        return $this;
    }

    public function getDemoInstanceUrl(): string
    {
        return $this->demoInstanceUrl;
    }

    public function setDemoInstanceUrl(string $demoInstanceUrl): self
    {
        $this->initialized['demoInstanceUrl'] = true;
        $this->demoInstanceUrl = $demoInstanceUrl;

        return $this;
    }

    public function getMainInstanceUrl(): string
    {
        return $this->mainInstanceUrl;
    }

    public function setMainInstanceUrl(string $mainInstanceUrl): self
    {
        $this->initialized['mainInstanceUrl'] = true;
        $this->mainInstanceUrl = $mainInstanceUrl;

        return $this;
    }
}
