<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Data;
use Validator;
use Illuminate\Support\Facades\Input;

class MainController extends Controller {

    public function postAppointment(Request $request) {
        $task = Appointment::create($request->all());

        return Response::json($task);
    }

}
