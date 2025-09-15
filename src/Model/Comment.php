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
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorName;
    /**
     * 
     *
     * @var string|null
     */
    protected $authorUserId;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityName;
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlComment;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastEditDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentCommentId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $privateComment;
    /**
     * 
     *
     * @var bool|null
     */
    protected $publicComment;
    /**
     * 
     *
     * @var list<OnlyId>|null
     */
    protected $recipientUsers;
    /**
     * 
     *
     * @var bool|null
     */
    protected $solution;
    /**
     * 
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreatedDate(): ?int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int|null $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastModifiedDate(): ?int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int|null $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(?int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }
    /**
     * 
     *
     * @param string|null $authorName
     *
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->initialized['authorName'] = true;
        $this->authorName = $authorName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthorUserId(): ?string
    {
        return $this->authorUserId;
    }
    /**
     * 
     *
     * @param string|null $authorUserId
     *
     * @return self
     */
    public function setAuthorUserId(?string $authorUserId): self
    {
        $this->initialized['authorUserId'] = true;
        $this->authorUserId = $authorUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityName(): ?string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string|null $entityName
     *
     * @return self
     */
    public function setEntityName(?string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHtmlComment(): ?string
    {
        return $this->htmlComment;
    }
    /**
     * 
     *
     * @param string|null $htmlComment
     *
     * @return self
     */
    public function setHtmlComment(?string $htmlComment): self
    {
        $this->initialized['htmlComment'] = true;
        $this->htmlComment = $htmlComment;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastEditDate(): ?int
    {
        return $this->lastEditDate;
    }
    /**
     * 
     *
     * @param int|null $lastEditDate
     *
     * @return self
     */
    public function setLastEditDate(?int $lastEditDate): self
    {
        $this->initialized['lastEditDate'] = true;
        $this->lastEditDate = $lastEditDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentCommentId(): ?string
    {
        return $this->parentCommentId;
    }
    /**
     * 
     *
     * @param string|null $parentCommentId
     *
     * @return self
     */
    public function setParentCommentId(?string $parentCommentId): self
    {
        $this->initialized['parentCommentId'] = true;
        $this->parentCommentId = $parentCommentId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrivateComment(): ?bool
    {
        return $this->privateComment;
    }
    /**
     * 
     *
     * @param bool|null $privateComment
     *
     * @return self
     */
    public function setPrivateComment(?bool $privateComment): self
    {
        $this->initialized['privateComment'] = true;
        $this->privateComment = $privateComment;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPublicComment(): ?bool
    {
        return $this->publicComment;
    }
    /**
     * 
     *
     * @param bool|null $publicComment
     *
     * @return self
     */
    public function setPublicComment(?bool $publicComment): self
    {
        $this->initialized['publicComment'] = true;
        $this->publicComment = $publicComment;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>|null
     */
    public function getRecipientUsers(): ?array
    {
        return $this->recipientUsers;
    }
    /**
     * 
     *
     * @param list<OnlyId>|null $recipientUsers
     *
     * @return self
     */
    public function setRecipientUsers(?array $recipientUsers): self
    {
        $this->initialized['recipientUsers'] = true;
        $this->recipientUsers = $recipientUsers;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSolution(): ?bool
    {
        return $this->solution;
    }
    /**
     * 
     *
     * @param bool|null $solution
     *
     * @return self
     */
    public function setSolution(?bool $solution): self
    {
        $this->initialized['solution'] = true;
        $this->solution = $solution;
        return $this;
    }
}