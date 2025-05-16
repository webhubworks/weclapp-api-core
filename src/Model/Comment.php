<?php

namespace Webhubworks\WeclappApiCore\Model;

class Comment extends \ArrayObject
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
     * @var string|null
     */
    protected $id;

    /**
     * @var int|null
     */
    protected $createdDate;

    /**
     * @var int|null
     */
    protected $lastModifiedDate;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $authorName;

    /**
     * @var string|null
     */
    protected $authorUserId;

    /**
     * @deprecated
     *
     * @var string|null
     */
    protected $authorUserUsername;

    /**
     * @var string|null
     */
    protected $comment;

    /**
     * @var string|null
     */
    protected $entityId;

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var string|null
     */
    protected $htmlComment;

    /**
     * @var int|null
     */
    protected $lastEditDate;

    /**
     * @var string|null
     */
    protected $parentCommentId;

    /**
     * @var bool|null
     */
    protected $privateComment;

    /**
     * @var bool|null
     */
    protected $publicComment;

    /**
     * @var list<OnlyId>|null
     */
    protected $recipientUsers;

    /**
     * @var bool|null
     */
    protected $solution;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }

    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }

    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(?string $authorName): self
    {
        $this->initialized['authorName'] = true;
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorUserId(): ?string
    {
        return $this->authorUserId;
    }

    public function setAuthorUserId(?string $authorUserId): self
    {
        $this->initialized['authorUserId'] = true;
        $this->authorUserId = $authorUserId;

        return $this;
    }

    /**
     * @deprecated
     */
    public function getAuthorUserUsername(): ?string
    {
        return $this->authorUserUsername;
    }

    /**
     * @deprecated
     */
    public function setAuthorUserUsername(?string $authorUserUsername): self
    {
        $this->initialized['authorUserUsername'] = true;
        $this->authorUserUsername = $authorUserUsername;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;

        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;

        return $this;
    }

    public function getHtmlComment(): ?string
    {
        return $this->htmlComment;
    }

    public function setHtmlComment(?string $htmlComment): self
    {
        $this->initialized['htmlComment'] = true;
        $this->htmlComment = $htmlComment;

        return $this;
    }

    public function getLastEditDate(): ?int
    {
        return $this->lastEditDate;
    }

    public function setLastEditDate(?int $lastEditDate): self
    {
        $this->initialized['lastEditDate'] = true;
        $this->lastEditDate = $lastEditDate;

        return $this;
    }

    public function getParentCommentId(): ?string
    {
        return $this->parentCommentId;
    }

    public function setParentCommentId(?string $parentCommentId): self
    {
        $this->initialized['parentCommentId'] = true;
        $this->parentCommentId = $parentCommentId;

        return $this;
    }

    public function getPrivateComment(): ?bool
    {
        return $this->privateComment;
    }

    public function setPrivateComment(?bool $privateComment): self
    {
        $this->initialized['privateComment'] = true;
        $this->privateComment = $privateComment;

        return $this;
    }

    public function getPublicComment(): ?bool
    {
        return $this->publicComment;
    }

    public function setPublicComment(?bool $publicComment): self
    {
        $this->initialized['publicComment'] = true;
        $this->publicComment = $publicComment;

        return $this;
    }

    /**
     * @return list<OnlyId>|null
     */
    public function getRecipientUsers(): ?array
    {
        return $this->recipientUsers;
    }

    /**
     * @param  list<OnlyId>|null  $recipientUsers
     */
    public function setRecipientUsers(?array $recipientUsers): self
    {
        $this->initialized['recipientUsers'] = true;
        $this->recipientUsers = $recipientUsers;

        return $this;
    }

    public function getSolution(): ?bool
    {
        return $this->solution;
    }

    public function setSolution(?bool $solution): self
    {
        $this->initialized['solution'] = true;
        $this->solution = $solution;

        return $this;
    }
}
