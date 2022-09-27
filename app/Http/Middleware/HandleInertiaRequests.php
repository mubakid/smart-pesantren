<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Inertia\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        $tgl_masehi = Carbon::now();
        $get = 'http://api.aladhan.com/v1/gToH?date=' . $tgl_masehi->format('d-m-Y');
        $a = Http::get($get);
        $tgl_hijriah = $a['data']['hijri'];
        $user = Auth::user();

        $role = $user ? $user->roles[0]->name : 'tidak ada';

        return array_merge(parent::share($request), [
            'tgl_hijriah' => $tgl_hijriah,
            'tgl_masehi' => $tgl_masehi->translatedFormat('l, d M Y |'),
            'user' => $user,
            'role' => $role
        ]);
    }
}
