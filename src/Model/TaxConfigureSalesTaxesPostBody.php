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
     * @var string|null
     */
    protected $countryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $personsThirdCountryFreeTax;
    /**
     * 
     *
     * @var bool|null
     */
    protected $taxEuPersonsRecipientCountry;
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPersonsThirdCountryFreeTax(): ?bool
    {
        return $this->personsThirdCountryFreeTax;
    }
    /**
     * 
     *
     * @param bool|null $personsThirdCountryFreeTax
     *
     * @return self
     */
    public function setPersonsThirdCountryFreeTax(?bool $personsThirdCountryFreeTax): self
    {
        $this->initialized['personsThirdCountryFreeTax'] = true;
        $this->personsThirdCountryFreeTax = $personsThirdCountryFreeTax;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTaxEuPersonsRecipientCountry(): ?bool
    {
        return $this->taxEuPersonsRecipientCountry;
    }
    /**
     * 
     *
     * @param bool|null $taxEuPersonsRecipientCountry
     *
     * @return self
     */
    public function setTaxEuPersonsRecipientCountry(?bool $taxEuPersonsRecipientCountry): self
    {
        $this->initialized['taxEuPersonsRecipientCountry'] = true;
        $this->taxEuPersonsRecipientCountry = $taxEuPersonsRecipientCountry;
        return $this;
    }
}