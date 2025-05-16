<?php

namespace Webhubworks\WeclappApiCore\Model;

class CustomAttributeDefinitionTranslation extends \ArrayObject
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
     * @var string
     */
    protected $labelText;

    /**
     * @var string
     */
    protected $locale;

    public function getLabelText(): string
    {
        return $this->labelText;
    }

    public function setLabelText(string $labelText): self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;

        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;

        return $this;
    }
}
