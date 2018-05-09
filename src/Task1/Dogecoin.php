<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency
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
		return "Dogecoin";
	}
	public function getLogoUrl(): string
	{
		return "https://s2.coinmarketcap.com/static/img/coins/32x32/74.png";
	}
}