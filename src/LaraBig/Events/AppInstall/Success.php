<?php

namespace Smartosc\LaraBig\Events\AppInstall;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;

class Success
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var StoreInterface
     */
    private $store;

    /**
     * Success constructor.
     *
     * @param StoreInterface $store
     */
    public function __construct(StoreInterface $store)
    {
        $this->store = $store;
    }

    /**
     * @return StoreInterface
     */
    public function getStore(): StoreInterface
    {
        return $this->store;
    }
}
