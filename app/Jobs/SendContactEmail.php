<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormConfirmation;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function handle()
    {
        // Отправка письма администратору
        Mail::to('bossdilan2003@gmail.com')->send(new ContactFormSubmitted($this->data));

        // Отправка автоответа пользователю
        Mail::to($this->data['email'])->send(new ContactFormConfirmation($this->data));
    }
}