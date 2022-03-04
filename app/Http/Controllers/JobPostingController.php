<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\JobPost;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class JobPostingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = JobPost::all();
        return Inertia::render('JobPost', ['data' => $data]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'requirement' => ['required'],
            'allowance' => ['required'],
            'duration' => ['required'],
            'user_id' => ['required']
        ])->validate();
  
        JobPost::create($request->all());
  
        return redirect()->back()
                    ->with('message', 'Job Post Created Successfully.');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'requirement' => ['required'],
            'allowance' => ['required'],
            'duration' => ['required'],
            'user_id' => ['required']
        ])->validate();
  
        if ($request->has('id')) {
            JobPost::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Job Post Updated Successfully.');
        }
    }
  
        /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $post = JobPost::findOrfail($id);

        $post->delete();
        if($post) {
            return Redirect::route('jobposts.index')->with('message', 'Data Deleted');
        }
    }
}
