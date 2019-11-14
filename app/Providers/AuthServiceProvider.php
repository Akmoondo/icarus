<?php

namespace App\Providers;

use App\RolePrivilege;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->registerPolicies();

        Gate::define('user-validate', function ($user, $permissao) use ($request) {

            if (!$request->session()->exists('permissaoItens')) {
                $permissoes = [];
                $permissaoItens = RolePrivilege::query()->where('role_uuid', $user->role_uuid)->get();
                $permissaoItens->load('privilege');

                foreach ($permissaoItens as $row) {
                    $permissoes[] = $row->privilege->slug;
                }

                $request->session()->put('permissaoItens', $permissoes);
            }

            if (in_array($permissao, $request->session()->get('permissaoItens'))) {
                return true;
            }

            return false;
        });
    }
}
