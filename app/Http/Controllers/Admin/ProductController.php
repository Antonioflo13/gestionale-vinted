<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Product;
use App\Owner;
use App\Shipment;
use App\Revenue;
use App\Cost;
use App\Client;


class ProductController extends Controller
{
    private $productValidationArray = [
        'name_product' => 'required|max:200',
        'brand' => 'required|max:200',
        'typology' => 'required|max:100',
        'sale_price' => 'required|numeric',
        'purchase_price' => 'required|numeric',
        'typology' => 'required|max:100',
        'cost_price' => 'required|numeric',
        'label_code' => 'required|max:300',
        'owner_name' => 'required|max:100',
        'owner_surname' => 'required|max:100',
        'owner_percentage' => 'required|numeric',
        'username' => 'required|max:100'
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $owners = Owner::all();
        $shipments = Shipment::all();
        $revenues = Revenue::all();
        $costs = Cost::all();
        $clients = Client::all();

        return view('admin.products.create', compact('products', 'owners', 'shipments', 'revenues', 'costs', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $messages = [
            'required' => 'Campo Obbligatorio',
            'numeric' => 'Campo Numerico',
            'max' => 'Puoi inserire fino a :max caratteri'
        ];
        $request->validate($this->productValidationArray, $messages);
        
        $newProduct = new Product();
        $newProduct = new Owner();
        $newProduct = new Shipment();
        $newProduct = new Revenue();
        $newProduct = new Cost();
        $newProduct = new Client();

        $slug = $data['name_product'] . " " . $data['brand'];
        $slug = Str::slug($slug, '-');
        $data['slug'] = $slug;

        $revenue = $data['sale_price'] - $data['purchase_price'];
        $data['revenue'] = $revenue;

        $percentage_revenue = ($data['sale_price'] / $data['revenue'] )* 100;
        $data['percentage_revenue'] = $percentage_revenue;
        
        $owner_revenue = ($data['sale_price'] / 100 )* $data['owner_percentage'];
        $data['owner_revenue'] = $owner_revenue;
        // dd($data);

        $newProduct->fill($data);
        
        $newProduct->save();
        // dd($newProduct);

        return redirect()->route('admin.products.show', $newProduct->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
