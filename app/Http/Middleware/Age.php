<?php 

    namespace App\Http\Middleware;

    use Closure;

    class Age {

        public function handle($request, Closure $next) {

            if($request->age < 18) {
                return redirect("/fail");
            }

            return $next($request);
        }

    }