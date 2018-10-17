<?php
 
namespace PlentyDummyPlugin\Providers;
 
use Plenty\Plugin\ServiceProvider;
 
class PlentyDummyPluginServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
 	$this->getApplication()->register(PlentyDummyPluginRouteServiceProvider::class);
    }
}
