<?php 

namespace App\Enums;

enum ProductTagStatus:String
{
    case PUBLISHED ='Published';

    case DRAFT ='Draft';

    case PENDING ='Pending';

    public static function getValues(): array
    {
        return array_column(ProductTagStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(ProductTagStatus::cases(), 'value','key');
    }
}