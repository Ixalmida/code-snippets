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
        // Set the page title
        $params['title'] = 'List of Widgets';

        // Get widgets
        $params['widgets'] = Widget::get();

        // Return widgets list
        return view('home.widgets', $params);
    }
}
