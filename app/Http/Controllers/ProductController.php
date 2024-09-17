<?php

namespace App\Http\Controllers;

use App\Http\Requests\inventory\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('inventory.products.index', [
      'products' => Product::paginate(5),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('inventory.products.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreProductRequest $request): RedirectResponse
  {
    Product::create(
      $request->safe()->merge([
        'image' => $request->file('image')->store('/', 'products'),
      ])
        ->all()
    );

    return to_route('products.index')->with('status', 'Producto creado exitosamente!');
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Product $product)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    //
  }
}
