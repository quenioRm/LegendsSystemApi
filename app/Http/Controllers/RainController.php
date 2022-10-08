<?php

namespace App\Http\Controllers;

use Httpful\Request;
use App\Helpers\ValidationHelper;
use Illuminate\Support\Collection;

class RainController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function GetStations($search)
    {
        $search = strtoupper($search);

        $response = Request::get("https://apimapas.inmet.gov.br/estacoes")
            ->followRedirects()
            ->withoutStrictSSL()
            ->send();

        $items = json_decode($response->raw_body);

        $return1 = $items->estacoes->automaticas->N;
        $return2 = $items->estacoes->automaticas->AN;
        $return3 = $items->estacoes->automaticas->CO;
        $return4 = $items->estacoes->automaticas->NE;
        $return5 = $items->estacoes->automaticas->S;
        $return6 = $items->estacoes->automaticas->SE;
        $return7 = $items->estacoes->convencionais->CO;
        $return8 = $items->estacoes->convencionais->N;
        $return9 = $items->estacoes->convencionais->NE;
        $return10 = $items->estacoes->convencionais->S;
        $return11 = $items->estacoes->convencionais->SE;

        $objects = (object) array_merge(
            (array) $return1, 
            (array) $return2,
            (array) $return3,
            (array) $return4,
            (array) $return5,
            (array) $return6,
            (array) $return7,
            (array) $return8,
            (array) $return9,
            (array) $return10,
            (array) $return11)
            ;

        $saved = new Collection();
        foreach($objects as $object)
        {
            $pos = strpos($object->nome, $search);
            if($pos !== false){
                $saved->add($object);
            }
        }

        return response()->json($saved);
    }
}
