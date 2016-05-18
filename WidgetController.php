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
    public function listWidgets()
    {
        // Return an array of widgets
        return Widget::get()->toArray();
    }
}
