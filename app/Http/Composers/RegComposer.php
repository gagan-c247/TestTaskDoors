<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\User;
class RegComposer{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view){

    	$jsonString = file_get_contents(base_path('public/data/countries-states-cities.json'));
        $data = json_decode($jsonString, true);
        foreach($data as $key => $value){
            $countries[] = $value['name'];
        }
        return $view->with(
            [
                'countries' => $countries,
            ]
        );
    }
}

