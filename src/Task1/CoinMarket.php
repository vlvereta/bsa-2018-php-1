<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies;

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }
    public function maxPrice(): float
    {
        $mPrice = null;

        foreach ($this->currencies as $c) {
            $mPrice = $c->getDailyPrice() > $mPrice ? 
                $c->getDailyPrice() : $mPrice;
        }
        return $mPrice;
    }
    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}