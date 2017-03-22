<?php

namespace App\Contracts;

interface DriverInterface {

	/**
	 * Get driver ID
	 * @param  int $driverId
	 * @return json object
	 */
	public function getByID($driverId);

	/**
	 * Get datatable json
	 * @return JSON Datatable json object
	 */
	public function listDrivers();

	/**
	 * Auto-complete user/customer email
	 * @param  Array $payload
	 * @return Array
	 */
	//public function save(Array $payload);

}
