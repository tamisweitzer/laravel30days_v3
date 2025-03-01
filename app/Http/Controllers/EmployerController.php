<?php

namespace App\Http\Controllers;

use App\Models\OurJob;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\View\View;


class EmployerController extends Controller {
  public function index() {
    $employers = Employer::all();
    return view('employers.index', ['employers' => $employers]);
  }

  public function show($id): View {
    $employer = Employer::find($id);
    $jobs = OurJob::all()->where('employer_id', $employer->id);

    return view('employers.show', ['employer' => $employer, 'jobs' => $jobs]);
  }
}
