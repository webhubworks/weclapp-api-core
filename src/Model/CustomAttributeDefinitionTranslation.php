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
     * 
     *
     * @var string|null
     */
    protected $labelText;
    /**
     * 
     *
     * @var string|null
     */
    protected $locale;
    /**
     * 
     *
     * @return string|null
     */
    public function getLabelText(): ?string
    {
        return $this->labelText;
    }
    /**
     * 
     *
     * @param string|null $labelText
     *
     * @return self
     */
    public function setLabelText(?string $labelText): self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
}