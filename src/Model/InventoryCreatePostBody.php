<?php

namespace Webhubworks\WeclappApiCore\Model;

class InventoryCreatePostBody extends \ArrayObject
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
     * @var bool
     */
    protected $createEmptyPositionsForEmptyLevels;
    /**
     * 
     *
     * @var bool
     */
    protected $dryRun;
    /**
     * 
     *
     * @var InventoryCreatePostBodyInventory
     */
    protected $inventory;
    /**
     * 
     *
     * @var string
     */
    protected $placeForArticlePositionsId;
    /**
     * 
     *
     * @var list<string>
     */
    protected $storagePlaceIds;
    /**
     * 
     *
     * @return bool
     */
    public function getCreateEmptyPositionsForEmptyLevels(): bool
    {
        return $this->createEmptyPositionsForEmptyLevels;
    }
    /**
     * 
     *
     * @param bool $createEmptyPositionsForEmptyLevels
     *
     * @return self
     */
    public function setCreateEmptyPositionsForEmptyLevels(bool $createEmptyPositionsForEmptyLevels): self
    {
        $this->initialized['createEmptyPositionsForEmptyLevels'] = true;
        $this->createEmptyPositionsForEmptyLevels = $createEmptyPositionsForEmptyLevels;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDryRun(): bool
    {
        return $this->dryRun;
    }
    /**
     * 
     *
     * @param bool $dryRun
     *
     * @return self
     */
    public function setDryRun(bool $dryRun): self
    {
        $this->initialized['dryRun'] = true;
        $this->dryRun = $dryRun;
        return $this;
    }
    /**
     * 
     *
     * @return InventoryCreatePostBodyInventory
     */
    public function getInventory(): InventoryCreatePostBodyInventory
    {
        return $this->inventory;
    }
    /**
     * 
     *
     * @param InventoryCreatePostBodyInventory $inventory
     *
     * @return self
     */
    public function setInventory(InventoryCreatePostBodyInventory $inventory): self
    {
        $this->initialized['inventory'] = true;
        $this->inventory = $inventory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlaceForArticlePositionsId(): string
    {
        return $this->placeForArticlePositionsId;
    }
    /**
     * 
     *
     * @param string $placeForArticlePositionsId
     *
     * @return self
     */
    public function setPlaceForArticlePositionsId(string $placeForArticlePositionsId): self
    {
        $this->initialized['placeForArticlePositionsId'] = true;
        $this->placeForArticlePositionsId = $placeForArticlePositionsId;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getStoragePlaceIds(): array
    {
        return $this->storagePlaceIds;
    }
    /**
     * 
     *
     * @param list<string> $storagePlaceIds
     *
     * @return self
     */
    public function setStoragePlaceIds(array $storagePlaceIds): self
    {
        $this->initialized['storagePlaceIds'] = true;
        $this->storagePlaceIds = $storagePlaceIds;
        return $this;
    }
}