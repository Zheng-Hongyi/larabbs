<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2018/12/4
 * Time: 4:35 PM
 */

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    // 在保存时清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}