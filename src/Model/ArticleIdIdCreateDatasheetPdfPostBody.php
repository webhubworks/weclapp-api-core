<?php

namespace Webhubworks\WeclappApiCore\Model;

class ArticleIdIdCreateDatasheetPdfPostBody extends \ArrayObject
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
    protected $commercialLanguageId;
    /**
     * 
     *
     * @var string|null
     */
    protected $salesChannel;
    /**
     * 
     *
     * @return string|null
     */
    public function getCommercialLanguageId(): ?string
    {
        return $this->commercialLanguageId;
    }
    /**
     * 
     *
     * @param string|null $commercialLanguageId
     *
     * @return self
     */
    public function setCommercialLanguageId(?string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSalesChannel(): ?string
    {
        return $this->salesChannel;
    }
    /**
     * 
     *
     * @param string|null $salesChannel
     *
     * @return self
     */
    public function setSalesChannel(?string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;
        return $this;
    }
}