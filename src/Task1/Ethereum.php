<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Ethereum implements Currency
{
	private $dailyPrice;

	public function __construct(float $price)
	{
		$this->dailyPrice = $price;
	}
	public function getDailyPrice(): float
	{
		return $this->dailyPrice;
	}
	public function getName(): string
	{
		return "Ethereum";
	}
	public function getLogoUrl(): string
	{
		return "https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png";
	}
}