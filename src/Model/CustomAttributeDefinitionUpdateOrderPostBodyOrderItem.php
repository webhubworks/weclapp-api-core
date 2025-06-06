<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionUpdateOrderPostBodyOrderItem extends \ArrayObject
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
    protected $id;

    /**
     * @var string|null
     */
    protected $overrideGroupName;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getOverrideGroupName(): ?string
    {
        return $this->overrideGroupName;
    }

    public function setOverrideGroupName(?string $overrideGroupName): self
    {
        $this->initialized['overrideGroupName'] = true;
        $this->overrideGroupName = $overrideGroupName;

        return $this;
    }
}
