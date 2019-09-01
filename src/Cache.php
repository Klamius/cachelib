<?php
declare(strict_types=1);

namespace Yanni\Cache;

use Psr\SimpleCache\CacheInterface;

trait Cache
{
    /**
     * @var CacheInterface
     */
    private $cache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function set($key, $value, $ttl = null): void
    {
        $this->cache->set($key, $value, $ttl);
    }

    public function get($key, $default = null)
    {
        return $this->cache->get($key, $default);
    }
}
