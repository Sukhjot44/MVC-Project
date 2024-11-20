@extends('layouts.app') 

<!-- @section('title', 'Test Page')  -->

@section('content')
<!--SLIDESHOW STARTS-->
<div id="mycarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-md-flex align-items-center">
            <div>
              <h1>Taste the Tradition of Italian perfection.</h1>
              <ul class="custom-list">
                <li>Panpie, Burgers, And Best</li>
                <li>Excellent Of Quality Pizza</li>
                <li>Chicken Sandwich</li>
              </ul>
              <a  href="{{ url('/menu') }}" id="order1" onclick="" class="custom-btn">Order Now</a>
            </div>
          </div>
          <!-- Image on the other side -->
          <div class="col-md-6">
            <img src="{{ asset('images/about us burger.png') }}" alt="Image" class="carousel-img img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--SLIDESHOW ENDS-->
<div class="about_us" id="about">
<div class="container mt-5">
  <div class="row align-items-center">
    <!-- Image on one side -->
    <div class="col-md-6">
      <img src="{{ asset('images/aboutusimage.png') }}" alt="About Us Image" class="img-fluid">
    </div>
    <!-- Text on the other side -->
    <div class="about_text col-md-6">
      <h5 >About Us</h5>
      <h2 style="font-weight: bold;">Why We Are The Best</h2>
      <p>
        At RestrO dining is more than just a meal; it's an experience.
 RestrO is passionate about good food, great atmosphere, and creating memorable moments. 
 Our journey began with a simple dream: to bring people together through the joy of delicious cuisine.
      </p>
      <p>
        It all started with a family recipe, passed down through generations. With a vision to share our love for food, we set out on a culinary adventure. Our chefs meticulously craft each dish, using the finest ingredients, creativity, and a dash of love.


      </p>
      <ul class="custom-list" style="font-size: 16px;font-weight:600;">
        <li>Delicious & Healthy Food</li>
        <li>Specific Family And Kids Zone</li>
        <li>Music & Other Facilities</li>
        <li>Fastest Food Home Delivery</li>
      </ul>
      <!-- <button  id="order1" onclick="scrollToDiv('menu')" class="custom-btn">Order Now</button>  -->

    </div>
  </div>
</div>
</div>

<div class="container mt-5 menu" id="menu">
  <h5 class="text-center">Special Menu</h5>
  <h1 class="text-center">Our Specials Menu</h1>
  <div class="row">
      <div class="col-md-6">
          <!-- Add a container to hold menu cards -->
              <!-- Menu cards -->
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/1.png') }}" alt="Margherita Pizza" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Margherita Pizza</div>
                          <div class="col-md-2 price">$11.2</div>
                      </div>
                      <div class="row">
                          <div class="col">A classic Margherita pizza topped with ripe tomatoes and fresh mozzarella.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card"style="padding: 10px; margin: 2px 0; ">
                  <div class="col-md-2">
                      <img src="{{ asset('images/2.jpg')}}" alt="Cheese Platter" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Cheese Platter</div>
                          <div class="col-md-2 price">$15.99</div>
                      </div>
                      <div class="row">
                          <div class="col">A delightful cheese platter featuring a variety of fine cheeses.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card" style="padding: 10px; margin: 2px 0; ">
                  <div class="col-md-2">
                      <img src="{{ asset('images/3.png') }}"  alt="Spaghetti Bolognese" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Spaghetti Bolognese</div>
                          <div class="col-md-2 price">$11.99</div>
                      </div>
                      <div class="row">
                          <div class="col">A mouthwatering plate of spaghetti served with rich Bolognese sauce.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/4.png') }}" alt="Veggie Wrap" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Veggie Wrap</div>
                          <div class="col-md-2 price">$6.99</div>
                      </div>
                      <div class="row">
                          <div class="col">A wholesome veggie wrap filled with fresh vegetables and your choice of dressing.</div>
                      </div>
                  </div>
              </div>
              <!-- Add more menu cards here -->
      </div>
      <!-- Your other content here -->
      <div class="col-md-6">
          <!-- Add a container to hold menu cards -->
              <!-- Menu cards -->
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/5.png') }}" alt="Sushi Platter" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Sushi Platter</div>
                          <div class="col-md-2 price">$17.99</div>
                      </div>
                      <div class="row">
                          <div class="col">An assortment of delicious sushi rolls, perfect for sushi enthusiasts.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/6.png') }}" alt="Greek Salad" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Greek Salad</div>
                          <div class="col-md-2 price">$7.99</div>
                      </div>
                      <div class="row">
                          <div class="col">A classic Greek salad with fresh cucumbers, tomatoes, olives, and feta cheese.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/7.png') }}"alt="Chicken Alfredo" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Chicken Alfredo</div>
                          <div class="col-md-2 price">$13.99</div>
                      </div>
                      <div class="row">
                          <div class="col">Tender chicken in a creamy Alfredo sauce, seasoned with garlic and Parmesan cheese.</div>
                      </div>
                  </div>
              </div>
              <div class="row menu-card" style="padding: 10px; margin: 2px 0;">
                  <div class="col-md-2">
                      <img src="{{ asset('images/8.png') }}" alt="Chocolate Brownie" class="img-fluid">
                  </div>
                  <div class="col">
                      <div class="row">
                          <div class="col item-name" style="font-size: 16px; font-weight: 700;">Chocolate Brownie</div>
                          <div class="col-md-2 price">$4.99</div>
                      </div>
                      <div class="row">
                          <div class="col">Indulge in a decadent chocolate brownie, a sweet treat for your taste buds.</div>
                      </div>
                  </div>
              </div>
              <!-- Add more menu cards here -->
      </div>
  </div>
  <div class="row" style="padding-top: 50px;">
      <div class="col text-center">
          <a href="{{ url('/menu') }}" class="custom-btn" id="order-btn" >Order Now</a>
      </div>
  </div>
</div>


@endsection
