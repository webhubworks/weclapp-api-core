<?php

namespace Webhubworks\WeclappApiCore\Model;

class PartyIdIdStartTransferEmailAddressesToOpenRecordsPostBody extends \ArrayObject
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
    protected $partyEmailAddressId;
    /**
     * 
     *
     * @return string|null
     */
    public function getPartyEmailAddressId(): ?string
    {
        return $this->partyEmailAddressId;
    }
    /**
     * 
     *
     * @param string|null $partyEmailAddressId
     *
     * @return self
     */
    public function setPartyEmailAddressId(?string $partyEmailAddressId): self
    {
        $this->initialized['partyEmailAddressId'] = true;
        $this->partyEmailAddressId = $partyEmailAddressId;
        return $this;
    }
}