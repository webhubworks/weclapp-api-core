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
     * 
     *
     * @var list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null
     */
    protected $acceptQuotationItems;
    /**
     * 
     *
     * @var string|null
     */
    protected $quotationType;
    /**
     * 
     *
     * @return list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null
     */
    public function getAcceptQuotationItems(): ?array
    {
        return $this->acceptQuotationItems;
    }
    /**
     * 
     *
     * @param list<QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem>|null $acceptQuotationItems
     *
     * @return self
     */
    public function setAcceptQuotationItems(?array $acceptQuotationItems): self
    {
        $this->initialized['acceptQuotationItems'] = true;
        $this->acceptQuotationItems = $acceptQuotationItems;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getQuotationType(): ?string
    {
        return $this->quotationType;
    }
    /**
     * 
     *
     * @param string|null $quotationType
     *
     * @return self
     */
    public function setQuotationType(?string $quotationType): self
    {
        $this->initialized['quotationType'] = true;
        $this->quotationType = $quotationType;
        return $this;
    }
}