<?php

namespace Webhubworks\WeclappApiCore\Model;

class IncomingGoodsIdIdUpdateIncomingBookingsPostBody extends \ArrayObject
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
     * @var list<IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem>|null
     */
    protected $incomingBookings;

    /**
     * @return list<IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem>|null
     */
    public function getIncomingBookings(): ?array
    {
        return $this->incomingBookings;
    }

    /**
     * @param  list<IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem>|null  $incomingBookings
     */
    public function setIncomingBookings(?array $incomingBookings): self
    {
        $this->initialized['incomingBookings'] = true;
        $this->incomingBookings = $incomingBookings;

        return $this;
    }
}
