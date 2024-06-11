<?php

namespace Alaa\TapPayment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TapPayment
 *
 * @package Alaa\TapPayment\Facade
 *
 * @method static \Alaa\TapPayment\Services\Charge createCharge()
 * @method static \Alaa\TapPayment\Resources\Invoice findCharge()
 */
class TapPayment extends Facade
{
	protected static function getFacadeAccessor(): string
    {
		return 'tap-payment';
	}
}