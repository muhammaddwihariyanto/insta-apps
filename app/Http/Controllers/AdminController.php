<?php

namespace App\Http\Controllers;

use App\User;
use App\Komunitas;
use App\Lembaga;
use Auth;
use App\Eloquent\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use App\Exceptions\InvalidOrderException;
use Svg\Tag\Group;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function home()
    {

        return view('admin/beranda/home', [
            'top_15_posts' => Status::all()->take(15)

        ]);
    }
    public function poststatus(Request $request)
    {
        if ($request->has('status_text')) {
            // dd($request->all());
            $text = e($request->input('status_text'));

            $rules = [
                'status_text' => 'required|string|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);

            if ($request->hasFile('status_image_upload')) {

                $rules = ['status_image_upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'];
                $validator = Validator::make($request->all(), $rules);

                if (!$validator->fails()) {

                    $image = $request->file('status_image_upload');
                    $image_name = time() . '.' . $image->getClientOriginalName();
                    $image->move('status_images/', $image_name);
                    // $destinationPath = public_path('/images/status');
                    // $image->move($destinationPath, $image_name);
                    $status = new Status();
                    $status->user_id = Auth::user()->id;
                    $status->status_text = $text;
                    $status->image_url = $image_name;
                    $status->type = 1;
                    $status->save();
                    //    Flash::success('Status berhasil ditambahkan');
                    return redirect()->back()->with('success', 'Data berhasil Diupdate');
                    // return redirect()->back()->with('error', 'Gambar tidak sesuai format :' . $validator->errors);
                }
                
                //dd($text);
            } else {
                if (!$validator->fails()) {
                    $status = new Status();
                    $status->user_id = Auth::user()->id;
                    $status->status_text = $text;
                    $status->save();
                    //    Flash::success('Status berhasil ditambahkan');
                    return redirect()->back()->with('success', 'Data berhasil Diupdate');
                } else {
                    return redirect()->back()->with('error', 'Validation Failed :' . $validator->errors);
                }
            }
        }
        // $iduser = DB::table('user_status')
        return view('admin/beranda/home', [
            'top_15_posts' => Status::all()->take(15)
        ]);
        // $status = new Status;
        // $status->status = $request->status;
        // $status->save();
        // return redirect()->route('admindasbor');
    }

    public function postcomment(Request $request)
    {
        if ($request->has('post_comment')) {
            // dd($request->all());
            $status = e($request->input('post_comment'));
            $commentBox = e($request->input('comment-text'));
            $selected_status = Status::find($status);
            $selected_status->comments()->create([
                'user_id' => Auth::user()->id,
                'comment_text' => $commentBox,
                'status_id' => $status

            ]);
            return redirect()->back()->with('success', 'Komentar Berhasil Diitambahkan');
        }
        // $iduser = DB::table('user_status')
        return view('admin/beranda/home', [
            'top_15_posts' => Status::all()->take(15)
        ]);
        // $status = new Status;
        // $status->status = $request->status;
        // $status->save();
        // return redirect()->route('admindasbor');
    }
    public function postlikes(Request $request)
    {
        if ($request->has('like_status')) {
            // dd($request->all());
            $status = e($request->input('like_status'));
            $selected_status = Status::find($status);
            // $like = new StatusLikes();
            $selected_status->likes()->create([
                'user_id' => Auth::user()->id,

                'status_id' => $status

            ]);
            return redirect()->back()->with('success', 'Anda Berhasil Menyukai Status');
        }
        // $iduser = DB::table('user_status')
        return view('admin/beranda/home', [
            'top_15_posts' => Status::all()->take(15)
        ]);
        // $status = new Status;
        // $status->status = $request->status;
        // $status->save();
        // return redirect()->route('admindasbor');
    }


    public function adminprofil()
    {
        $data_admin = DB::table('users')
            ->where('users.id', Auth::user()->id)

            ->get();
        //dd($data_admin);
        return view('admin/akun/profil', [
            'data_admin' => $data_admin
        ]);
    }
    public function editprofiladmin(Request $request)
    {
        $update_profiladmin = DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        return redirect()->back()->with('success', 'Data berhasil Diupdate');
    }
}
