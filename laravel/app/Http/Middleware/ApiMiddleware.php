<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\returnSelf;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $valid = Validator::make($request->all(),[
            'uname'=>'required|string',
            'password'=> 'required|string',
        ]);
        if ($valid->fails()){
            return response()->json(['error'=>'email not works'], 400);
        }
        $credentails = $valid->validated();
        $user = User::where('uname',$credentails['uname'])->first();
        if($user !=null && Hash:: check($credentails['password'],$user->password)&&$user->usertype='admin'){
            return $next($request);
        }
        return response()->json(['error'=>'Unauthorized'], 401);
    }
}
