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
     * This method returns the view where users must eneter a password in order to delete an account. -Nedzad
     */
    public function confirmationForm(){

        return view('confirm');
    }

}