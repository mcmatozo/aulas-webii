@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">EDIÇÃO DE CARROS</legend>
                        <form action="{{ route('mold.update', $mold->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="car-name" class="col-form-label">Preencha com:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Placa</i></span>
                                    <input type="text" name="name" value="{{ $mold->name }}" class="form-control" id="mold-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Cor</i></span>
                                    <input type="text" name="name" value="{{ $color->name }}" class="form-control" id="cor-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Modelo</i></span>
                                    <input type="text" name="name" value="{{ $mold->name }}" class="form-control" id="mold-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>      
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Marca</i></span>
                                <select name="brand_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>

                                    @foreach($car as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == old('car_id') ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Editar</button>
                            <a href="{{ route('car.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
