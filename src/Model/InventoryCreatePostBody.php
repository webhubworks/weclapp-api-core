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
     * @var bool|null
     */
    protected $createEmptyPositionsForEmptyLevels;

    /**
     * @var bool|null
     */
    protected $dryRun;

    /**
     * @var InventoryCreatePostBodyInventory|null
     */
    protected $inventory;

    /**
     * @var string|null
     */
    protected $placeForArticlePositionsId;

    /**
     * @var list<string>|null
     */
    protected $storagePlaceIds;

    public function getCreateEmptyPositionsForEmptyLevels(): ?bool
    {
        return $this->createEmptyPositionsForEmptyLevels;
    }

    public function setCreateEmptyPositionsForEmptyLevels(?bool $createEmptyPositionsForEmptyLevels): self
    {
        $this->initialized['createEmptyPositionsForEmptyLevels'] = true;
        $this->createEmptyPositionsForEmptyLevels = $createEmptyPositionsForEmptyLevels;

        return $this;
    }

    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }

    public function setDryRun(?bool $dryRun): self
    {
        $this->initialized['dryRun'] = true;
        $this->dryRun = $dryRun;

        return $this;
    }

    public function getInventory(): ?InventoryCreatePostBodyInventory
    {
        return $this->inventory;
    }

    public function setInventory(?InventoryCreatePostBodyInventory $inventory): self
    {
        $this->initialized['inventory'] = true;
        $this->inventory = $inventory;

        return $this;
    }

    public function getPlaceForArticlePositionsId(): ?string
    {
        return $this->placeForArticlePositionsId;
    }

    public function setPlaceForArticlePositionsId(?string $placeForArticlePositionsId): self
    {
        $this->initialized['placeForArticlePositionsId'] = true;
        $this->placeForArticlePositionsId = $placeForArticlePositionsId;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getStoragePlaceIds(): ?array
    {
        return $this->storagePlaceIds;
    }

    /**
     * @param  list<string>|null  $storagePlaceIds
     */
    public function setStoragePlaceIds(?array $storagePlaceIds): self
    {
        $this->initialized['storagePlaceIds'] = true;
        $this->storagePlaceIds = $storagePlaceIds;

        return $this;
    }
}
