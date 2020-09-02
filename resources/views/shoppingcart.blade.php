@extends('master')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Your Shopping Cart </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container mt-5">
    
    <!-- Shopping Cart Div -->
    <div class="row mt-5 shoppingcart_div">
      <div class="col-12">
        <a href="categories" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>
    </div>

    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th> No </th>
              <th> Photo </th>
              <th> Name </th>
              <th> Price </th>
              <th>Qty</th>

            </tr>
          </thead>
          <tbody id="shoppingcart_table">
            <tr>
              <td>
                <button class="btn btn-outline-danger remove btn-sm" style="border-radius: 50%"> 
                  <i class="icofont-close-line"></i> 
                </button> 
              </td>
              <td> 
                <img src="{{ asset('front/image/item/saisai_one.jpg')}}" class="cartImg">           
              </td>
              <td> 
                <p> Item Name </p>
                <p> Code Number</p>
              </td>
              <td>
                <button class="btn btn-outline-secondary plus_btn"> 
                  <i class="icofont-plus"></i> 
                </button>
              </td>
              <td>
                <p> 1 </p>
              </td>
              <td>
                <button class="btn btn-outline-secondary minus_btn"> 
                  <i class="icofont-minus"></i>
                </button>
              </td>
              <td>
                <p class="text-danger"> 
                  230,000 Ks
                </p>
                <p class="font-weight-lighter"> 
                <del> 25,000 Ks </del> </p>
              </td>
              <td>
                230,000 Ks
              </td>
            </tr>
            <tr>
              <td>
                <button class="btn btn-outline-danger remove btn-sm" style="border-radius: 50%"> 
                  <i class="icofont-close-line"></i> 
                </button> 
              </td>
              <td> 
                <img src="{{ asset('front/image/item/saisai_two.jpg')}}" class="cartImg">           
              </td>
              <td> 
                <p> Item Name </p>
                <p> Code Number</p>
              </td>
              <td>
                <button class="btn btn-outline-secondary plus_btn"> 
                  <i class="icofont-plus"></i> 
                </button>
              </td>
              <td>
                <p> 1 </p>
              </td>
              <td>
                <button class="btn btn-outline-secondary minus_btn"> 
                  <i class="icofont-minus"></i>
                </button>
              </td>
              <td>
                <p class="text-danger"> 
                  230,000 Ks
                </p>
              </td>
              <td>
                230,000 Ks
              </td>
            </tr>

          </tbody>
          <tfoot id="shoppingcart_table">
            
            <tr>
              <td class="colspan-5">
                <textarea class="form-control notes" class="notes" placeholder="Your notes here!"></textarea>
              </td>
              <td class="colspan-3">
                @role('Customer')
                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
                  Check Out </button> 
                @else
                <a href="{{route('loginpage')}}"class="btn btn-secondary btn-block mainfullbtncolor">Login to checkout</a>
                @endrole

              </td>
                </tr>
              </tfoot>
           </table>
      </div>
    </div>

          
              
            
       
    <!-- No Shopping Cart Div -->
    <div class="row mt-5 noneshoppingcart_div text-center">
      
      <div class="col-12">
        <h5 class="text-center"> There are no items in this cart </h5>
      </div>

      <div class="col-12 mt-5 ">
        <a href="{{route('mainpage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>

    </div>
    

  </div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
@endsection