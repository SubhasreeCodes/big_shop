<?php

namespace App\Enums;

enum ProductLabelStatus:string
{

    case PROCESSING ='Processing';

    case ACTIVE ='Active';

    case HIDE ='Hide';

    public static function getValues(): array
    {
        return array_column(ProductLabelStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(ProductLabelStatus::cases(), 'value','key');
    }
}