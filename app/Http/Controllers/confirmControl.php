<?php
/**
 * Created by PhpStorm.
 * User: Nedzad Hafizovic
 * Date: 26-Oct-16
 * Time: 17:44
 */

 namespace App\Http\Controllers;


 use PhpParser\Node\Stmt\Label;
 use Symfony\Component\DomCrawler\Form;

 // use Symfony\Component\DomCrawler\Form;


class confirmControl extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirmationForm(){

        return view('confirm');
    }

}