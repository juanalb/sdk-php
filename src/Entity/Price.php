<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Entity;

use BadFunctionCallException;
use PlugAndPay\Sdk\Enum\Interval;

class Price
{
    private int $id;
    private ?PriceFirst $first;
    private ?Interval $interval;
    private ?bool $suggested;
    private int $nr_of_cycles;
    private ?PriceOriginal $original;
    private ?PriceRegular $regular;
    /** @var PriceTier[] */
    private array $tiers;

    public function id(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function first(): ?PriceFirst
    {
        return $this->first;
    }

    public function setFirst(?PriceFirst $first): self
    {
        $this->first = $first;
        return $this;
    }

    public function interval(): ?Interval
    {
        return $this->interval;
    }

    public function setInterval(?Interval $interval): self
    {
        $this->interval = $interval;
        return $this;
    }

    public function isSuggested(): ?bool
    {
        return $this->suggested;
    }

    public function setSuggested(?bool $suggested): self
    {
        $this->suggested = $suggested;
        return $this;
    }

    public function nrOfCycles(): int
    {
        return $this->nr_of_cycles;
    }

    public function setNrOfCycles(int $nrOfCycles): self
    {
        $this->nr_of_cycles = $nrOfCycles;
        return $this;
    }

    public function original(): ?PriceOriginal
    {
        return $this->original;
    }

    public function setOriginal(?PriceOriginal $original): self
    {
        $this->original = $original;
        return $this;
    }

    public function regular(): ?PriceRegular
    {
        return $this->regular;
    }

    public function setRegular(?PriceRegular $regular): self
    {
        $this->regular = $regular;
        return $this;
    }

    public function tiers(): array
    {
        return $this->tiers;
    }

    public function setTiers(array $tiers): self
    {
        $this->tiers = $tiers;
        return $this;
    }

    public function isset(string $field): bool
    {
        if (!property_exists($this, $field)) {
            throw new BadFunctionCallException("Field '$field' does not exists");
        }

        return isset($this->{$field});
    }
}
