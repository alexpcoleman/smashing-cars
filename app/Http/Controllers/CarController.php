<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    $car = new \App\Car;
    $data = ['car' => $car];
    return view('cars.create', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request) {
    $car = new \App\Car;

    // populate the model with the form data
    $car->make = $request->make;
    $car->model = $request->model;
    $car->produced_on = $request->produced_on;

    // save the model to create a new object in the database
    if (!$car->save()) {
      $errors = $car->getErrors();
      return redirect()
        ->route('cars.create')
        ->with('errors', $errors)
        ->withInput();
    }

    // success!
    return redirect()
      ->route('cars.create')
      ->with('message', 'Your '. $car->make . ' ' . $car->model . ' from ' . $car->produced_on . ' has been created!');
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
   * @param  Request  $request
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
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
