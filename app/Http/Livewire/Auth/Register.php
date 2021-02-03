<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $email;
    public $password;

    protected $listeners = ['register'];

    public function register() {

        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'password' => "required|min:6"
        ]);

        User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        $this->email = '';
        $this->password = '';

        $this->emit('registered');
        // return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
