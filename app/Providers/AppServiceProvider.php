<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('website.include.header', function ($view){
           $view->with('categories', Category::all());
        });
        View::composer('website.detail.index', function ($view){
            $view->with('comments', Comment::orderBy('id','desc')->take('3')->get(['id',  'name', 'email', 'comments']));
        });

        View::composer('customer.dashboard', function ($view){
            $view->with('cust', Customer::all());
        });


    }
}
