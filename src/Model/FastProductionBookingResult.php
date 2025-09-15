<?php

namespace Webhubworks\WeclappApiCore\Model;

class FastProductionBookingResult extends \ArrayObject
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
    protected $message;
    /**
     * 
     *
     * @var bool|null
     */
    protected $success;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
}