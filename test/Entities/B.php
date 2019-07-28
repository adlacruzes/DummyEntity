<?php

declare(strict_types=1);

namespace DummyEntity\Test\Entities;

use DateTime;

class B
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string | null
     */
    private $optional;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * B constructor.
     * @param int $id
     * @param string|null $optional
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
     * @return string|null
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
