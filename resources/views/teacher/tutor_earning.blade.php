
   @extends('newtemplates.front_partials.default')
@section('content')
   
      <!-- header --> 
      
      <!-- header end-->
      <!-- Wrapper -->
      <div class="container">
         <div class="row content_main">
            <div class="earning_heading text_orange w-100">
               <h1>Earning</h1>
            </div>
            <ul class="total_earning">
               <li>
                  Net Income
                  <p>$20000</p>
               </li>
               <li>
                  Withdraw
                  <p>$20000</p>
               </li>
               <li>
                  Used for Courses
                  <p>$20000</p>
               </li>
               <li>
                  Available for Withdraw
                  <p>$20000</p>
               </li>
            </ul>
            <div class="d-flex text_20 mt-5 mb-5">
               <p> Withdraw</p>
               <a href="#" class="paymentBtn">Paypal</a>
            </div>
            <div class="table-responsive earning_table"> 
               <table class="table">
                  <thead>
                     <tr>
                         <th>Date</th>
                         <th>For</th>
                         <th>Amount</th>
                     </tr>
                  </thead>
                  <!-- <tbody>
                     <tr>
                         <td>1</td>
                         <td>Clark</td>
                         <td>Kent</td>
                     </tr>
                     <tr>
                         <td>2</td>
                         <td>John</td>
                         <td>Carter</td>
                     </tr>
                     <tr>
                         <td>3</td>
                         <td>Peter</td>
                         <td>Parker</td>
                     </tr>
                  </tbody> -->
               </table>
                  <p class="text_20 p-2">There are no transactions to show</p>
            </div>
         </div>
      </div>
 
   @endsection