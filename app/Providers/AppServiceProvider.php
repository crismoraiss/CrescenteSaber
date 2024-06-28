<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // carrega o modelo que precisar
        Relation::morphMap([
            'aluno' => 'App\Models\Aluno',
            'funcionario' => 'App\Models\Funcionario',
        ]);
    }
}
