<?php

namespace App\Http\Controllers;

use App\Models\OurJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurJobController extends Controller {
    public function index() {
        // Eager load jobs with the associated employers.
        $jobs = OurJob::with('employer')->orderBy('id', 'desc')->paginate(20);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function show($id) {
        $job = OurJob::find($id);
        return view('jobs.show', ['job' => $job]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store() {
        DB::table('our_jobs')->insertGetId([
            'title' => request("title"),
            'salary' => request("salary"),
            'employer_id' => 1,
        ]);

        return redirect('/ourjobs');
    }
}
