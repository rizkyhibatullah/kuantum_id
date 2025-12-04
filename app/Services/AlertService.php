<?php
namespace App\Services;

class AlertService
{
    public static function updated($message = null)
    {
        notyf()->success($message ? $message : 'Berhasil di Update');
    }
    public static function created($message = null)
    {
        notyf()->success($message ? $message : 'Berhasil Di Buat');
    }
    public static function deleted() : void
    {
        notyf()->success('Berhasil Di Hapus');
    }

}
