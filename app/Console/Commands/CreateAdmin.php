<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin; 
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'make:admin 
                            {name : Nom de l\'admin} 
                            {email : Email de l\'admin} 
                            {password : Mot de passe de l\'admin}';

    protected $description = 'Créer un compte administrateur sans interface graphique';

    public function handle()
    {
        if (Admin::where('email', $this->argument('email'))->exists()) {
            $this->error(' Un administrateur avec cet email existe déjà.');
            return Command::FAILURE;
        }

        Admin::create([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => Hash::make($this->argument('password')),
        ]);

        $this->info('Administrateur créé avec succès !');
        return Command::SUCCESS;
    }
}
