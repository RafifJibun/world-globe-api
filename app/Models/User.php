<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser; // 1. Import ini
use Filament\Panel; // 2. Import ini
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser // 3. Tambahkan implements ini
{
    use Notifiable;

    // ... kode yang sudah ada (fillable, hidden, dll) ...

    // 4. Tambahkan fungsi ini di bagian bawah
    public function canAccessPanel(Panel $panel): bool
    {
        // Izinkan email lo buat masuk ke admin
        return str_ends_with($this->email, '@gmail.com'); 
        // Atau kalau mau lebih aman, pakai email spesifik:
        // return $this->email === 'rafifakbarmaliqfirdaus@gmail.com';
    }
}