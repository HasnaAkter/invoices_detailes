<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;

    public function addProduct()
    {
        return view('admin.user.add');
    }

    public function newProduct(Request $request)
    {
        $this->user = new User();
        $this->user->name       = $request->name;
        $this->user->email      = $request->email;
        $this->user->password   = bcrypt($request->password);
        $this->user->save();
        return back()->with('message', 'User Saved Successfully');
    }

    public function manageProduct()
    {
        return view('admin.user.manage', [
            'products' => User::orderBy('id', 'DESC')->get(),
        ]);
    }
    public function updateProduct($id)
    {
        return view('admin.user.edit', [
            'product' => User::find($id),
        ]);
    }
    public function updateProductInfo(Request $request, $id)
    {
        $this->user = User::find($id);
        $this->user->name       = $request->name;
        $this->user->email      = $request->email;
        if (isset($request->password)) {
            $this->user->password   = bcrypt($request->password);
        }
        $this->user->save();
        return redirect('/manage-user')->with('message', 'User Updated Successfully');
    }

    public function deleteProduct($id)
    {
        $this->user = User::find($id);
        $this->user->delete();
        return back()->with('message', 'User Updated Successfully');
    }
}
