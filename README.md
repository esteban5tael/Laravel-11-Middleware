

## Adding Data to the Users Migration

Añade el siguiente campo a la migración de usuarios para definir si un usuario es administrador:

```php
$table->boolean('isAdmin')->default(false);
```

## Creando un Middleware

Utiliza el siguiente comando para generar un nuevo middleware llamado `AdminMiddleware`:

```bash
php artisan make:middleware AdminMiddleware
```

## Código del Middleware

Ubica el siguiente código en el archivo `AdminMiddleware.php` en la ruta `app/Http/Middleware`:

```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && auth()->user()->isAdmin) {
            return $next($request);
        }

        return abort(401);
    }
}
```

## Registro del Middleware

Agrega el middleware `AdminMiddleware` en el archivo `bootstrap/app.php` de la siguiente manera:

```php
->withMiddleware(function ($middleware) {
    $middleware->alias('isAdmin', \App\Http\Middleware\AdminMiddleware::class);
});
```

## Uso del Middleware en Controladores

Puedes proteger las rutas o métodos de controladores utilizando el middleware `isAdmin`:

```php
use App\Http\Controllers\_SiteController;

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin', [_SiteController::class, 'admin'])->name('admin.index');
});
```

---
