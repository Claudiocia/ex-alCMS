<?php

namespace App\Providers;

use App\Models\DiretoriaUser;
use App\Repositories\AssociationRepository;
use App\Repositories\AssociationRepositoryEloquent;
use App\Repositories\CityRepository;
use App\Repositories\CityRepositoryEloquent;
use App\Repositories\ConvenioRepository;
use App\Repositories\ConvenioRepositoryEloquent;
use App\Repositories\CountryRepository;
use App\Repositories\CountryRepositoryEloquent;
use App\Repositories\DiretoriaRepository;
use App\Repositories\DiretoriaRepositoryEloquent;
use App\Repositories\DiretoriaUserRepository;
use App\Repositories\ElementSiteRepository;
use App\Repositories\ElementSiteRepositoryEloquent;
use App\Repositories\ExPresidenteRepository;
use App\Repositories\ExPresidenteRepositoryEloquent;
use App\Repositories\GaleryRepository;
use App\Repositories\GaleryRepositoryEloquent;
use App\Repositories\ImageRepository;
use App\Repositories\ImageRepositoryEloquent;
use App\Repositories\MensagemRepository;
use App\Repositories\MensagemRepositoryEloquent;
use App\Repositories\MensPresidRepository;
use App\Repositories\MensPresidRepositoryEloquent;
use App\Repositories\PhotoRepository;
use App\Repositories\PhotoRepositoryEloquent;
use App\Repositories\StateRepository;
use App\Repositories\StateRepositoryEloquent;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(AssociationRepository::class, AssociationRepositoryEloquent::class);
        $this->app->bind(ElementSiteRepository::class, ElementSiteRepositoryEloquent::class);
        $this->app->bind(PhotoRepository::class, PhotoRepositoryEloquent::class);
        $this->app->bind(DiretoriaRepository::class, DiretoriaRepositoryEloquent::class);
        $this->app->bind(DiretoriaUserRepository::class, DiretoriaRepositoryEloquent::class);
        $this->app->bind(MensPresidRepository::class, MensPresidRepositoryEloquent::class);
        $this->app->bind(ExPresidenteRepository::class, ExPresidenteRepositoryEloquent::class);
        $this->app->bind(MensagemRepository::class, MensagemRepositoryEloquent::class);
        $this->app->bind(ConvenioRepository::class, ConvenioRepositoryEloquent::class);
        $this->app->bind(GaleryRepository::class, GaleryRepositoryEloquent::class);
        //:end-bindings:
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
