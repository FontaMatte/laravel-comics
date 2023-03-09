<footer>
    <section>
        <div class="container">
            <ul class="shop-menu-items">
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    DIGITAL COMICS
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    DIGITAL MERCHANDISE
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    SUBSCRIPTION
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    COMIC SHOP LOCATOR
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                </a>
                <a href="#" class="title">
                  DC POWER VISA
                </a>
              </li>
            </ul>
        </div>
    </section>


    <div class="footer-top">
        <div class="container">
          <div class="list1">
            <h3>
              DC COMICS
            </h3>
            <ul>
              <li v-for="item in listItems1">
                {{-- <a href="#">{{ item }}</a> --}}
              </li>
            </ul>
            <h3>
              SHOP
            </h3>
            <ul>
              <li v-for="item in listItems2">
                {{-- <a href="#">{{ item }}</a> --}}
              </li>
            </ul>
          </div>

          <div class="list2">
            <h3>
              DC
            </h3>
            <ul>
              <li v-for="item in listItems3">
                {{-- <a href="#">{{ item }}</a> --}}
              </li>
            </ul>
          </div>

          <div class="list3">
            <h3>
              SITES
            </h3>
            <ul>
              <li v-for="item in listItems4">
                {{-- <a href="#">{{ item }}</a> --}}
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="call-to-action">
            <button>
              SIGN-UP NOW!
            </button>
          </div>
          <div class="social">
            <h3>
              <a href="#">FOLLOW US</a> 
            </h3>
            <ul>
              <li v-for="icon in socialIcons">
                <a href="#">
                  <img :src="getImagePath(`./../assets/img/${ icon }`)" alt="">
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

</footer>