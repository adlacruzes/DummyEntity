<?php

declare(strict_types=1);

namespace DummyEntity\Test\Entities;

use DateTime;

class A
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $isEnabled;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * A constructor.
     * @param int $id
     * @param string $name
     * @param bool $isEnabled
     * @param DateTime $createdAt
     */
    public function __construct($id, $name, $isEnabled, DateTime $createdAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->isEnabled = $isEnabled;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
