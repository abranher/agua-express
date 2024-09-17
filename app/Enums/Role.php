<?php

namespace App\Enums;

use App\Traits\BaseEnum;

enum Role: string
{
  use BaseEnum;

  case ADMIN = 'ADMIN';
  case PLANT_WORKER = 'PLANT_WORKER';
  case CUSTOMER = 'CUSTOMER';

  public static function translation()
  {
    return [
      'ADMIN' => 'ADMIN',
      'CUSTOMER' => 'CLIENTE',
    ];
  }

  public function label(): string
  {
    return match ($this) {
      static::ADMIN => 'Writers',
      static::CUSTOMER => 'User Managers',
    };
  }
}
