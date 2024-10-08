@extends('app')
@section('content')

<section id="limited-offer" class="padding-large"
style="background-image: url(images/banner-image-bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
<div class="container">
  <div class="row d-flex align-items-center">
    <div class="col-md-6 text-center">
      <div class="image-holder">
        <img src="images/banner-image3.png" class="img-fluid" alt="banner">
      </div>
    </div>
    <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
      <h2>30% Discount on all items. Hurry Up !!!</h2>
      <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
        <div class="time d-grid pe-3">
          <span class="days fs-1 fw-normal"></span>
          <small>Days</small>
        </div>
        <span class="fs-1 text-primary">:</span>
        <div class="time d-grid pe-3 ps-3">
          <span class="hours fs-1 fw-normal"></span>
          <small>Hrs</small>
        </div>
        <span class="fs-1 text-primary">:</span>
        <div class="time d-grid pe-3 ps-3">
          <span class="minutes fs-1 fw-normal"></span>
          <small>Min</small>
        </div>
        <span class="fs-1 text-primary">:</span>
        <div class="time d-grid ps-3">
          <span class="seconds fs-1 fw-normal"></span>
          <small>Sec</small>
        </div>
      </div>
      <a href="index.html" class="btn mt-3">Shop Collection</a>
    </div>
  </div>
</div>
</div>
</section>

<section id="items-listing" class="padding-large">
<div class="container">
  <div class="row">
    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="featured border rounded-3 p-4">
        <div class="section-title overflow-hidden mb-5 mt-2">
          <h3 class="d-flex flex-column mb-0">Featured</h3>
        </div>
        <div class="items-lists">
          <div class="item d-flex">
            <img src="images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Echoes of the Ancients</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr class="gray-400">
          <div class="item d-flex">
            <img src="images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">The Midnight Garden</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr>
          <div class="item d-flex">
            <img src="images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Shadow of the Serpent</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="latest-items border rounded-3 p-4">
        <div class="section-title overflow-hidden mb-5 mt-2">
          <h3 class="d-flex flex-column mb-0">Latest items</h3>
        </div>
        <div class="items-lists">
          <div class="item d-flex">
            <img src="images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Whispering Winds</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr class="gray-400">
          <div class="item d-flex">
            <img src="images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">The Forgotten Realm</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr>
          <div class="item d-flex">
            <img src="images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Moonlit Secrets</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="best-reviewed border rounded-3 p-4">
        <div class="section-title overflow-hidden mb-5 mt-2">
          <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
        </div>
        <div class="items-lists">
          <div class="item d-flex">
            <img src="images/product-item7.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">The Crystal Key</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr class="gray-400">
          <div class="item d-flex">
            <img src="images/product-item8.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Starlight Sonata</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
          <hr>
          <div class="item d-flex">
            <img src="images/product-item9.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Tales of the Enchanted Forest</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="on-sale border rounded-3 p-4">
        <div class="section-title overflow-hidden mb-5 mt-2">
          <h3 class="d-flex flex-column mb-0">On sale</h3>
        </div>
        <div class="items-lists">
          <div class="item d-flex">
            <img src="images/product-item10.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">The Phoenix Chronicles</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$1666</s>
                $999</span>
            </div>
          </div>
          <hr class="gray-400">
          <div class="item d-flex">
            <img src="images/product-item11.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Dreams of Avalon</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$500</s>
                $410</span>
            </div>
          </div>
          <hr>
          <div class="item d-flex">
            <img src="images/product-item12.png" class="img-fluid shadow-sm" alt="product item">
            <div class="item-content ms-3">
              <h6 class="mb-0 fw-bold"><a href="index.html">Legends of the Dragon Isles</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$600</s>
                $500</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section id="" class="padding-large pt-0">
<div class="container">
  <div class="section-title overflow-hidden mb-4">
    <h3 class="d-flex align-items-center">Categories</h3>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 border-0 rounded-3 position-relative">
        <a href="index.html">
          <img src="images/category1.jpg" class="img-fluid rounded-3" alt="cart item">
          <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
              class="text-white">Romance</a></h6>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center mb-4 border-0 rounded-3">
        <a href="index.html">
          <img src="images/category2.jpg" class="img-fluid rounded-3" alt="cart item">
          <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
              class="text-white">Lifestyle</a></h6>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center mb-4 border-0 rounded-3">
        <a href="index.html">
          <img src="images/category3.jpg" class="img-fluid rounded-3" alt="cart item">
          <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
              class="text-white">Recipe</a></h6>
        </a>
      </div>
    </div>
  </div>
</div>
</section>
@endsection