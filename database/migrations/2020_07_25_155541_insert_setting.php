<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Setting;
class InsertSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $settings = ['noreply_email'                  => 'noreply@socialite.com',
            'language'                    => 'en',
            'logo'                        => 'logo.jpg',
            'favicon'                     => 'favicon.jpg',
            'enable_browse'               => 'on',
            'meta_description'            => 'Socialite is the FIRST Social networking script developed on Laravel with all enhanced features, Pixel perfect design and extremely user friendly. User interface and user experience are extra added features to Socialite. Months of research, passion and hard work had made the Socialite more flexible, feature-available and very user friendly!',
            'meta_keywords'               => 'facebook clone, laravel, live chat, message, news feed, php social network, php social platform, php socialite, post, social, social network, social networking, social platform, social script, socialite',
            'site_tagline'                =>  'Laravel social network script',
            'invite_privacy'              =>   'only_admins',
            'event_timeline_post_privacy' =>    'only_guests',
            'title_seperator'             =>    '|',
            'timezone'                    =>    'Asia/Kolkata',
            'enable_rtl'                  =>    'off',
            'group_event_privacy'         =>    'only_admins',
            'footer_languages'            =>    'on',
            'linkedin_link'               =>    'http://linkedin.com/',
            'instagram_link'              =>    'http://instagram.com/',
            'dribbble_link'               =>    'http://dribbble.com/'
        ];

        foreach ($settings as $key => $value) {
            $settings = Setting::firstOrCreate(['key' => $key, 'value' => $value]);
            $settings->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
