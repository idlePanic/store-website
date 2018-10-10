<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\comment::class => \App\Policies\CommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        foreach ($this->getPermission() as $permission){
            /**
             * @param $user
             * @return mixed
             */
            Gate::define($permission->name , function ($user) use($permission){
                return $user->hasRole($permission->roles);
            });
        }
//        Gate::define('edit-comments', function ($user , $comment){
//            return $user->id == $comment->user_id;
//            return $user->owns($comment);
//        });
    }
    protected function getPermission(){
        return Permission::with('roles')->get();
    }
}
