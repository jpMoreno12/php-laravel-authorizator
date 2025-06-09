<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\json;

class AuthorizatorController extends Controller
{
    public function grantPermissions(Request $request)
    {
        $bearer = $request->header('Authorization');
        $user = Http::withToken($bearer)->get('http://127.0.0.1:8000/api/user/check');
        $userPermissions = DB::table('permissions')->pluck('name')->toArray();
        $merged = array_merge($user->json(), ['permissions' => $userPermissions]);
        return response()->json([$merged]);
    }
}
