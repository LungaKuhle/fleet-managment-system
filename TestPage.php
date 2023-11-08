
<?php include './views/header.php';?>
<link rel="stylesheet" href="css/style.css">

<!-- Insert Page Code here -->
<div  id="Main-Content">
<div class="container mt-5">
    <h1>title of the page</h1>
    <h4 class="mt-3 mb-1">Booking – Multipurpose Booking and Directory Theme</h4>
   
    Enter Code Here
    <div class="col-lg-4 d-none d-lg-block pl-xs-0 pl-lg-5">
        <div class="d-flex align-items-center mb-3">
          <h2 class="fs-20 mb-0">License Options</h2>
          <span class="fs-13 ml-auto">
            <a href="https://themes.getbootstrap.com/licenses">Full details →</a>
          </span>
        </div>

        <form class="mb-4">
          <div class="form-group mb-4 switch_price_prod" data-type="Standard License">
            <div class="custom-control custom-control-license">
              <input class="custom-control-input" id="licenseSingle" name="license" type="radio" checked="">
              <label class="custom-control-label d-flex align-items-center" for="licenseSingle">
                <div class="mr-auto">
                  <h6 class="mb-0">Standard</h6>
                  <span class="fs-13 text-gray-soft">Single Site</span>
                </div>
                <div class="d-flex align-items-center ml-auto">
                  <strong class="fs-18 mr-1">$</strong>
                  <strong class="h2">49</strong>
                </div>
              </label>
            </div>
          </div>

          <div class="form-group mb-4 switch_price_prod" data-type="Multisite License">
            <div class="custom-control custom-control-license">
              <input class="custom-control-input" id="licenseMultisite" name="license" type="radio">
              <label class="custom-control-label d-flex align-items-center" for="licenseMultisite">
                <div class="mr-auto">
                  <h6 class="mb-0">Multisite</h6>
                  <span class="fs-13 text-gray-soft">Unlimited sites</span>
                </div>
                <div class="d-flex align-items-center ml-auto">
                  <strong class="fs-18 mr-1">$</strong>
                  <strong class="h2">149</strong>
                </div>
              </label>
            </div>
          </div>
          <div class="form-group mb-4 switch_price_prod" data-type="Extended License">
            <div class="custom-control custom-control-license">
              <input class="custom-control-input" id="licenseExtended" name="license" type="radio">
              <label class="custom-control-label d-flex align-items-center" for="licenseExtended">
                <div class="mr-auto">
                  <h6 class="mb-0">Extended</h6>
                  <span class="fs-13 text-gray-soft">For paying users</span>
                </div>
                <div class="d-flex align-items-center ml-auto">
                  <strong class="fs-18 mr-1">$</strong>
                  <strong class="h2">399</strong>
                </div>
              </label>
            </div>
          </div>
        </form>
        <form action="https://themes.getbootstrap.com/cart/" method="POST" class=" btn-block">
            <input type="hidden" js-license-type="license_type" name="license_type" value="Standard License">
            <input type="hidden" name="add-to-cart" value="117868">
            <button type="submit" class="btn btn-brand btn-block btn-checkout"> <span class="btn-text">Add to cart</span></button>
        </form>
        <a class="btn btn-outline-brand btn-block mb-4 ml-0" target="_blank" href="https://themes.getbootstrap.com/preview/?theme_id=117868">Live preview</a>
        <div class="theme-purchases">
            <div class="theme-purchases__item">
                <a class="theme-purchases__item__inner text-center" data-toggle="tab" href="#reviews-tab" role="tab" js-handle="review-toggler">
                    <ul class="rating justify-content-center">
                        <li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li>
                    </ul>

                    <p>5.00/5 (3 reviews)</p>
                </a>
                <div class="theme-purchases__item__inner text-center">
                    <h5 class="mb-0"><i class="bootstrap-themes-icon-cart"></i>518</h5>
                    <p>Purchases</p>
                </div>
            </div>
            <div class="theme-purchases__item">
                <div class="theme-purchases__item__inner px-0">
                    <ul class="guarantees">
                        <li> <i class="bootstrap-themes-icon-check-circle"></i>Reviewed by the Bootstrap team</li>
                        <li><i class="bootstrap-themes-icon-check-circle"></i><a href="https://themes.zendesk.com/hc/en-us/articles/360000006291-How-do-I-get-help-with-the-theme-I-purchased-">6 months technical support</a></li>
                        <li><i class="bootstrap-themes-icon-check-circle"></i>100% money back guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="theme-description__list">
                            <div class="theme-description__list__item"><span class="theme-description__item__title">Bootstrap</span><span>v5.3.0-alpha</span></div>
                        <div class="theme-description__list__item"><span class="theme-description__item__title">Released</span><span>11 months ago</span></div>

                            <div class="theme-description__list__item"><span class="theme-description__item__title">Updated</span><span>7 months ago</span></div>
                                        <div class="theme-description__list__item"><span class="theme-description__item__title">Version</span><span>1.2.0</span></div>
                        <div class="theme-description__list__item"><span class="theme-description__item__title">Category</span>
                <a href="https://themes.getbootstrap.com/product-category/ecommerce-retail/">E-Commerce &amp; Retail</a>            </div>
                            <div class="theme-description__list__item align-items-center"><span class="theme-description__item__title">Questions?</span><a class="btn btn-xs btn-outline-brand" href="https://support.webestica.com" target="_blank">Contact Seller</a></div>
                        <div class="theme-description__list__item">
                <a class="profile-author" href="https://themes.getbootstrap.com/store/webestica">
                    <div class="profile-author__logo">
                        <img class="profile-author__img" src="https://themes.getbootstrap.com/wp-content/uploads/2022/09/webestica-icon-300x300.jpg" alt="">
                    </div>
                    <div class="profile-author__author__description">
                        <p>Created by</p>
                        <h6 class="profile-logo__author__title">Webestica</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Page Code -->
    <?php include './views/footer.php';?>