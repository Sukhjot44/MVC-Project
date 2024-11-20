@extends('layouts.app') 

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
      <button  id="order1" onclick="scrollToDiv('menu')" class="custom-btn">Order Now</button> 

    </div>
  </div>
</div>
</div>