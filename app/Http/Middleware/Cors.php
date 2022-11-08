<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500', 'http://127.0.0.1:5501')
            ->header('Access-Control-Allow-Methods', '*')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header('Access-Control-Allow-Headers', ' Content-Type, Accept');
            

    }

//     public function handle(Request $request, Closure $next)
//     {
//         // $headers = apache_request_headers();
//         // $baseURL = [
//         //     'http://127.0.0.1:8003',
//         //     'http://127.0.0.1:8002'
//         // ];

//         // if ($request->ip() == 192.168.1.1) {

//         // }
//         // return response()->json($request->ip());
//         // if (!$request->hasHeader('base_url') || !in_array($request->header('base_url'), $baseURL)) {

//         //     return response()->json([
//         //         'code'      =>  404,
//         //         'message'   =>  'khong co base_url'
//         //     ], 404);
//         // }

//         // return response()->json([
//         //         'code'      =>  404,
//         //         'message'   =>  '404'
//         //     ], 404);
//         // dd($request->header('Access-Control-Allow-Origin', ['http://blog.example.com', 'http://blog.example2.com']));
        
// return $next($request)
//             ->header('Access-Control-Allow-Origin', 'http://blog.example.com')
//             ->header('Access-Control-Allow-Methods', '*')
//             ->header('Access-Control-Allow-Credentials', 'true')
//             ->header('Access-Control-Allow-Headers', 'X-CSRF-Token');
// ->header('Access-Control-Allow-Headers', 'Authorization,Accept,Origin,DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Content-Range,Range'); 

//     }
}
