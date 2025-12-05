<?php

namespace Webhubworks\WeclappApiCore\Model;

class ExternalConnectionIdIdStartEbayListingSynchronizationPostBody extends \ArrayObject
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
     * @var list<string>|null
     */
    protected $ebayListingIds;
    /**
     * 
     *
     * @var int|null
     */
    protected $syncListingsSince;
    /**
     * 
     *
     * @var bool|null
     */
    protected $syncToWeclapp;
    /**
     * 
     *
     * @return list<string>|null
     */
    public function getEbayListingIds(): ?array
    {
        return $this->ebayListingIds;
    }
    /**
     * 
     *
     * @param list<string>|null $ebayListingIds
     *
     * @return self
     */
    public function setEbayListingIds(?array $ebayListingIds): self
    {
        $this->initialized['ebayListingIds'] = true;
        $this->ebayListingIds = $ebayListingIds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSyncListingsSince(): ?int
    {
        return $this->syncListingsSince;
    }
    /**
     * 
     *
     * @param int|null $syncListingsSince
     *
     * @return self
     */
    public function setSyncListingsSince(?int $syncListingsSince): self
    {
        $this->initialized['syncListingsSince'] = true;
        $this->syncListingsSince = $syncListingsSince;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSyncToWeclapp(): ?bool
    {
        return $this->syncToWeclapp;
    }
    /**
     * 
     *
     * @param bool|null $syncToWeclapp
     *
     * @return self
     */
    public function setSyncToWeclapp(?bool $syncToWeclapp): self
    {
        $this->initialized['syncToWeclapp'] = true;
        $this->syncToWeclapp = $syncToWeclapp;
        return $this;
    }
}