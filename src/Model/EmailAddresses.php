<?php

namespace Webhubworks\WeclappApiCore\Model;

class EmailAddresses extends \ArrayObject
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
     * @var string
     */
    protected $bccAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $ccAddresses;
    /**
     * 
     *
     * @var string
     */
    protected $toAddresses;
    /**
     * 
     *
     * @return string
     */
    public function getBccAddresses(): string
    {
        return $this->bccAddresses;
    }
    /**
     * 
     *
     * @param string $bccAddresses
     *
     * @return self
     */
    public function setBccAddresses(string $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCcAddresses(): string
    {
        return $this->ccAddresses;
    }
    /**
     * 
     *
     * @param string $ccAddresses
     *
     * @return self
     */
    public function setCcAddresses(string $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToAddresses(): string
    {
        return $this->toAddresses;
    }
    /**
     * 
     *
     * @param string $toAddresses
     *
     * @return self
     */
    public function setToAddresses(string $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;
        return $this;
    }
}