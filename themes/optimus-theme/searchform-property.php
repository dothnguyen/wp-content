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
<form method="get" id="advanced-searchform" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="select-type" name="list_type">
          <option value="all">Rent or sale</option>
          <option value="Rent" <?php if ($_GET['list_type'] == 'Rent') echo 'selected'; ?>>Rent</option>
          <option value="Sale" <?php if ($_GET['list_type'] == 'Sale') echo 'selected'; ?>>Sale</option>
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
        <select class="form-control" id="selectPriceRange" name="price_range">
          <option value="">Price range</option>
          <option value="1" <?php if ($_GET['price_range'] == '1') echo 'selected'; ?>>$0 - $300</option>
          <option value="2" <?php if ($_GET['price_range'] == '2') echo 'selected'; ?>>$301 - $700</option>
          <option value="3" <?php if ($_GET['price_range'] == '3') echo 'selected'; ?>>$701 - $1,500</option>
          <option value="4" <?php if ($_GET['price_range'] == '4') echo 'selected'; ?>>$1,501 - $5,000</option>
          <option value="5" <?php if ($_GET['price_range'] == '5') echo 'selected'; ?>>$5,001 - $50,000</option>
          <option value="6" <?php if ($_GET['price_range'] == '6') echo 'selected'; ?>>$50,001 - $300,000</option>
          <option value="7" <?php if ($_GET['price_range'] == '7') echo 'selected'; ?>>$300,001 - $700,000</option>
          <option value="8" <?php if ($_GET['price_range'] == '8') echo 'selected'; ?>>$700,001 - $1,500,000</option>
          <option value="9" <?php if ($_GET['price_range'] == '9') echo 'selected'; ?>>More than $1,500,000</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectBedrooms" name="bedrooms">
          <option value="">Bedrooms</option>
          <option value="1" <?php if ($_GET['bedrooms'] == '1') echo 'selected'; ?>>1</option>
          <option value="2" <?php if ($_GET['bedrooms'] == '2') echo 'selected'; ?>>2</option>
          <option value="3" <?php if ($_GET['bedrooms'] == '3') echo 'selected'; ?>>3</option>
          <option value="4" <?php if ($_GET['bedrooms'] == '4') echo 'selected'; ?>>4</option>
          <option value="5" <?php if ($_GET['bedrooms'] == '5') echo 'selected'; ?>>More than 4</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectBathrooms" name="bathrooms">
          <option value="">Bathrooms</option>
          <option value="1" <?php if ($_GET['bathrooms'] == '1') echo 'selected'; ?>>1</option>
          <option value="2" <?php if ($_GET['bathrooms'] == '2') echo 'selected'; ?>>2</option>
          <option value="3" <?php if ($_GET['bathrooms'] == '3') echo 'selected'; ?>>More than 2</option>
        </select>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="form-group">
        <select class="form-control" id="selectParking" name="garages">
          <option value="">Parking space</option>
          <option value="1" <?php if ($_GET['garages'] == '1') echo 'selected'; ?>>1</option>
          <option value="2" <?php if ($_GET['garages'] == '2') echo 'selected'; ?>>2</option>
          <option value="3" <?php if ($_GET['garages'] == '3') echo 'selected'; ?>>More than 2</option>
        </select>
      </div>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
      <button type="submit" class="btn btn-lg btn-raised ripple-effect btn-primary btn-block pull-right"> <i class="ti-search"></i>Search</button>
    </div>

    <input type="hidden" name="s">
    <input type="hidden" name="post_type" value="property">
  </div>

</form>
</div>
</div>
