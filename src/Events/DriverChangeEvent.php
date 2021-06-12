<?php

namespace Shetabit\Payment\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Shetabit\Multipay\Contracts\DriverInterface;

class DriverChangeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $driver;

    /**
     * InvoiceVerifiedEvent constructor.
     *
     * @param DriverInterface $driver
     */
    public function __construct(DriverInterface $driver)
    {
        $this->driver = $driver;
    }
}
