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
        if (empty($this->currencies)) {
            return 0.0;
        } else {
            $mPrice = $this->currencies[0]->getDailyPrice();
            foreach ($this->currencies as $c) {
                $mPrice = $c->getDailyPrice() > $mPrice ? 
                $c->getDailyPrice() : $mPrice;
            }
            return $mPrice;
        }

    }
    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}