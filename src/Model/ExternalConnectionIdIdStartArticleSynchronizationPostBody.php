<?php

namespace Webhubworks\WeclappApiCore\Model;

class ExternalConnectionIdIdStartArticleSynchronizationPostBody extends \ArrayObject
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
    protected $articleIds;
    /**
     * 
     *
     * @var int|null
     */
    protected $syncArticlesSince;
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
    public function getArticleIds(): ?array
    {
        return $this->articleIds;
    }
    /**
     * 
     *
     * @param list<string>|null $articleIds
     *
     * @return self
     */
    public function setArticleIds(?array $articleIds): self
    {
        $this->initialized['articleIds'] = true;
        $this->articleIds = $articleIds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSyncArticlesSince(): ?int
    {
        return $this->syncArticlesSince;
    }
    /**
     * 
     *
     * @param int|null $syncArticlesSince
     *
     * @return self
     */
    public function setSyncArticlesSince(?int $syncArticlesSince): self
    {
        $this->initialized['syncArticlesSince'] = true;
        $this->syncArticlesSince = $syncArticlesSince;
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