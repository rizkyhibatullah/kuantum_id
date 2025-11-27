<?php
namespace App\Services;

class AlertService
{
    public static function updated($message = null)
    {
        notyf()->success($message ? $message : 'Berhasil di ubah');
    }
    public static function created($message = null)
    {
        notyf()->success($message ? $message : 'Berhasil Di Buat');
    }
}