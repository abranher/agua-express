<?php

namespace App\Http\Requests\inventory;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => ['required', 'string', 'min:4', 'max:60'],
      'description' => ['required', 'min:30', 'max:200', 'string'],
      'price' => ['required', 'numeric'],
      'min_stock' => ['required', 'numeric'],
      'max_stock' => ['required', 'numeric'],
      'image' => ['required', 'image'],
    ];
  }
}
