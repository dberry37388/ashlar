<?php

declare(strict_types=1);

namespace App\Enums;

enum Role: string
{
    case SUPER_ADMIN = 'super_admin';
    case FILAMENT_USER = 'filament_user';
}
