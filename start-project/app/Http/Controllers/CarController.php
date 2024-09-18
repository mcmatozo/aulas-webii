<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Mold;
use App\Models\Color;
use App\Models\State;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Car::with('mold', 'color', 'state')->get();

        return view('car.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mold = Mold::all();
        $color = Color::all();
        $state = State::all();

        return view('car.create', compact('mold','color','state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::find ($request->car);

        $car = new Car();
        $car->plate = $request->plate;
        $car->mold_id = $request->mold_id;
        $car->state_id = $request->state_id;
        $car->color_id = $request->color_id;
        $car->save();
        return redirect()->route('car.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        if(isset($car)) return view('car.show', compact(['car']));

        return 'ERROR';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        if(isset($car)) return view('car.edit', compact(['car']));

        return "ERRO";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function report($id) {

        $car = Car::where('car_id', $id)->get();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('car.report', compact('car'))->render());
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("relatorio-horas-turma.pdf", array("Attachment" => false));
    }

    }


