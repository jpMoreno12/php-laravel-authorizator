<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\json;

class AuthorizatorController extends Controller
{
    public function grantPermissions(Request $request)
    {
        $bearer = $request->bearerToken();
        $user = Http::withToken($bearer)->get(env('AUTHENTICATOR').'/api/user/check');

        $query = DB::table('permissions')
            ->select('permissions.name')
            ->join('permissions_by_user', 'permissions.id', '=', 'permissions_by_user.permission_id')
            ->where('permissions_by_user.user_id', $user['id'])
            ->get()->pluck('name')->toArray();

        $merged = array_merge($user->json(), ['permissions' => $query]);
        return response()->json([$merged]);
    }
}
