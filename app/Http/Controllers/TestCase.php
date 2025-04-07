<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCase extends Controller
{
    public function testPost(Request $request)
    {

        return response()->json(['data' => true], 201);
    }
}
