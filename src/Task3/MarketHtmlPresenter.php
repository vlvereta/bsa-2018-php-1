<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
    	$page = '';
    	$currencies = $market->getCurrencies();

    	foreach ($currencies as $currency) {
    		$page .= '<img src="' . $currency->getLogoUrl() . '">';
    		$page .= $currency->getName() . ': ' . $currency->getDailyPrice();
    	}
    	return $page;
    }
}