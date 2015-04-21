<?php namespace LaravelNotificationApp\Http\Controllers\criminal;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use LaravelNotificationApp\Http\Requests;
use LaravelNotificationApp\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlansController extends Controller {


    public function __construct()
    {
        //if user not logged go to login page
        $this->middleware('auth');

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getChoose()
    {

        return view('plans');
	}

    /**
     * get response from stripe
     */
    public function postChoose(){

        //dd(Input::all());
        $token = Input::get('stripeToken');
        $plan = Input::get('plan');
        Auth::user()->subscription($plan)->create($token);

        return view('plans')->withMessage('Transaction successful')->withPlan($plan);

     }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
