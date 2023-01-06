<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (!Gate::allows('post-list')) {
            abort(401);
        }
        if ($request->ajax()) {
            $data = Post::all();
            return DataTables::of($data)
                ->addColumn('cover_image', function ($row) {
                    $img = '<img src="/' . $row->thumbnail . '" />';
                    return $img;
                })
                ->addColumn('action', function ($row) {

                    $btn = '<span type="button"   title="Edit"><i class="fa fa-edit" onclick="edit(' . $row->id . ')"></i> </span>';
                    return $btn;
                })
                ->addColumn('select', function ($row) {

                    $btn = '<div class="form-check">
                    <input class="form-check-input" type="checkbox" onclick=checkThis(' . $row->id . ',this)>';
                    return $btn;
                })
                ->rawColumns(['cover_image', 'action', 'select'])
                ->make(true);
        }

        return response()->view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('post-create')) {
            abort(401);
        }
        return response()->view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('post-create')) {
            abort(401);
        }
        $data = $request->validate([
            'title' => 'required|max:255',
            'cover_photo' => 'required|image',
            'description' => 'nullable',
            'content' => 'nullable',
            'keywords' => 'nullable'
        ]);
        //add additional fields here
        $data['status'] = 'Published';
        $data['slug'] = Str::slug($data['title'], '-');
        //Uploading and saving Cover
        if ($request->cover_photo) {
            $image_path = request('cover_photo')->store('storage/uploads/posts/cover', 'public');
            $naked_path = storage_path('app/public/') . $image_path;
            //dd($naked_path);
            $photo = Image::make($naked_path)->fit(1194, 505);
            $photo->save();
            $data['cover_photo'] = $image_path;
        } else {
            $data['cover_photo'] = '';
        }

        //thumbnail
        if ($request->cover_photo) {
            $image_path = request('cover_photo')->store('storage/uploads/posts/thumbnail', 'public');
            $naked_path = storage_path('app/public/') . $image_path;
            $photo = Image::make($naked_path)->fit(398, 194);
            $photo->save();
            $data['thumbnail'] = $image_path;
        } else {
            $data['thumbnail'] = '';
        }

        //Storing
        Post::create($data);
        return Redirect::to(route('post.index'))->with('success', 'Post added successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Gate::allows('post-show')) {
            abort(401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('post-edit')) {
            abort(401);
        }

        $post = Post::findOrFail($id);
        return response()->view('admin.post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Gate::allows('post-edit')) {
            abort(401);
        }

        $post = Post::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|max:255',
            'cover_photo' => 'nullable|image',
            'description' => 'nullable',
            'content' => 'nullable',
            'status' => 'required',
            'keywords' => 'nullable'
        ]);
        $data['slug'] = Str::slug($data['title'], '-');
        //Uploading and saving Cover
        if ($request->cover_photo) {
            $image_path = request('cover_photo')->store('storage/uploads/posts/cover', 'public');
            $naked_path = storage_path('app/public/') . $image_path;
            $photo = Image::make($naked_path)->fit(1194, 505);
            $photo->save();
            $data['cover_photo'] = $image_path;
            //removing old image
            $file_path = config('envs.image_path') . $post->cover_photo;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
        }
        //thumbnail
        if ($request->cover_photo) {
            $image_path = request('cover_photo')->store('storage/uploads/posts/thumbnail', 'public');
            $naked_path = storage_path('app/public/') . $image_path;
            $photo = Image::make($naked_path)->fit(398, 194);
            $photo->save();
            $data['thumbnail'] = $image_path;
            //removing old image
            $file_path = config('envs.image_path') . $post->thumbnail;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
        }

        //updating
        $post->update($data);
        return Redirect::to(route('post.index'))->with('success', 'Post updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (!Gate::allows('post-delete')) {
            abort(401);
        }
        foreach ($request->ids as $id) {

            $post = Post::findOrFail($id);
            //removing cover
            $file_path = storage_path('app/public/') . $post->cover_photo;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
            $file_path = storage_path('app/public/') . $post->thumbnail;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
            //deleting
            $post->delete();
        }
        return response('success', 200);
    }
}
