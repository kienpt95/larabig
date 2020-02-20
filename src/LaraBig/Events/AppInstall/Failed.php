<?php

namespace Smartosc\LaraBig\Events\AppInstall;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class Failed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $message;

    /**
     * Failed constructor.
     *
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}
