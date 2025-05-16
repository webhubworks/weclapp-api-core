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
     * @var list<string>
     */
    protected $allowed;

    /**
     * @var string
     */
    protected $detail;

    /**
     * This provides a unique identifier indicating the concrete business error
     *
     * @var string
     */
    protected $errorCode;

    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     *
     * @var string
     */
    protected $instance;

    /**
     * @var string
     */
    protected $location;

    /**
     * This will not change from occurrence to occurrence of the problem
     *
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * semantics are dependent on the concrete validation error.
     *
     * @return list<string>
     */
    public function getAllowed(): array
    {
        return $this->allowed;
    }

    /**
     * semantics are dependent on the concrete validation error.
     *
     * @param  list<string>  $allowed
     */
    public function setAllowed(array $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;

        return $this;
    }

    public function getDetail(): string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;

        return $this;
    }

    /**
     * This provides a unique identifier indicating the concrete business error
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * This provides a unique identifier indicating the concrete business error
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

    /**
     * In weclapp, this is the name of the affected parameter or the relative URI to the affected entity.
     */
    public function setInstance(string $instance): self
    {
        $this->initialized['instance'] = true;
        $this->instance = $instance;

        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * This will not change from occurrence to occurrence of the problem
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * This will not change from occurrence to occurrence of the problem
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
