<?php

namespace App\Http\Livewire;

use App\Http\Requests\ExtraescolaractivityRequest;
use Livewire\Component;

class ExtraescolarActivity extends Component
{
    public function render()
    {
        return view('livewire.extraescolaractivity');
    }

    public function store(ExtraescolaractivityRequest $request)
    {
        dd($request);
    }
}
