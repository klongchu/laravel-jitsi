<?php

namespace Klongchu\LaravelJitsi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Klongchu\LaravelJitsi\LaravelJitsiFacade as Jitsi;

class ViewRoomController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $room
     * @return \Illuminate\View\View
     */
    public function __invoke(Request $request, $room = null)
    {
        return Jitsi::viewRoom($room, $request->user());
    }
}
