<?php

namespace App\Http\Controllers;

use App\Models\OurJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurJobController extends Controller {
    public function index() {
        // Eager load jobs with the associated employers.
        // The latest method orders by descending order based off of the 'created_by' times, unless you pass in a column to order by. Will be ascending.
        $jobs = OurJob::with('employer')->latest()->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show($id) {
        $job = OurJob::find($id);
        return view('jobs.show', ['job' => $job]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function edit($id) {
        $job = OurJob::find($id);
        return view('jobs.edit', ['job' => $job]);
    }


    public function update($id) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = OurJob::findOrFail($id);
        // One way to set values.
        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        // Another way to do it.
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/ourjobs/' . $job->id);
    }

    public function destroy($id) {
        $job = OurJob::findOrFail($id)->delete();
        return redirect('/ourjobs');
    }

    public function store() {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        DB::table('our_jobs')->insertGetId([
            'title' => request("title"),
            'salary' => request("salary"),
            'employer_id' => 1,
        ]);

        return redirect('/ourjobs');
    }
}
