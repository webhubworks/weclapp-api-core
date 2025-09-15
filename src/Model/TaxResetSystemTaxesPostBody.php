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
     * @var string|null
     */
    protected $countryCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $initAllStores;
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
    protected $taxRecipientCountry;
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
    public function getInitAllStores(): ?bool
    {
        return $this->initAllStores;
    }
    /**
     * 
     *
     * @param bool|null $initAllStores
     *
     * @return self
     */
    public function setInitAllStores(?bool $initAllStores): self
    {
        $this->initialized['initAllStores'] = true;
        $this->initAllStores = $initAllStores;
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
    public function getTaxRecipientCountry(): ?bool
    {
        return $this->taxRecipientCountry;
    }
    /**
     * 
     *
     * @param bool|null $taxRecipientCountry
     *
     * @return self
     */
    public function setTaxRecipientCountry(?bool $taxRecipientCountry): self
    {
        $this->initialized['taxRecipientCountry'] = true;
        $this->taxRecipientCountry = $taxRecipientCountry;
        return $this;
    }
}