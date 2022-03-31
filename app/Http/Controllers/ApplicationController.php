<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Application::all();
        return Inertia::render('Apply', ['data' => $data]);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'resume' => ['required', 'mimes:doc,pdf,docx,zip'],
            'jobpostid' => ['required'],
            'user_id' => ['required'],
            'user_name' => ['required'],
            'jobpost_title' => ['required'],
            'jobpost_cover' => ['required'],
            'jobpost_location' => ['required'],
            'jobpost_industry' => ['required'],
            'company_name' => ['required'],
            'jobpost_type' => ['required'],
            'company_id' => ['required'],
            'additional_comments' => ['nullable', 'max:1024']
        ])->validate();
  
        $resume_name = time().'_'.$request->input('user_name').'_'.$request->input("jobpostid");

        $resume_path = $request->file('resume')->store($resume_name, 'public');
        $resume_exact_path = 'http://127.0.0.1:8000/storage/'.$resume_path;

        Application::create([
            'resume' => $resume_exact_path,
            'jobpostid' => $request->input('jobpostid'),
            'user_id' => $request->input('user_id'),
            'user_name' => $request->input('user_name'),
            'jobpost_title' => $request->input('jobpost_title'),
            'jobpost_cover' => $request->input('jobpost_cover'),
            'jobpost_location' => $request->input('jobpost_location'),
            'jobpost_industry' => $request->input('jobpost_industry'),
            'company_name' => $request->input('company_name'),
            'jobpost_type' => $request->input('jobpost_type'),
            'company_id' => $request->input('company_id'),
            'additional_comments' => $request->input('additional_comments'),
        ]);
  
        return Redirect::route('jobs.applied');
    }
  
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $post = Application::findOrfail($id);

        $post->delete();
        return Redirect::route('dashboard');
        // return Redirect::route('jobs.applied');
    }
}
