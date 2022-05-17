<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        Commands\DemoCron::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            // $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

            // $client = Http::withHeaders([
            //     'access_key' => 'l8tzalr8em0vc32zdyrwntsydldk1vio4tmw9ryt5vhd6a80jm6z55lrb34t'
            // ])->get('https://metals-api.com/api/lowest-highest/'.$tanggal.'?access_key=l8tzalr8em0vc32zdyrwntsydldk1vio4tmw9ryt5vhd6a80jm6z55lrb34t&base=IDR&symbols=XAU')->json();
            // // $hasil = $client->getContents();
            //  //dd($client);
            //  DB::table('harga_emas')->truncate();
            // $harga_emas = DB::table('harga_emas')->insert([
            //     'tanggal_cek' => $client['date'],
            //     'created_at' => \Carbon\Carbon::now(),
            //    'harga_tinggi' => $client['rates']['high'],
            //      'harga_rendah' => $client['rates']['low'],
            //      'konversi_gram' => $client['rates']['high'] / 28.34952,
            //      'nisab_emas' => $client['rates']['high'] / 28.34952 * 85
            // ]);
            info('called every minute');
        })->everyMinute();
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
