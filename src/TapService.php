<?php

namespace Alaa\TapPayment;

use Alaa\TapPayment\Services\Charge;
use GuzzleHttp\Exception\GuzzleException;

class TapService
{
	/**
	 * @return Charge
	 */
	public function createCharge(): Charge
    {
		return new Charge();
	}


	/**
	 * @param $id
	 *
	 * @return mixed
	 * @throws GuzzleException
	 */
	public function findCharge( $id )
	{
		$charge = new Charge( $id );

		return $charge->find();
	}
}