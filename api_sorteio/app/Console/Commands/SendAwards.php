<?php

namespace App\Console\Commands;

use App\Models\Award;
use DateTime;
use Illuminate\Console\Command;

class SendAwards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-awards';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia email de premio para o cliente sorteado';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $date = (new DateTime('now'))->format('Y-m-d H:i');
        Award::query()->where('date', '>=',$date)->get();
    }
}
