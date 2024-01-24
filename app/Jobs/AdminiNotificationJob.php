<?php

namespace App\Jobs;

use App\Mail\AdminiNotificationEmail;
use App\Models\Administrateur;
use App\Models\Commande;
use App\Models\EmailAdministrateur;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AdminiNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $commande;
    /**
     * Create a new job instance.
     */
    public function __construct(Commande $commande)
    {
        $this->commande  = $commande;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = Administrateur::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new AdminiNotificationEmail($this->commande));
        }
    }
}
