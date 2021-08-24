@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="my-2">Prodotti</h2>
        <a href="{{ route ('admin.products.create') }}" class="btn btn-warning my-3">Crea Prodotto</a>
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
                    <td><a href="{{ route ('admin.products.edit', $product->id) }}" class="btn btn-secondary btn-sm">Modifica Prodotto</a></td>
                    <td>
                      <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                      </form>
                    </td>
                    <tr>
                @endforeach
            </tbody>
          </table>
    </section>
@endsection
