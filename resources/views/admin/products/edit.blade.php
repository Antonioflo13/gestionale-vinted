@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="my-5">Modifica Prodotto</h1>
        <form class="my-5" action="{{ route('admin.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="d-flex flex-wrap justify-content-evenly">
                <div class="mb-3 mx-2 w-25">
                  <label for="name_product" class="form-label">Nome Prodotto</label>
                  <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="name_product" placeholder="Inserisci il nome prodotto" name="name_product" value="{{ old('name_product', $product->name_product) }}">
                    @error('name_product')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="brand" class="form-label">Brand</label>
                  <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" placeholder="Inserisci il brand" value="{{ old('brand', $product->brand ) }}">
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="typology" class="form-label">Tipologia prodotto</label>
                  <input type="text" class="form-control @error('typology') is-invalid @enderror" id="typology" name="typology" placeholder="Inserisci la tipologia" value="{{ old('typology', $product->typology) }}">
                    @error('typology')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="sale_price" class="form-label">Prezzo di vendita</label>
                  <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" placeholder="Inserisci il prezzo di vendita" value="{{ old('sale_price', $product->revenue->sale_price) }}">
                    @error('sale_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="purchase_price" class="form-label">Prezzo di acquisto</label>
                  <input type="text" class="form-control @error('purchase_price') is-invalid @enderror" id="purchase_price" name="purchase_price" placeholder="Inserisci il prezzo di acquisto" value="{{ old('purchase_price', $product->revenue->purchase_price) }}">
                    @error('purchase_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="typology" class="form-label">Tipologia di costo</label>
                  <input type="text" class="form-control @error('typology') is-invalid @enderror" id="typology" name="typology" placeholder="Inserisci la tipologia di costo" value="{{ old('typology', $product->cost->typology) }}">
                    @error('typology')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="cost_price" class="form-label">Valore del costo</label>
                  <input type="text" class="form-control @error('cost_price') is-invalid @enderror" id="cost_price" name="cost_price" placeholder="Inserisci il valore del costo" value="{{ old('cost_price', $product->cost->cost_price) }}">
                    @error('cost_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="label_code" class="form-label">Codice spedizione</label>
                  <input type="text" class="form-control @error('label_code') is-invalid @enderror" id="label_code" name="label_code" placeholder="Inserisci il codice spedizione" value="{{ old('label_code', $product->shipment->label_code) }}">
                    @error('label_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_name" class="form-label">Nome Proprietario</label>
                  <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name" name="owner_name" placeholder="Inserisci il nome del proprietario" value="{{ old('owner_name', $product->owner->owner_name) }}">
                    @error('owner_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_surname" class="form-label">Cognome Proprietario</label>
                  <input type="text" class="form-control @error('owner_surname') is-invalid @enderror" id="owner_surname" name="owner_surname" placeholder="Inserisci il cognome del proprietario" value="{{ old('owner_surname', $product->owner->owner_surname) }}">
                    @error('owner_surname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_percentage" class="form-label">Percentuale Proprietario</label>
                  <input type="text" class="form-control @error('owner_percentage') is-invalid @enderror" id="owner_percentage" name="owner_percentage" placeholder="Inserisci il valore percentuale" value="{{ old('owner_percentage', $product->owner->owner_percentage) }}">
                    @error('owner_percentage')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="username" class="form-label">Username Cliente</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="owner_percentage" name="username" placeholder="Inserisci username Cliente" value="{{ old('username', $product->client->username) }}">
                    @error('username')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary mt-3 mx-2">Modifica Prodotto</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3 mx-2">Torna alla lista prodotti</a>
          </form>
    </section>
@endsection