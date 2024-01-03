<?php

namespace App\Http\Controllers;

use App\Models\permission;
use App\Models\User;
use App\Models\userpermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;

class UserController extends Controller
{

    public function validation()
    {
        $rules = [
            'name' => 'required|max:100|string',
            'full_name' => 'required|max:100|string',
            'photo' => 'nullable|image',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|string|confirmed',
            'position' => 'required|string|max:100',
            'user_type' => 'required',
            'role' => 'required'
        ];

        return $rules;
    }

    public function index()
    {

        $per_page =  request()->input('page', 10);
        $search = request()->input('search', '');
        $data = User::where('name', 'like', "%{$search}%")->orderBy('id', 'DESC')->paginate($per_page);
        return view('users.index', compact('data'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {


        $rules = $this->validation();
        Validator::make($request->all(), $rules)->validate();
        $path = '';
        if ($request->file('photo')) {
            $path = $request->file('photo')->store('/', 'users');
            $photo_path = asset(Storage::url('users/' . $path));
        }

        $user = new User();
        $user->name = $request->name;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->photo = $path;
        $user->photo_path = $photo_path;
        $user->user_type = $request->user_type;
        $user->role = $request->role;
        $user->password = $request->password;
        $result = $user->save();
        if ($result) {
            return response()->json([
                'res' => 'یوزر موفقانه راجستر گردید'
            ]);
        }
    }

    public function edit($id = '')
    {
    }

    public function update(Request $request)
    {
    }

    ///  list user permission

    public function get_user_permission($user_id = '')
    {
        $permissions = permission::query()
            ->orderBy('id', 'ASC')
            ->get();

        $result = [];
        foreach ($permissions as $permission) {
            $userPermission = userpermission::where('permission_id', '=', $permission->id)->where('user_id', '=', $user_id)->orderBy('id', 'ASC')->get()->first();
            if ($userPermission != '') {
                continue;
            }
            $result[] = (object) array('id' => $permission->id, 'name' => $permission->permission_name, 'display_name' => $permission->display_name);
        }



        return view('users.permission_list', compact('result'));
    }




    public function delete($id = '')
    {
    }
}
