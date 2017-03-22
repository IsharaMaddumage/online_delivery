<?php

namespace App\Repositories;

use App\Contracts\DriverInterface;
use App\Driver;
use Datatables;

class EloquentDriverRepository implements DriverInterface {

	/**
	 * Create a new repository instance.
	 *
	 * @return void
	 */
	public function __construct() {}

	/**
	 * Get driver datatable json
	 * @return JSON Datatable json object
	 */
	function listDrivers() {
		$driver = Driver::select(array(
			'id',
			'name',
			'address',
			'age',

		));

		return \Datatables::of($driver)
			->make(true);

	}

	/**
	 * Get driver details by driver ID
	 * @param  int $driverId Driver ID
	 * @return json object
	 */
	function getByID($driverId) {
		$driver = Driver::select(array(
			'name',
			'address',
			'age',

		))->where('id', '=', $driverId)->first();

		return \Response::json($driver);

	}

}