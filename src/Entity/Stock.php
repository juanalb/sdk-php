<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Entity;

use BadFunctionCallException;

class Stock
{
    private bool $enabled;
    private bool $hidden;
    private ?int $value;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): Stock
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function isHidden(): bool
    {
        return $this->hidden;
    }

    public function setHidden(bool $hidden): Stock
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function value(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): Stock
    {
        $this->value = $value;
        return $this;
    }

    public function isset(string $field): bool
    {
        if (!property_exists($this, $field)) {
            throw new BadFunctionCallException("Method '$field' does not exists");
        }
        return isset($this->{$field});
    }
}
