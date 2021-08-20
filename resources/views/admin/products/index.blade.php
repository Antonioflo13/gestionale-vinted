@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="my-5">Prodotti</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome Prodotto</th>
                <th scope="col">Brand</th>
                <th scope="col">Nome Proprietario</th>
                <th scope="col">Cognome Proprietario</th>
                <th scope="col" colspan="3">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->owner->owner_name }}</td>
                        <td>{{ $product->owner->owner_surname }}</td>
                        <td><a href="{{ route ('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">Vai al dettaglio</a></td>
                        <td><a href="{{ route ('admin.products.create') }}" class="btn btn-secondary btn-sm">Crea Prodotto</a></td>
                    <tr>
                @endforeach
            </tbody>
          </table>
    </section>
@endsection
