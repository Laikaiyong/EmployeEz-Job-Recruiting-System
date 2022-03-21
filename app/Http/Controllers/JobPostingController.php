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
        // return Inertia::render('JobPost', ['data' => $data]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1024'],
            'requirement' => ['required', 'string', 'max:1024'],
            'location' => ['required', 'string', 'max:20'],
            'type' => ['required', 'string'],
            'industry' => ['required', 'string'],
            'experience_level' => ['required', 'string'],
            'allowance' => ['required'],
            'company' => ['required'],
            'user_id' => ['required'],
            'beneficial_skills' => ['required', 'string', 'max:1024'],
            'closing_date' => ['required'],
            'allowance' => ['nullable'],
            'duration' => ['nullable'],
            'photo' => ['mimes:jpg,jpeg,png,gif,svg,webp', 'max:1024']
        ])->validate();
        $image_name = time().'_'.$request->input('title').'_'.$request->input("company");

        $image_path = $request->file('photo')->store($image_name, 'public');
        $image_exact_path = 'http://127.0.0.1:8000/storage/'.$image_path;

        JobPost::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'requirement' => $request->input('requirement'),
            'location' => $request->input('location'),
            'type' => $request->input('type'),
            'industry' => $request->input('industry'),
            'experience_level' => $request->input('experience_level'),
            'allowance' => $request->input('allowance'),
            'company' => $request->input('company'),
            'user_id' => $request->input('user_id'),
            'beneficial_skills' => $request->input('beneficial_skills'),
            'closing_date' => $request->input('closing_date'),
            'allowance' => $request->input('allowance'),
            'duration' => $request->input('duration'),
            'cover_image_url' => $image_exact_path
        ]);

        return Redirect::route('jobs.created');
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

    public function show(JobPost $id)
    {
        dd($id);
    }
}
