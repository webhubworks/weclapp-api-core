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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $createdDate;
    /**
     * 
     *
     * @var int
     */
    protected $lastModifiedDate;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $authorName;
    /**
     * 
     *
     * @var string
     */
    protected $authorUserId;
    /**
     * 
     *
     * @deprecated
     *
     * @var string
     */
    protected $authorUserUsername;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $entityId;
    /**
     * 
     *
     * @var string
     */
    protected $entityName;
    /**
     * 
     *
     * @var string
     */
    protected $htmlComment;
    /**
     * 
     *
     * @var int
     */
    protected $lastEditDate;
    /**
     * 
     *
     * @var string
     */
    protected $parentCommentId;
    /**
     * 
     *
     * @var bool
     */
    protected $privateComment;
    /**
     * 
     *
     * @var bool
     */
    protected $publicComment;
    /**
     * 
     *
     * @var list<OnlyId>
     */
    protected $recipientUsers;
    /**
     * 
     *
     * @var bool
     */
    protected $solution;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCreatedDate(): int
    {
        return $this->createdDate;
    }
    /**
     * 
     *
     * @param int $createdDate
     *
     * @return self
     */
    public function setCreatedDate(int $createdDate): self
    {
        $this->initialized['createdDate'] = true;
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastModifiedDate(): int
    {
        return $this->lastModifiedDate;
    }
    /**
     * 
     *
     * @param int $lastModifiedDate
     *
     * @return self
     */
    public function setLastModifiedDate(int $lastModifiedDate): self
    {
        $this->initialized['lastModifiedDate'] = true;
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->authorName;
    }
    /**
     * 
     *
     * @param string $authorName
     *
     * @return self
     */
    public function setAuthorName(string $authorName): self
    {
        $this->initialized['authorName'] = true;
        $this->authorName = $authorName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorUserId(): string
    {
        return $this->authorUserId;
    }
    /**
     * 
     *
     * @param string $authorUserId
     *
     * @return self
     */
    public function setAuthorUserId(string $authorUserId): self
    {
        $this->initialized['authorUserId'] = true;
        $this->authorUserId = $authorUserId;
        return $this;
    }
    /**
     * 
     *
     * @deprecated
     *
     * @return string
     */
    public function getAuthorUserUsername(): string
    {
        return $this->authorUserUsername;
    }
    /**
     * 
     *
     * @param string $authorUserUsername
     *
     * @deprecated
     *
     * @return self
     */
    public function setAuthorUserUsername(string $authorUserUsername): self
    {
        $this->initialized['authorUserUsername'] = true;
        $this->authorUserUsername = $authorUserUsername;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId): self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityName(): string
    {
        return $this->entityName;
    }
    /**
     * 
     *
     * @param string $entityName
     *
     * @return self
     */
    public function setEntityName(string $entityName): self
    {
        $this->initialized['entityName'] = true;
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlComment(): string
    {
        return $this->htmlComment;
    }
    /**
     * 
     *
     * @param string $htmlComment
     *
     * @return self
     */
    public function setHtmlComment(string $htmlComment): self
    {
        $this->initialized['htmlComment'] = true;
        $this->htmlComment = $htmlComment;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastEditDate(): int
    {
        return $this->lastEditDate;
    }
    /**
     * 
     *
     * @param int $lastEditDate
     *
     * @return self
     */
    public function setLastEditDate(int $lastEditDate): self
    {
        $this->initialized['lastEditDate'] = true;
        $this->lastEditDate = $lastEditDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentCommentId(): string
    {
        return $this->parentCommentId;
    }
    /**
     * 
     *
     * @param string $parentCommentId
     *
     * @return self
     */
    public function setParentCommentId(string $parentCommentId): self
    {
        $this->initialized['parentCommentId'] = true;
        $this->parentCommentId = $parentCommentId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrivateComment(): bool
    {
        return $this->privateComment;
    }
    /**
     * 
     *
     * @param bool $privateComment
     *
     * @return self
     */
    public function setPrivateComment(bool $privateComment): self
    {
        $this->initialized['privateComment'] = true;
        $this->privateComment = $privateComment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPublicComment(): bool
    {
        return $this->publicComment;
    }
    /**
     * 
     *
     * @param bool $publicComment
     *
     * @return self
     */
    public function setPublicComment(bool $publicComment): self
    {
        $this->initialized['publicComment'] = true;
        $this->publicComment = $publicComment;
        return $this;
    }
    /**
     * 
     *
     * @return list<OnlyId>
     */
    public function getRecipientUsers(): array
    {
        return $this->recipientUsers;
    }
    /**
     * 
     *
     * @param list<OnlyId> $recipientUsers
     *
     * @return self
     */
    public function setRecipientUsers(array $recipientUsers): self
    {
        $this->initialized['recipientUsers'] = true;
        $this->recipientUsers = $recipientUsers;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSolution(): bool
    {
        return $this->solution;
    }
    /**
     * 
     *
     * @param bool $solution
     *
     * @return self
     */
    public function setSolution(bool $solution): self
    {
        $this->initialized['solution'] = true;
        $this->solution = $solution;
        return $this;
    }
}