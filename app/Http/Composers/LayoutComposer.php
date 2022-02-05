<?php
namespace App\Http\Composers;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Evenement;

class LayoutComposer {

    public function compose(View $view)
    {
	     $data['evenement'] = Evenement::select('libelle', 'date')->where('date', '>', new Carbon())->first();        
         $view->with($data);
    }


}
