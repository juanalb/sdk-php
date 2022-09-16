<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Entity;

use DateTimeImmutable;

class Comment
{
    private DateTimeImmutable $createdAt;
    private int $id;
    private DateTimeImmutable $updatedAt;
    private string $value;

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): Comment
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function setId(int $id): Comment
    {
        $this->id = $id;
        return $this;
    }

    public function updatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeImmutable $updatedAt): Comment
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Comment
    {
        $this->value = $value;
        return $this;
    }
}
