<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        $user = $request->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json(['message' => 'Password lama salah'], 400);
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return response()->json(['message' => 'Password berhasil diubah']);
    }

    public function updateProfile(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $request->user()->id,
    ]);

    $user = $request->user();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return response()->json(['message' => 'Profil berhasil diperbarui']);
}

}

?>
