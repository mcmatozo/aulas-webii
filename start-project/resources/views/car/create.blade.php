@extends('templates.main')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">CADASTRO DE CARROS</legend>
                        <form action="{{ route('car.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="color-name" class="col-form-label">Preencha com:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Placa</i></span>
                                    <input type="text" name="plate" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Modelo</i></span>
                                    <select name="mold_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>
                                        <option value=""></option>
                                        @foreach($mold as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == old('mold_id') ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Cor</i></span>
                                <select name="color_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>
                                    <option value=""></option>
                                    @foreach($color as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == old('color_id') ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Estado</i></span>
                            <select name="state_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>
                                <option value=""></option>
                                @foreach($state as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == old('state_id') ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                        </div>
                        <button type="submit" class="btn btn-block" style="background-color: #FFCBDB; color: 	#000000; border-color: #FF69B4;">Salvar</button>
                        <a href="{{ route('mold.index') }}" class="btn btn-block" style="background-color: #000000; color: #FFFFFF; border-color: #000000;">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
