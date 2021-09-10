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
        $activeLinks = Link::where('user_id', Auth::user()->id)->where('is_active', 1)->orderBy('created_at', 'desc')->get();

        return Inertia::render('admin/Dashboard', [
            'links' => $links,
            'user' => Auth::user(),
            'active_links' => $activeLinks
        ]);
    }

    public function links($name)
    {
        $user = User::where('user_name', $name)->first();
        $activeLinks = Link::where('user_id', $user->id)->where('is_active', 1)->orderBy('created_at', 'desc')->get();
        if($user) {
            return Inertia::render('components/LinkTree', [
                'links' => $activeLinks,
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

    public function update($id)
    {
        $link = Link::find($id);
        $link->is_active = !$link->is_active;
        $link->save();

        return Redirect::route('admin.index');
    }

    public function destroy($id)
    {
        Link::find($id)->delete();

        return Redirect::route('admin.index');
    }
}
