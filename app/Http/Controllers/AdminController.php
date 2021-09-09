<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Link;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        $links = Link::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return Inertia::render('admin/Dashboard', [
            'links' => $links
        ]);
    }

    public function links($name)
    {
        $user = User::where('user_name', $name)->first();
        if($user) {
            return Inertia::render('components/LinkTree', [
                'links' => $user->links,
                'user' => $user->user_name
            ]);
        }
        return Inertia::render('public/NotFound');
    }

    public function store(Request $request)
    {
        $link = Link::create([
            'placeholder' => $request->placeholder,
            'url' => $request->url,
            'user_id' => Auth::user()->id,
            'num_views' => 0
        ]);

        return Redirect::route('admin.index');
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
