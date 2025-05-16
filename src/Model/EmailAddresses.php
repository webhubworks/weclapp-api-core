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
     * @var string|null
     */
    protected $bccAddresses;

    /**
     * @var string|null
     */
    protected $ccAddresses;

    /**
     * @var string|null
     */
    protected $toAddresses;

    public function getBccAddresses(): ?string
    {
        return $this->bccAddresses;
    }

    public function setBccAddresses(?string $bccAddresses): self
    {
        $this->initialized['bccAddresses'] = true;
        $this->bccAddresses = $bccAddresses;

        return $this;
    }

    public function getCcAddresses(): ?string
    {
        return $this->ccAddresses;
    }

    public function setCcAddresses(?string $ccAddresses): self
    {
        $this->initialized['ccAddresses'] = true;
        $this->ccAddresses = $ccAddresses;

        return $this;
    }

    public function getToAddresses(): ?string
    {
        return $this->toAddresses;
    }

    public function setToAddresses(?string $toAddresses): self
    {
        $this->initialized['toAddresses'] = true;
        $this->toAddresses = $toAddresses;

        return $this;
    }
}
