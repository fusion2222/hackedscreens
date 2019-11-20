<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

        Blade::directive('svg', function(String $icon='skull') {
            /*
             *   SVG only!!! SVG will be found and its content will be printed into place of
             *   this tag. There is silent agreement, that skull will be always existing.
             */

            $icon_file_map = [
                'download' => 'download-icon.svg',
                'copy' => 'copy-icon.svg',
                'github' => 'github-icon.svg',
                'skull' => 'skull.svg',
                'skull_one_piece' => 'skull_one_piece.svg',
            ];
            
            $filename = $icon_file_map[strtolower($icon)];
            
            if($filename === null){
                $filename = $icon_file_map['skull'];
            }


            $output = file_get_contents(
                public_path('img/' . $filename)
            );


            if($output === false){
                throw new Exception('Image file not found');
            }

            return $output;
        });
    }
}
