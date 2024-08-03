<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use App\Models\JobListingModel;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListingModel::with('employer')->latest()->Paginate(5);
        return view('job',compact('jobs'));
        }

        public function create_view(){
            return view('create_job');
        }

        public function create_post(){
            request()->validate([
                'job_title' => ['required','min:3'],
                'salary' => 'required',
            ]);

            $job = new JobListingModel();
            $job->title = request('job_title');
            $job->salary = request('salary');
            $job->employer_id = 1;
            $job->save();
            Mail::to($job->employer->user)->queue(
                new JobPosted($job)
            );
            return redirect('/jobs');
        }

        public function job_detail(JobListingModel $job){
         return view('job_detail',['job'=>$job]);

        }

        public function edit_job(JobListingModel $job){
            if (Auth::guest()) {
                return redirect('/login');
            }
            Gate::authorize('edit-job', $job);
            // $job = JobListingModel::findOrFail($job);
            // if ($job->employer->user->isNot (Auth::user())) {
            //      abort(403);
            // }

        return view('job_edit',compact('job'));

        }

        public function update(JobListingModel $job){
            request()->validate([
                'job_title' => ['required','min:3'],
                'salary' => 'required',
            ]);
            // $jobs = JobListingModel::findOrFail($id);

            $job->update([
                'title'=>request('job_title'),
                'salary'=>request('salary'),
            ]);

            return redirect('/jobs/' .$job->id);
        }
        public function delete(JobListingModel $job){
            $job->delete();

            return redirect('/jobs/');
        }


}
