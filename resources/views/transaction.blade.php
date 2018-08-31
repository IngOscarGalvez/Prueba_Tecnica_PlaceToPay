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
        <form action="/trasaction" method="post">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">bankCode</span>
            </div>
            <input type="text" class="form-control" name="bankCode" max="4" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">bankInterface</span>
            </div>
            <input type="text" class="form-control" name="bankInterface" max="1" required>
        </div>
         <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">reference</span>
            </div>
            <input type="text" class="form-control" name="reference" max="32" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">description</span>
            </div>
            <input type="text" class="form-control" name="description" max="255" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">languaje</span>
            </div>
            <select class="custom-select" id="inputGroupSelect01" required>
                <option selected>Choose...</option>
                <option value="1">ES</option>
                <option value="2">EN</option>
                <option value="3">FR</option>
            </select>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">currency</span>
            </div>
            <input type="text" class="form-control" name="currency"  pattern="[A-Z]{3}" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">totalAmount</span>
            </div>
            <input type="text" class="form-control" name="totalAmount" pattern="[1-9]{1,16}" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">taxAmount</span>
            </div>
            <input type="text" class="form-control" name="taxAmount" pattern="[1-9]{1,4}" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">devolutionBase</span>
            </div>
            <input type="text" class="form-control" name="devolutionBase" pattern="[1-9]{1,20}" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">tipAmount</span>
            </div>
            <input type="text" class="form-control" name="tipAmount" pattern="[1-9]{0,20}" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">ipAddress</span>
            </div>
            <input type="text" class="form-control" name="ipAddress" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">userAgent</span>
            </div>
            <input type="text" class="form-control" name="userAgent" required>
        </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection