<?php
/**
 * The template for displaying search forms in Unite
 *
 * @package unite
 */
?>
<!--
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'unite'); ?></label>
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search...', 'unite'); ?>">
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</form>
-->
<div class="search-wrapper col-md-12">
<div class="search-header">Find your properties</div>
<div class="search-form">
<form method="post" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="select-type">
          <option>Rent or sale</option>
          <option>Rent</option>
          <option>Sale</option>
        </select>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectPriceMin">
          <option>Price min.</option>
          <option>100 000</option>
          <option>150 000</option>
          <option>200 000</option>
          <option>300 000</option>
        </select>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectPriceMax">
          <option>Price max.</option>
          <option>100 000</option>
          <option>150 000</option>
          <option>200 000</option>
          <option>300 000</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectBedrooms">
          <option>Bedrooms</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectBathrooms">
          <option>Bathrooms</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectParking">
          <option>Parking space</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
      <a href="results.html" id="search" data-style="slide-left" class="btn btn-lg btn-raised ripple-effect btn-primary btn-block pull-right"> <i class="ti-search"></i>Search</a>
    </div>
  </div>

</form>
</div>
</div>
