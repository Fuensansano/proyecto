<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $selectedOption = '';

    public function render()
    {
        return view('livewire.search');
    }

    public function goToSelectedOption()
    {
        for ($i=0; $i < count(config('typeOfForms')); $i++) { 
            if($this->selectedOption == config('typeOfForms')[$i]) {
                return redirect('/' . str_replace(' ', '', config('typeOfForms')[$i]));
            }
        }
    }
}
