<?php

namespace App\Livewire\Dashboard\ChangePassword;

use App\Models\User;
use Livewire\Component;
require_once '/home/n1488259/public_html/wp-includes/class-phpass.php';

class Index extends Component
{
    public $input_email;
    public $input_new_password;

    public function save()
    {
        try {
                $user = User::where('user_email', $this->input_email)->first();
                if(!$user)
                {
                    $this->emit('onFailSweetAlert', 'Email Tidak Ditemukan!');
                    return;
                }
                $hasher = new \PasswordHash(8, true);
                $user->display_name = $hasher->HashPassword($this->input_new_password);
                $user->save();
                $this->emit('consoleLog', User::where('user_email', $this->input_email)->first());
                // Emit success event
                $this->emit('onSuccessSweetAlert', 'Berhasil Mengubah Password!');
            
        } catch (\Throwable $th) {
            $this->emit('onFailSweetAlert', 'Gagal Mengubah Password!');
        }
    }
    public function render()
    {
        return view('livewire.dashboard.change-password.index');
    }
}
