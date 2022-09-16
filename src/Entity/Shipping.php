<?php

declare(strict_types=1);

namespace PlugAndPay\Sdk\Entity;

class Shipping
{
    private float $amount;
    private float $amountWithTax;

    public function amount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): Shipping
    {
        $this->amount = $amount;
        return $this;
    }

    public function amountWithTax(): float
    {
        return $this->amountWithTax;
    }

    public function setAmountWithTax(float $amountWithTax): Shipping
    {
        $this->amountWithTax = $amountWithTax;
        return $this;
    }
}