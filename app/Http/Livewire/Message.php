<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message = 'oops!';

    protected $listeners = ['registered'];

    public function registered() {
        $this->message = 'Done!';
    }

    public function render()
    {
        return view('livewire.message');
    }
}
