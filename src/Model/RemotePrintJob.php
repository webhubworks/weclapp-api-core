<?php

namespace Webhubworks\WeclappApiCore\Model;

class RemotePrintJob extends \ArrayObject
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
    protected $id;

    /**
     * @var int
     */
    protected $createdDate;

    /**
     * @var int
     */
    protected $lastModifiedDate;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $documentId;

    /**
     * @var string
     */
    protected $printStatus;

    /**
     * @var string
     */
    protected $printerName;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $weclappOsHardwareId;

    /**
     * @var string
     */
    protected $weclappOsId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getDocumentId(): string
    {
        return $this->documentId;
    }

    public function setDocumentId(string $documentId): self
    {
        $this->initialized['documentId'] = true;
        $this->documentId = $documentId;

        return $this;
    }

    public function getPrintStatus(): string
    {
        return $this->printStatus;
    }

    public function setPrintStatus(string $printStatus): self
    {
        $this->initialized['printStatus'] = true;
        $this->printStatus = $printStatus;

        return $this;
    }

    public function getPrinterName(): string
    {
        return $this->printerName;
    }

    public function setPrinterName(string $printerName): self
    {
        $this->initialized['printerName'] = true;
        $this->printerName = $printerName;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;

        return $this;
    }

    public function getWeclappOsHardwareId(): string
    {
        return $this->weclappOsHardwareId;
    }

    public function setWeclappOsHardwareId(string $weclappOsHardwareId): self
    {
        $this->initialized['weclappOsHardwareId'] = true;
        $this->weclappOsHardwareId = $weclappOsHardwareId;

        return $this;
    }

    public function getWeclappOsId(): string
    {
        return $this->weclappOsId;
    }

    public function setWeclappOsId(string $weclappOsId): self
    {
        $this->initialized['weclappOsId'] = true;
        $this->weclappOsId = $weclappOsId;

        return $this;
    }
}
