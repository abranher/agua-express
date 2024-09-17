<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreStockProductRequest;
use App\Models\Product;
use App\Models\StockProduct;
use Illuminate\Http\Request;

class StockProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return response()->json(
      Product::all()
    );
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreStockProductRequest $request)
  {
    $now = now();

    foreach ($request->safe()->all() as $item) {
      $StockProduct = [];
      for ($i = 0; $i < $item['quantity']; $i++) {
        $StockProduct[$i] = [
          'product_id' => $item['product_id'],
          'expires_at' => $item['expires_at'],
          'created_at' => $now,
          'updated_at' => $now,
        ];
      }
      StockProduct::insert($StockProduct);
    }

    return success('Registro exitoso!');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
