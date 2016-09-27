<?php
/**
 * Created by PhpStorm.
 * User: voiu
 * Date: 9/20/16
 * Time: 5:47 PM
 */

add_action( 'pre_get_posts', 'advanced_search_query' );
function advanced_search_query( $query ) {

    if (!is_admin() && $query->is_search && $query->is_main_query() ) {

        //$query->set( 'post_type', 'property' );

        /*
        $_model = $_GET['model'] != '' ? $_GET['model'] : '';

        $meta_query = array(
            array(
                'key'     => 'car_model', // assumed your meta_key is 'car_model'
                'value'   => $_model,
                'compare' => 'LIKE', // finds models that matches 'model' from the select field
            )
        );
        $query->set( 'meta_query', $meta_query );
        */


        // search meta
        $meta_query = array();


        // list type
        if (isset($_GET['list_type']) && 'all' != $_GET['list_type'] ) {
            $meta_query[] = array(
                'key'     => 'property_list_type',
                'value'   => $_GET['list_type'],
                'compare' => '='
            );
        }

        // bedrooms
        if (isset($_GET['bedrooms']) && !empty($_GET['bedrooms'])) {
            if ($_GET['bedrooms'] < 5) {
                $meta_query[] = array(
                    'key'     => 'bedrooms',
                    'value'   => $_GET['bedrooms'],
                    'compare' => '='
                );
            } else {
                $meta_query[] = array(
                    'key'     => 'bedrooms',
                    'value'   => 4,
                    'compare' => '>'
                );
            }
        }

        // bathrooms
        if (isset($_GET['bathrooms']) && !empty($_GET['bathrooms'])) {
            if ($_GET['bathrooms'] < 3) {
                $meta_query[] = array(
                    'key'     => 'bathrooms',
                    'value'   => $_GET['bathrooms'],
                    'compare' => '='
                );
            } else {
                $meta_query[] = array(
                    'key'     => 'bathrooms',
                    'value'   => 2,
                    'compare' => '>'
                );
            }
        }

        // garages
        if (isset($_GET['garages']) && !empty($_GET['garages'])) {
            if ($_GET['garages'] < 3) {
                $meta_query[] = array(
                    'key'     => 'garages',
                    'value'   => $_GET['garages'],
                    'compare' => '='
                );
            } else {
                $meta_query[] = array(
                    'key'     => 'garages',
                    'value'   => 2,
                    'compare' => '>'
                );
            }
        }

        // price range
        if (isset($_GET['price_range']) && !empty($_GET['price_range'])) {
            $price_range = $_GET['price_range'];
            switch ($price_range) {
                case 1:
                    // from $0 - $300
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 300,
                        'compare' => '<='
                    );
                    break;
                case 2:
                    // from $301 - $700
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 301,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 700,
                        'compare' => '<='
                    );
                    break;
                case 3:
                    // from 701 - 1500
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 701,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 1500,
                        'compare' => '<='
                    );
                    break;
                case 4:
                    // from 1501 - 5000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 1501,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 5000,
                        'compare' => '<='
                    );
                    break;
                case 5:
                    // from 5001 - 50000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 5001,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 50000,
                        'compare' => '<='
                    );
                    break;
                case 6:
                    // from 50001 - 300000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 50001,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 300000,
                        'compare' => '<='
                    );
                    break;
                case 7:
                    // from 300001 - 700000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 300001,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 700000,
                        'compare' => '<='
                    );
                    break;
                case 8:
                    // from 700001 - 1500000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 700001,
                        'compare' => '>='
                    );
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 1500000,
                        'compare' => '<='
                    );
                    break;
                case 9:
                    // from 700001 - 1500000
                    $meta_query[] = array(
                        'key'     => 'price',
                        'value'   => 1500000,
                        'compare' => '>='
                    );
                    break;
            }
        }

        $query->set( 'meta_query', $meta_query );

    }
}
