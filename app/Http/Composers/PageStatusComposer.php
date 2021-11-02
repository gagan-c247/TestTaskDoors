<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Page;
class PageStatusComposer
{
    /**
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $aboutStatus =  $howToStatus = $termOfUseStatus =  $privacyPolicyStatus =  $returnPolicyStatus =  $shippingPolicyStatus = 
        $howItWorksStatus = '';

        $pages = Page::where('type','!=','faq')->get();
     
        foreach($pages as $page){
            if($page->type == 'about-us'){
                $aboutStatus = $page->status;
            }
            if($page->type == 'how-to'){
                $howToStatus = $page->status;
            }
            if($page->type == 'terms-of-use'){
                $termOfUseStatus = $page->status;
            }
            if($page->type == 'privacy-policy'){
                $privacyPolicyStatus = $page->status;
            }
            if($page->type == 'return-policy'){
                $returnPolicyStatus = $page->status;
            }
            if($page->type == 'shipping-policy'){
                $shippingPolicyStatus = $page->status;
            }
            if($page->type == 'how-it-works'){
                $howItWorksStatus = $page->status; 
            }
        }
        return $view->with(
            [
                'aboutStatus' => $aboutStatus,
                'howToStatus' => $howToStatus,
                'termOfUseStatus' => $termOfUseStatus,
                'privacyPolicyStatus' => $privacyPolicyStatus,
                'returnPolicyStatus' => $returnPolicyStatus,
                'shippingPolicyStatus' => $shippingPolicyStatus,
                'howItWorksStatus' => $howItWorksStatus,
            ]
        );
    }
}

