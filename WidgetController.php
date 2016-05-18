<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    /**
     * List widgets
     */
    public function index()
    {
        // Get widgets
        $widgets = Widget::get();

        // Return widgets as json
        return response()->json($widgets);
    }
}
