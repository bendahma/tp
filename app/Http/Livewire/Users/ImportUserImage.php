<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class ImportUserImage extends Component
{
   public $user ;

    public function mount(User $user){
       $this->user = $user;
    }
    public function render()
    {
        return view('livewire.users.import-user-image');
    }
}
