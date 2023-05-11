<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public static function banglaNumber($num)
    {
        $number = ["০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯"];
        $digitArray = array_map('intval', str_split($num));
        $output = "";
        foreach($digitArray as $item){
            $output .= $number[$item];
        }
        return $output;
    }
}
