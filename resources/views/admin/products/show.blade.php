@extends('layouts.app')

@section('content')
    <section class="container">
        <h2 class="my-4">{{ $product->brand }} <small>{{ $product->name_product }}</small></h2>
        <h4 class="mb-4">Proprietario</h4>
        <p>{{ $product->owner->owner_name }} {{ $product->owner->owner_surname }}</p>
        <h4 class="mb-4">Ricavi</h4>
        <h5>Prezzo di vendita</h5>
        <p>{{ $product->revenue->sale_price }}</p>
        <h5>Prezzo di acquisto</h5>
        <p>{{ $product->revenue->purchase_price }}</p>
        <h5>Guadagno</h5>
        <p>{{ $product->revenue->revenue }}</p>
        <h5>Guadagno in percentuale</h5>
        <p>{{ $product->revenue->percentage_revenue }}</p>
        <h5>Codice spedizione</h5>
        <p>{{ $product->shipment->label_code }}</p>
        <a href="{{ route('admin.products.index') }}" class="btn btn-info">Torna all'elenco</a>

    </section>
@endsection