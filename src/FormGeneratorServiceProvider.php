<?php

namespace devmrh\formgenerator;

use Illuminate\Support\ServiceProvider;

  class FormGeneratorServiceProvider  extends ServiceProvider{


    public function boot(){
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');


      // render view file.
      $this->loadViewsFrom(__DIR__.'/resources/views', 'formgenerator');


      $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }


    public function register(){}

  }