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
     * @var string|null
     */
    protected $countryCode;

    /**
     * @var bool|null
     */
    protected $personsThirdCountryFreeTax;

    /**
     * @var bool|null
     */
    protected $taxEuPersonsRecipientCountry;

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getPersonsThirdCountryFreeTax(): ?bool
    {
        return $this->personsThirdCountryFreeTax;
    }

    public function setPersonsThirdCountryFreeTax(?bool $personsThirdCountryFreeTax): self
    {
        $this->initialized['personsThirdCountryFreeTax'] = true;
        $this->personsThirdCountryFreeTax = $personsThirdCountryFreeTax;

        return $this;
    }

    public function getTaxEuPersonsRecipientCountry(): ?bool
    {
        return $this->taxEuPersonsRecipientCountry;
    }

    public function setTaxEuPersonsRecipientCountry(?bool $taxEuPersonsRecipientCountry): self
    {
        $this->initialized['taxEuPersonsRecipientCountry'] = true;
        $this->taxEuPersonsRecipientCountry = $taxEuPersonsRecipientCountry;

        return $this;
    }
}
