<?php

namespace App\Console\Commands;

use App\Models\Administrateur;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminiNotificationEmail;

class NotificationAdminTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notification-admin-task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = Administrateur::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new AdminiNotificationEmail($this->commande));
        }
    }
}
