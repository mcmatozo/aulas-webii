@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <legend class="text-center">CARRO {{ $car->name}}</legend>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Placa</i></span>
                                <input type="text" name="name" value="{{$car->plate}}" disabled class="form-control" id="plate-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Cor</i></span>
                                    <input type="text" name="name"  value="{{ $car->color->name }}" disabled class="form-control" id="color-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Modelo</i></span>
                                        <input type="text" name="name" value="{{ $car->mold->name }}" disabled class="form-control" id="mold-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Estado</i></span>
                                            <input type="text" name="name" value="{{ $car->state->name }}" disabled class="form-control" id="state-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                        </div>
                        <a href="{{ route('car.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
