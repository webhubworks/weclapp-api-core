<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaxResetSystemTaxesPostBody extends \ArrayObject
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
    protected $countryCode;
    /**
     * 
     *
     * @var bool
     */
    protected $initAllStores;
    /**
     * 
     *
     * @var bool
     */
    protected $personsThirdCountryFreeTax;
    /**
     * 
     *
     * @var bool
     */
    protected $taxRecipientCountry;
    /**
     * 
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getInitAllStores(): bool
    {
        return $this->initAllStores;
    }
    /**
     * 
     *
     * @param bool $initAllStores
     *
     * @return self
     */
    public function setInitAllStores(bool $initAllStores): self
    {
        $this->initialized['initAllStores'] = true;
        $this->initAllStores = $initAllStores;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPersonsThirdCountryFreeTax(): bool
    {
        return $this->personsThirdCountryFreeTax;
    }
    /**
     * 
     *
     * @param bool $personsThirdCountryFreeTax
     *
     * @return self
     */
    public function setPersonsThirdCountryFreeTax(bool $personsThirdCountryFreeTax): self
    {
        $this->initialized['personsThirdCountryFreeTax'] = true;
        $this->personsThirdCountryFreeTax = $personsThirdCountryFreeTax;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTaxRecipientCountry(): bool
    {
        return $this->taxRecipientCountry;
    }
    /**
     * 
     *
     * @param bool $taxRecipientCountry
     *
     * @return self
     */
    public function setTaxRecipientCountry(bool $taxRecipientCountry): self
    {
        $this->initialized['taxRecipientCountry'] = true;
        $this->taxRecipientCountry = $taxRecipientCountry;
        return $this;
    }
}