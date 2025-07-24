<?php 
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    // API untuk menampilkan semua user
    public function index()
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'message' => 'List Users',
            'data' => $users
        ], 200);
    }
}

?>