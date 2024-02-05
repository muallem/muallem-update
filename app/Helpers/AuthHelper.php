<?php

namespace App\Helpers;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Helpers\Encoder;
use Illuminate\Support\Facades\Session;
/*
| Last Update : 2022/12/12
| Update: getAccessFromRequest should not str_contains to all name
|         ex: access 'user_other' will be readed as access 'user'
 */

class AuthHelper
{
    public static function login($user_email, $password)
    {
        $expired_time = Carbon::now()->format('Y-m-d').' 23:59:00';
        $token = Encoder::encode($user_email.';'.$expired_time, env('APP_SECRET_KEY'));
        
        // Include the necessary parts of the pluggable.php file
        require_once '/home/u972394743/domains//muallem.id/public_html/wp-includes/class-phpass.php';

        try {
            // Your login logic here
            $user = User::where("user_email", $user_email)->first();
            $hasher = new \PasswordHash(8, true);
            if(!$user){
                return response()->json(['message' => 'Not permitted', 'ok' => false], 402);
            }
            if (!$hasher->CheckPassword($password, $user->user_pass)) {
                return response()->json(['message' => 'Not permitted', 'ok' => false], 402);
            }
            $expired_time = Carbon::now()->format('Y-m-d').' 23:59:00';
            $token = Encoder::encode($user->user_email.';'.$expired_time, env('APP_SECRET_KEY'));

            Session::put('token', $token);
            Session::put('user_id', $user->ID);
            Session::put('user_name', $user->user_login);
            Session::put('user_role', $user->role);
            return response()->json(['message' => 'Success', 'ok' => true], 200);
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function isSessionToken()
    {
        try{
            if (Session::has('token')) {
                $token = session('token');
                $token = Encoder::decode($token, env('APP_SECRET_KEY'));
                $token = explode(';', $token);
                $expirationDate = Carbon::createFromFormat('Y-m-d H:i:s', $token[1]);
                $currentDate = Carbon::now();
    
                if ($currentDate > $expirationDate) {
                    return false;
                } 
                return true;

            }
            return false;
        }catch(Exception $e){
            return false;
        }

    }

    public static function isAdmin()
    {
        if(Session::get('user_role') == 'admin'){
            return true;
        }
        return false;
    }
    public static function isSuperAdmin()
    {
        if(Session::get('user_role') == 'superadmin'){
            return true;
        }
        return false;
    }

    public static function checkSessionToken()
    {
        
        try{
            if (!Session::has('token')) {
                return false;
            }
                $token = session('token');
                $token = Encoder::decode($token, env('APP_SECRET_KEY'));
                $token = explode(';', $token);
                $expirationDate = Carbon::createFromFormat('Y-m-d H:i:s', $token[1]);
                $currentDate = Carbon::now();
    
                if ($currentDate > $expirationDate) {
                    return false;
                } 
                return true;
            
        }catch(Exception $e){
            return false;
        }

    }

    public static function logout()
    {
        Session::flush();
        Session::forget('token');
    }
}
