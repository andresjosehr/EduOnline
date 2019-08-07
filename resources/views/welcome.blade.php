
@include("header")

<style>



.overlay {
  background: rgba(105, 105, 105, 0.75);
  height: 100%;
  opacity: 0;
  transition: opacity .5s ease-out;
}

.box:hover .overlay {
  opacity: 1;
}

.hover-text {
  font-family: Helvetica;
  font-weight: 900;
  color: rgba(255, 255, 255, 0.85);
  font-size: 16px;
  padding: 15px;
}

.box {
  height: 175px;
  width: 200px;
  background-image: url(http://myzerly.com/img/solidify-sketches/hotspot-4.png);
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: contain;
}

.custom-button {
  border: 2px solid #fff;
  border-radius: 10px;
  height: 20px;
  width: auto;
  padding: 5px;
  color: #fff !important;
}

.box {
  margin-top: 5rem;
  margin-bottom: 2rem;
  margin-right: auto;
  margin-left: auto;
}

.overlay {
  text-align: center;
  padding-top: 30px;
  padding-bottom: 50px;
}
</style>


<div class="row">
  <div class="small-12 medium-4 column">
  
 <!--This is the important block of code for the hover effect. The rest were replicated to demonstrate that it works in a grid system. ***You don't need Foundation to make this work.***-->
    <div class="box">
      <div class="overlay">
        <p class="hover-text">This is sample hover text</p>
        <a class="custom-button" href="http://myzerly.com" target="_blank">click me</a>
      </div>
    </div>
<!-- End code block-->
    
  </div>
  <div class="small-12 medium-4 column">
    <div class="box">
      <div class="overlay">
        <p class="hover-text">This is sample hover text</p>
        <a class="custom-button" href="http://myzerly.com" target="_blank">click me</a>
      </div>
    </div>
  </div>
  <div class="small-12 medium-4 column">
    <div class="box">
      <div class="overlay">
        <p class="hover-text">This is sample hover text</p>
        <a class="custom-button" href="http://myzerly.com" target="_blank">click me</a>
      </div>
    </div>
  </div>
</div>