<?php

namespace App\Enum;

enum OrderStatusType: string
{
    case PADDING = 'padding';
    case RECEIVED = 'received';
    case PREPARATION = 'preparation';
    case COMPLETED = 'completed';
}
