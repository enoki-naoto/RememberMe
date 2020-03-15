<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Mail\SendMail;

use App\Todo;

use Mail;

class Emails extends Command

{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:todo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'todoを送信します';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $to = [
            [
                'email' => 'meganeno73@gmail.com',
                'name' => 'Test',
            ]
        ];

        $todo = Todo::all();

        Mail::to($to)->send(new SendMail($todo));
        return redirect('admin/todo/');

    }
}
