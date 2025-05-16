<?php

namespace Webhubworks\WeclappApiCore\Model;

class QuotationIdIdAcceptPostBody extends \ArrayObject
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
     * @var list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null
     */
    protected $acceptQuotationItems;

    /**
     * @return list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null
     */
    public function getAcceptQuotationItems(): ?array
    {
        return $this->acceptQuotationItems;
    }

    /**
     * @param  list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null  $acceptQuotationItems
     */
    public function setAcceptQuotationItems(?array $acceptQuotationItems): self
    {
        $this->initialized['acceptQuotationItems'] = true;
        $this->acceptQuotationItems = $acceptQuotationItems;

        return $this;
    }
}
