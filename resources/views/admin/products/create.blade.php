@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="my-5">Crea Prodotto</h1>
        <form class="my-5" action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="d-flex flex-wrap justify-content-evenly">
                <div class="mb-3 mx-2 w-25">
                  <label for="name_product" class="form-label">Nome Prodotto</label>
                  <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="name_product" placeholder="Inserisci il nome prodotto" name="name_product" >
                    @error('name_product')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="brand" class="form-label">Brand</label>
                  <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" placeholder="Inserisci il brand">
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="typology" class="form-label">Tipologia prodotto</label>
                  <input type="text" class="form-control @error('typology') is-invalid @enderror" id="typology" name="typology" placeholder="Inserisci la tipologia">
                    @error('typology')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="sale_price" class="form-label">Prezzo di vendita</label>
                  <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" placeholder="Inserisci il prezzo di vendita">
                    @error('sale_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="purchase_price" class="form-label">Prezzo di vendita</label>
                  <input type="text" class="form-control @error('purchase_price') is-invalid @enderror" id="purchase_price" name="purchase_price" placeholder="Inserisci il prezzo di acquisto">
                    @error('purchase_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="typology" class="form-label">Tipologia di costo</label>
                  <input type="text" class="form-control @error('typology') is-invalid @enderror" id="typology" name="typology" placeholder="Inserisci la tipologia di costo">
                    @error('typology')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="cost_price" class="form-label">Valore del costo</label>
                  <input type="text" class="form-control @error('cost_price') is-invalid @enderror" id="cost_price" name="cost_price" placeholder="Inserisci il valore del costo">
                    @error('cost_price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="label_code" class="form-label">Codice spedizione</label>
                  <input type="text" class="form-control @error('label_code') is-invalid @enderror" id="label_code" name="label_code" placeholder="Inserisci il codice spedizione">
                    @error('label_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_name" class="form-label">Nome Proprietario</label>
                  <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name" name="owner_name" placeholder="Inserisci il nome del proprietario">
                    @error('owner_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_surname" class="form-label">Cognome Proprietario</label>
                  <input type="text" class="form-control @error('owner_surname') is-invalid @enderror" id="owner_surname" name="owner_surname" placeholder="Inserisci il cognome del proprietario">
                    @error('owner_surname')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="owner_percentage" class="form-label">Percentuale Proprietario</label>
                  <input type="text" class="form-control @error('owner_percentage') is-invalid @enderror" id="owner_percentage" name="owner_percentage" placeholder="Inserisci il valore percentuale">
                    @error('product_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 mx-2 w-25">
                  <label for="username" class="form-label">Username Cliente</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="owner_percentage" name="username" placeholder="Inserisci username Cliente">
                    @error('username')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary mt-3 mx-2">Crea Prodotto</button>
          </form>
    </section>
@endsection