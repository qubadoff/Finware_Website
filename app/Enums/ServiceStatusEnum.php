<?php

namespace App\Enums;

enum ServiceStatusEnum: int
{
    case Active = 1;

    case Inactive = 0;

    case Draft = 2;
}
