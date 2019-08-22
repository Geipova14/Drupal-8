<?php

/**
 * @file
 * Contains \Drupal\api_service\Controller\Api_serviceController
 */

namespace Drupal\api_service\Controller;

class Api_serviceController {
    /**
     * Generates an example page
    */

    public function test()  {
        
        $header = [
            'CostRica' => t('Costa Rica'),
            'NewYork' => t('New York'),
            'Belgrade' => t('Belgrade'),
        ];
        
            $url = "http://worldtimeapi.org/api/timezone/America/Costa_Rica";
            $feed = file_get_contents($url);
            $datos = json_decode($feed); 
            $cr = $datos->datetime;
          var_dump($cr);
            $url = "http://worldtimeapi.org/api/timezone/America/New_York";
            $feed = file_get_contents($url);
            $datos = json_decode($feed); 
            $ny = $datos->datetime;
            var_dump($ny);
            
            $url = "http://worldtimeapi.org/api/timezone/Europe/Belgrade";
            $feed = file_get_contents($url);
            $datos = json_decode($feed); 
            $bel = $datos->datetime;
            var_dump($bel);
            
            $output = array();
          for ($i = 1; $i <= 1; $i++) {
                $output[$i] = [
                    'CostRica' => $cr,
                    'NewYork' => $ny,
                    'Belgrade' => $bel,
                ];
            };
            
        
        $form['table'] = [
            '#type' => 'table',
            '#header' => $header,
            '#rows' => $output,
            '#empty' => t('No se mostraron las fechaas!!!')
        ];
       
        return $form;
    }
}
?>

