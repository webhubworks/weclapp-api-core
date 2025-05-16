<?php

namespace Webhubworks\WeclappApiCore\Model;

class ReductionAdditionItem extends \ArrayObject
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
     * @var int
     */
    protected $position;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var bool
     */
    protected $specialPriceReduction;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    public function getSpecialPriceReduction(): bool
    {
        return $this->specialPriceReduction;
    }

    public function setSpecialPriceReduction(bool $specialPriceReduction): self
    {
        $this->initialized['specialPriceReduction'] = true;
        $this->specialPriceReduction = $specialPriceReduction;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
