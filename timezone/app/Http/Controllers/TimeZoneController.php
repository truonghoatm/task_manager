<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class TimeZoneController extends Controller
{
    public function index()
    {

        if(!empty($timezone)) {
            $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
            $time->setTimeZone(new DateTimeZone(str_replace('-', '/', $timezone)));
            echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');

        }
        return view('index');
    }
}
