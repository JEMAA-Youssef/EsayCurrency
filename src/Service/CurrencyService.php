<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

use Psr\Cache\CacheItemPoolInterface;

class CurrencyService
{
    public function __construct(
        private HttpClientInterface $client,
        private \Psr\Cache\CacheItemPoolInterface $cache
    ) {}


    public function getSymbols(): array
    {
        $item = $this->cache->getItem('currency.symbols');

        if (!$item->isHit()) {
            $response = $this->client->request('GET', 'https://api.exchangerate.host/symbols');
            $data = $response->toArray();
            $symbols = $data['symbols'] ?? [];

            $item->set($symbols);
            $item->expiresAfter(86400); // 24 heures
            $this->cache->save($item);
        }

        return $item->get();
    }
}
