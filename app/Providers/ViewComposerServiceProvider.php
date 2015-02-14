<?php namespace App\Providers;

use App\Models\Article;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->compose404Page();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	public function compose404Page()
	{
		view()->composer('errors.404', function ($view) {
			$view->with('articles', Article::where('article_id', 18)->get());
		});
	}

}
