<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $price;
    private $currencies;

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }
    public function maxPrice(): float
    {
        foreach ($this->currencies as $c) {
            $this->price = $c->getDailyPrice() > $this->price ? 
                $c->getDailyPrice() : $this->price;
        }
        return $this->price;
    }
    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}