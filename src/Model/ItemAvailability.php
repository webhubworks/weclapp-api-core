<?php

namespace Webhubworks\WeclappApiCore\Model;

class ItemAvailability extends \ArrayObject
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
     * @var string|null
     */
    protected $availability;
    /**
     * 
     *
     * @var string|null
     */
    protected $itemId;
    /**
     * 
     *
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }
    /**
     * 
     *
     * @param string|null $availability
     *
     * @return self
     */
    public function setAvailability(?string $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }
    /**
     * 
     *
     * @param string|null $itemId
     *
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
}