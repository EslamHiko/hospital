<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Settings;
use App\TeamMember;
use App\GalleryPhoto;
use App\Service;
use App\Appointment;
use App\ContactMessage;
use App\DoctorMessage;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        $home_fb = Settings::where('name', 'fb_link')->first() ?
        Settings::where('name', 'fb_link')->first()->value : '#';
        $home_tw = Settings::where('name', 'tw_link')->first() ?
        Settings::where('name', 'tw_link')->first()->value : '#';
        $home_linked = Settings::where('name', 'linkedin_link')->first() ?
        Settings::where('name', 'linkedin_link')->first()->value : '#';
        $home_skype = Settings::where('name', 'skype_link')->first() ?
        Settings::where('name', 'skype_link')->first()->value : '#';
        $home_address = Settings::where('name', 'address')->first() ?
        Settings::where('name', 'address')->first()->value : '#';
        $home_email = Settings::where('name', 'email')->first() ?
        Settings::where('name', 'email')->first()->value : '#';
        $home_links = Settings::where('name', 'links')->first() ?
        Settings::where('name', 'links')->first()->value : '#';
        $home_phones = Settings::where('name', 'phones')->first() ?
        Settings::where('name', 'phones')->first()->value : '#';
        $home_email = explode(PHP_EOL, $home_email);
        $home_phones = explode(PHP_EOL, $home_phones);
        $home_links = explode(PHP_EOL, $home_links);
        $services = Service::all();
        $teamMembers = TeamMember::all();
        $galleryPhotos = GalleryPhoto::all();
        $Appointments = Appointment::all();
        $contactMsgs = ContactMessage::all();
        $doctorMsgs = DoctorMessage::all();
        View::share(['home_fb' => $home_fb,
                     'home_tw' => $home_tw,
                     'home_address' => $home_address,
                     'home_linked' => $home_linked,
                     'home_email' => $home_email,
                     'home_links' => $home_links,
                     'home_skype' => $home_skype,
                     'home_phones' => $home_phones,
                     'services' => $services,
                     'teamMembers' => $teamMembers,
                     'galleryPhotos' => $galleryPhotos,
                     'Appointments' => $Appointments,
                     'contactMsgs' => $contactMsgs,
                     'doctorMsgs' => $doctorMsgs,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
