<?php

namespace DummyEntity\Test\Entities;

use DateTime;

class B
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var String | null
     */
    private $optional;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * B constructor.
     * @param int $id
     * @param null|String $optional
     * @param DateTime $createdAt
     */
    public function __construct($id, $optional, DateTime $createdAt)
    {
        $this->id = $id;
        $this->optional = $optional;
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|String
     */
    public function getOptional()
    {
        return $this->optional;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
