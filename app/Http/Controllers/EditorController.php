<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor.index');
    }

    public function run(Request $request)
    {
        $htmlCode = $request->input('htmlCode');
        $output = '';

        // Execute the HTML code
        ob_start();
        eval('?>' . $htmlCode);
        $output = ob_get_clean();

        return response()->json([
            'output' => $output
        ]);
    }
}

