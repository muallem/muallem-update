<?php

namespace App\Livewire\Dashboard\ChangePassword;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
require_once '/home/u972394743/domains/muallem.id/public_html/wp-includes/class-phpass.php';

class Index extends Component
{
    public $input_email;
    public $input_new_password;

    public function save()
    {
        try {

            $hasher = new \PasswordHash(8, true);
            $new_password = $hasher->HashPassword($this->input_new_password);

            $affectedRows = DB::table('wp_users')
            ->where('user_email', $this->input_email)
            ->update(['user_pass' => $new_password]);

            if ($affectedRows > 0) {
                $this->emit('onSuccessSweetAlert', 'Berhasil Mengubah Password!');
            } else {
                $this->emit('onFailSweetAlert', 'Email Tidak Ditemukan!');
            }
            
        } catch (\Throwable $th) {
            $this->emit('onFailSweetAlert', 'Gagal Mengubah Password!');
        }
    }
    public function render()
    {
        return view('livewire.dashboard.change-password.index');
    }
}
