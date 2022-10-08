<?php

namespace App\Models\Activities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";
	protected $fillable = ["name"];

    public static function GetAll()
    {
        return self::get();
    }

    public static function DeleteItem($id)
    {
        $item = self::find($id);
        $item->delete();
        return true;
    }

    public static function AddItem($input)
    {
        $unit = new Unit();
        $unit->name = $input['name'];
        $unit->save();
    }

    public static function EditItem($id, $input)
    {
        $unit = self::find($id);
        $unit->name = $input['name'];
        $unit->save();
    }
}
