namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ServiceCategory;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share categories with all views that use the header/nav
        View::composer('partials.nav', function ($view) {
            $categories = ServiceCategory::with('subCategories')->where('status', 1)->get();
            $view->with('categories', $categories);
        });
    }

    public function register() {}
}
