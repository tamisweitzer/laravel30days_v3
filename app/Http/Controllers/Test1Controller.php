<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Test1;

class Test1Controller extends Controller {
    public function show(): View {
        return view('test1', ['msg' => 'Test1 controller works. This is also confirmation of CI test.']);
    }
}
