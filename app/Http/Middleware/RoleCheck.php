<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah pengguna sudah login
        if (auth()->guest()) {
            return redirect()->to('/login');
        }

        $user = auth()->user();

        // Cek jika user memiliki role yang sesuai dengan middleware
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Redirect ke halaman yang sesuai berdasarkan role
        if ($user->role == 'user') {
            return redirect()->to('/dashboardUser');
        }
        if ($user->role == 'admin') {
            return redirect()->to('/dashboardAdmin');
        }

        return redirect()->to('/home');
    }
}
