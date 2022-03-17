<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class SaveToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera un nuevo token para api de bixxi y lo salva en DB';

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
     * @return int
     */
    public function handle()
    {
        $response = Http::post('http://peaje.rtp.cdmx.gob.mx/bixxi-api/api/security/login', [
            'username' => 'adip',
            'password' => '2&&>RQiVc!/C_Xz',
        ]);

        $affected = DB::table('token_apis')
                    ->where('id', 1)
                    ->update(['token' => $response['token']]);
        return $affected;
    }
}
