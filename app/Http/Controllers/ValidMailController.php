<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateValidMailRequest;
use App\ValidMail;

class ValidMailController extends Controller
{
    public function index()
    {
    	$validMails = ValidMail::all();
    	return view('admin_panel.validmails', compact('validMails'));
    }

    /**
	 * Store a newly created resource in storage.
	 * POST /documents
	 *
	 * @return Response
	 */
	public function store(CreateValidMailRequest $request)
	{
	    ValidMail::create($request->all());
	}
}
