<?php

namespace DummyEntity\Test\Entities;

use DateTime;

class C
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
     * @var DateTime | null
     */
    private $createdAt;

    /**
     * B constructor.
     * @param int $id
     * @param null|String $optional
     * @param DateTime $createdAt
     */
    public function __construct($id, $optional, DateTime $createdAt = null)
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
     * @return null|DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
