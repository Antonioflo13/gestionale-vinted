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

        $newRevenue = new Revenue();
        $newRevenue->sale_price = $data['sale_price'];
        $newRevenue->purchase_price = $data['purchase_price'];
        $newRevenue->revenue = $revenue;
        $newRevenue->percentage_revenue = $percentage_revenue;
        $newRevenue->owner_revenue = $owner_revenue;
        $newRevenue->save();
        
        $newProduct = new Product();
        $newProduct->revenue_id = $newRevenue->id;
        $newProduct->name_product = $data['name_product'];
        $newProduct->brand = $data['brand'];
        $newProduct->typology = $data['typology'];
        $newProduct->slug = $slug;
        $newProduct->save();

        $newOwner = new Owner();
        $newOwner->product_id = $newProduct->id;
        $newOwner->owner_name = $data['owner_name'];
        $newOwner->owner_surname = $data['owner_surname'];
        $newOwner->owner_percentage = $data['owner_percentage'];
        $newOwner->save();
        
        $newShipment = new Shipment();
        $newShipment->product_id = $newProduct->id;
        $newShipment->label_code = $data['label_code'];
        $newShipment->save();

        $newCost = new Cost();
        $newCost->typology = $data['typology'];
        $newCost->cost_price = $data['cost_price'];
        $newCost->save();

            $newClient = new Client();
            $newClient->username = $data['username'];
            $newClient->save();
        
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
