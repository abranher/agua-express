<?php

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

if (!function_exists('current_user')) {
  function current_user()
  {
    return auth()->user();
  }
}

if (!function_exists('sub')) {
  function sub(string $string): string
  {
    return strlen($string) > 30 ? Str::substr($string, 0, 30) . '...' : $string;
  }
}

if (!function_exists('success')) {
  function success(string $message = null, $data = null, int $code = 200)
  {
    return response()->json([
      'status' => true,
      'type' => 'success',
      'data' => $data,
      'message' => $message,
    ], $code);
  }
}

if (!function_exists('error')) {
  function error(string $message = null, $data = null, int $code = 404)
  {
    return response()->json([
      'status' => false,
      'type' => 'error',
      'data' => $data,
      'message' => $message,
    ], $code);
  }
}

if (!function_exists('pagination')) {
  function pagination($data)
  {
    $perPage = 5;
    $currentPage = request('page');
    $total = $data->count();
    $items = $data->forPage($currentPage, $perPage);

    return new LengthAwarePaginator(
      $items,
      $total,
      $perPage,
      $currentPage,
      [
        'path' => url()->current(),
        'pageName' => 'page',
      ]
    );
  }
}
