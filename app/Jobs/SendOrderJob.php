<?php

namespace App\Jobs;

use App\Mail\SendOrderEmail;
use App\Models\Commande;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendOrderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Commande $commande;
    /**
     * Create a new job instance.
     */
    public function __construct($commande)
    {
        $this->commande = $commande;
    }

    /**
     * Execution de la tache à effctuer.
     */
    public function handle(): void
    {
           //  Mail::to(Auth::user()->email)->queue(new SendOrderEmail($this->commande));
         //  Mail::to(Auth::user()->email)->send(new SendOrderEmail($commande));
        // Mail::to(Auth::user()->email)->send(new SendOrderEmail($this->commande));
    }
}
