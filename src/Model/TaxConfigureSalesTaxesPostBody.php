<?php

namespace Webhubworks\WeclappApiCore\Model;

class TaxConfigureSalesTaxesPostBody extends \ArrayObject
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
    protected $personsThirdCountryFreeTax;
    /**
     * 
     *
     * @var bool
     */
    protected $taxEuPersonsRecipientCountry;
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
    public function getTaxEuPersonsRecipientCountry(): bool
    {
        return $this->taxEuPersonsRecipientCountry;
    }
    /**
     * 
     *
     * @param bool $taxEuPersonsRecipientCountry
     *
     * @return self
     */
    public function setTaxEuPersonsRecipientCountry(bool $taxEuPersonsRecipientCountry): self
    {
        $this->initialized['taxEuPersonsRecipientCountry'] = true;
        $this->taxEuPersonsRecipientCountry = $taxEuPersonsRecipientCountry;
        return $this;
    }
}