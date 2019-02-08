<?php namespace EduardoVargas\Mautic\Http\Controllers;

use App\Http\Controllers\Controller;
use EduardoVargas\Mautic\Models\MauticConsumer;
use EduardoVargas\Mautic\Facades\Mautic;



    /**
     * Created by PhpStorm.
     * User: Eduardo Vargas
     * Date: 26/11/16
     * Time: 4:12 PM
     */
    class MauticController extends Controller
    {

        /**
         * Setup Applicaion.
         */
        public function initiateApplication()
        {

            $consumer = MauticConsumer::count();

            if($consumer == 0){
                Mautic::connection('main');
            }else{
                echo '<h1>Mautic App Already Register</h1>';
            }

        }

    }