<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities\Unit;
use Validator;
use App\Helpers\ValidationHelper;

class ActivitieController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function GetUnits()
    {
        return response()->json(Unit::GetAll());
    }

    public function DeleteUnit($id)
    {
        Unit::DeleteItem($id);
        return response()->json(['message' => 'Removido com sucesso!']);
    }

    public function AddUnit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2'
        ]);

        if ($validator->fails()) {
            return response()->json([ValidationHelper::ReturnValidationKey($validator->errors())
             => $validator->errors()->first()], 422);
        }

        Unit::AddItem($request);

        return response()->json(['message' => 'Adicionado com sucesso!']);
    }

    public function EditUnit($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2'
        ]);

        if ($validator->fails()) {
            return response()->json([ValidationHelper::ReturnValidationKey($validator->errors())
             => $validator->errors()->first()], 422);
        }

        Unit::EditItem($id, $request);

        return response()->json(['message' => 'Modificado com sucesso!']);
    }
}
