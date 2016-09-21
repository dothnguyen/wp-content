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

    }
}
