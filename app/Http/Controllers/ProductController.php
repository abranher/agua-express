<?php

namespace App\Http\Controllers;

use App\Http\Requests\inventory\StoreProductRequest;
use App\Http\Requests\inventory\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
  public function show(Product $product): View
  {
    return view('inventory.products.show', ['product' => $product]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product): View
  {

    return view('inventory.products.edit', ['product' => $product]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateProductRequest $request, Product $product): RedirectResponse
  {
    if ($request->hasFile('image')) {
      Storage::disk('products')->delete($product->image);

      $product->update(
        $request->safe()->merge([
          'image' => $request->file('image')->store('/', 'products'),
        ])
          ->all()
      );
    } else {
      $product->update($request->safe()->all());
    }

    return to_route('products.index')->with('status', 'Producto actualizado exitosamente!');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product): RedirectResponse
  {
    Storage::disk('products')->delete($product->image);

    $product->delete();

    return to_route('products.index')
      ->with('status', 'Producto eliminado exitosamente!');
  }
}
