<?php

namespace Webhub\Weclapp\Model;

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
     * @var string
     */
    protected $commercialLanguageId;

    /**
     * @var string
     */
    protected $salesChannel;

    public function getCommercialLanguageId(): string
    {
        return $this->commercialLanguageId;
    }

    public function setCommercialLanguageId(string $commercialLanguageId): self
    {
        $this->initialized['commercialLanguageId'] = true;
        $this->commercialLanguageId = $commercialLanguageId;

        return $this;
    }

    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(string $salesChannel): self
    {
        $this->initialized['salesChannel'] = true;
        $this->salesChannel = $salesChannel;

        return $this;
    }
}
