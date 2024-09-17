<?php

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
