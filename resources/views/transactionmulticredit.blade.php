@extends('layouts.app')

@section('content')
    <div class="container col-md-4">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/trasactionMultiCredit" method="post">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">bankCode</span>
            </div>
            <input type="text" class="form-control" name="bankCode" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">bankInterface</span>
            </div>
            <input type="text" class="form-control" name="bankInterface" aria-describedby="nombreHelp" required>
        </div>
         <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">reference</span>
            </div>
            <input type="text" class="form-control" name="reference" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">description</span>
            </div>
            <input type="text" class="form-control" name="description" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">languaje</span>
            </div>
            <input type="text" class="form-control" name="languaje" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">currency</span>
            </div>
            <input type="text" class="form-control" name="currency" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">totalAmount</span>
            </div>
            <input type="text" class="form-control" name="totalAmount" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">taxAmount</span>
            </div>
            <input type="text" class="form-control" name="taxAmount" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">devolutionBase</span>
            </div>
            <input type="text" class="form-control" name="devolutionBase" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">tipAmount</span>
            </div>
            <input type="text" class="form-control" name="tipAmount" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">ipAddress</span>
            </div>
            <input type="text" class="form-control" name="ipAddress" aria-describedby="nombreHelp" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">userAgent</span>
            </div>
            <input type="text" class="form-control" name="userAgent" aria-describedby="nombreHelp" required>
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection