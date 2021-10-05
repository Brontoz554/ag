<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class RegChief extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RegChief';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Registration main admin (Chief)';

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
     */
    public function handle()
    {
        $phone = $this->ask('Phone');
        $password = $this->ask('Password');

        $find = User::where('phone', '=', $phone)->first();

        if (isset($find)) {
            $this->error('This phone already is taken');
            return;
        }

        $user = new User();
        $user->phone = $phone;
        $user->password = $password;
        $user->role = 'Chief';
        $user->name = 'Chief';

        $user->save();

        $this->info('New Chief successfully registered');
    }
}
