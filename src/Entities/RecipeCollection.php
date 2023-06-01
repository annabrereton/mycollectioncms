<?php

namespace App\Entities;

use DateTime;

class RecipeCollection
{
    private int $id;
    private string $imglink;
    private string $title;
    private string $description;
    private int $userId;
    private ?DateTime $timestamp;
    private ?bool $liked;

    public function __construct(int $id, string $imglink, string $title, string $description, int $userId, ?DateTime $timestamp, ?bool $liked)
    {
        $this->id = $id;
        $this->imglink = $imglink;
        $this->title = $title;
        $this->description = $description;
        $this->userId = $userId;
        $this->timestamp = $timestamp;
        $this->liked = $liked;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getImglink(): string
    {
        return $this->imglink;
    }

    /**
     * @param string $imglink
     */
    public function setImglink(string $imglink): void
    {
        $this->imglink = $imglink;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return \DateTime|null
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime|null $timestamp
     */
    public function setTimestamp(?\DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return bool|null
     */
    public function getLiked(): ?bool
    {
        return $this->liked;
    }

    /**
     * @param bool|null $liked
     */
    public function setLiked(?bool $liked): void
    {
        $this->liked = $liked;
    }
}