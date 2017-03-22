<?php

namespace App\Http\Controllers;
use App\Contracts\DriverInterface;
use Illuminate\Http\Request;

class DriverController extends Controller {

	protected $driver;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(DriverInterface $driver) {
		$this->middleware('auth');
		$this->driver = $driver;
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('home');
	}

	/**
	 * Return the view of driver list.
	 *
	 * @return view
	 */
	public function view() {
		return view('driver.view');
	}

	/**
	 * List drivers.
	 */
	public function listDrivers() {
		return $this->driver->listDrivers();
	}

	/**
	 * Get driver details by Driver id.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getByID(Request $request) {

		return $this->driver->getByID($request->input('id'));
	}
}
