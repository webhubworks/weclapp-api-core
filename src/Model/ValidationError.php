<?php

namespace Webhubworks\WeclappApiCore\Model;

class ValidationError extends \ArrayObject
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
     * semantics are dependent on the concrete validation error.
     *
     * @var list<string>|null
     */
    protected $allowed;
    /**
     * 
     *
     * @var string|null
     */
    protected $detail;
    /**
     * This provides a unique identifier indicating the concrete business error
     *
     * @var string|null
     */
    protected $errorCode;
    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     *
     * @var string|null
     */
    protected $instance;
    /**
     * 
     *
     * @var string|null
     */
    protected $location;
    /**
     * This will not change from occurrence to occurrence of the problem
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * semantics are dependent on the concrete validation error.
     *
     * @return list<string>|null
     */
    public function getAllowed(): ?array
    {
        return $this->allowed;
    }
    /**
     * semantics are dependent on the concrete validation error.
     *
     * @param list<string>|null $allowed
     *
     * @return self
     */
    public function setAllowed(?array $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }
    /**
     * 
     *
     * @param string|null $detail
     *
     * @return self
     */
    public function setDetail(?string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    /**
     * This provides a unique identifier indicating the concrete business error
     *
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * This provides a unique identifier indicating the concrete business error
     *
     * @param string|null $errorCode
     *
     * @return self
     */
    public function setErrorCode(?string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     *
     * @return string|null
     */
    public function getInstance(): ?string
    {
        return $this->instance;
    }
    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     *
     * @param string|null $instance
     *
     * @return self
     */
    public function setInstance(?string $instance): self
    {
        $this->initialized['instance'] = true;
        $this->instance = $instance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * This will not change from occurrence to occurrence of the problem
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * This will not change from occurrence to occurrence of the problem
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}