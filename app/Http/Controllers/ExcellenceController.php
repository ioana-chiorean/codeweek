<?php

namespace App\Http\Controllers;

use App\Excellence;
use Gate;
use Illuminate\Http\Request;

class ExcellenceController extends Controller
{

    public function report($edition)
    {

        // Check if user is a winner for this edition
        if (Gate::denies('report-excellence', $edition)) {
            // The current user can't report for excellence...
            abort(403, 'You are not eligible to receive a Codeweek4All Excellence Certificate.');

        }


        return view('excellence.report', compact('edition'));

    }

    public function generate($edition)
    {


        // Generate Certificate of excellence
        dd('generate');

    }


}
