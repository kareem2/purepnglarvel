<?php
namespace App\DomainChecker;
use Cache;
use Illuminate\Support\Collection;
/**
* 
*/
class CacheHelper
{


	private $cache_elements_size;


	public function __construct(){
		$this->cache_elements_size = config('custom.cache_size');
	}
	public function addToUpDomains($domain){
		$this->addToCache($domain, 'up_domains');
	}

	public function addToDownDomains($domain){
		$this->addToCache($domain, 'down_domains');
	}

	public function addToOutageDomains($domain){
		$this->addToCache($domain, 'outage_domains');
	}

	public function addToCache($item, $cache_item){

		if(!Cache::has($cache_item)){			
			$items = collect([]);
			$items->push($item);

			Cache::forever($cache_item, $items);
		}else{
			$items = Cache::get($cache_item);

			$items = $items->filter(function ($d, $key) use ($domain) {
			    return $d->name !== $item->name;
			})->prepend($item);

			$items->splice($this->cache_elements_size[$cache_item]);

			Cache::forever($cache_item, $items->values());
			
		}		
	}


}

