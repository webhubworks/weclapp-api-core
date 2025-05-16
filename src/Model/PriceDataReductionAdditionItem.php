<?php

namespace Webhubworks\WeclappApiCore\Model;

class PriceDataReductionAdditionItem extends \ArrayObject
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
     * @var int
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var bool
     */
    protected $specialPriceReduction;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSpecialPriceReduction(): bool
    {
        return $this->specialPriceReduction;
    }
    /**
     * 
     *
     * @param bool $specialPriceReduction
     *
     * @return self
     */
    public function setSpecialPriceReduction(bool $specialPriceReduction): self
    {
        $this->initialized['specialPriceReduction'] = true;
        $this->specialPriceReduction = $specialPriceReduction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}