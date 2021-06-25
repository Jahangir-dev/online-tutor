@extends('newtemplates.front_partials.default')
<style type="text/css">
 body.modal-open {
  height: 100vh;
  overflow-y: auto;
}

.disabled_link{
  pointer-events: none;
}
</style>
@section('content')

<div class="container-fluid">
            <div class="row content_main">
               <div class="col-lg-3">
                  <div class="input-group mb-3 message_search_main">
                     <div class="dropdown w-100 search_dropdown position-relative">
                        <input type="text" class="form-control" placeholder="Conversations">
                        <span class="input_search_icon"><i class="fas fa-search"></i></span>
                        <div class="message_dropdown p-0" aria-labelledby="dropdownMenuButton">
                            

                            @if($users->count() > 0)
                                <ul id="users">
                                    @foreach($users as $user)
                                        <li>
                                            <a data-id="{{ $user->id }}" data-user="{{ $user->name }}" data-image="{{ $user->image }}" class="dropdown-item chat-toggle" href="javascript:void(0);">
                                              {{ $user->name }} 
                                              <p>Last seen 24 hours</p>
                                           </a>
                                       </li>
                                    @endforeach
                                </ul>
                            @else

                            @endif  
                          
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="message_chat mb-5">
                     <div class="message_inner" id="selected_user" style="display: none">
                        <span class="online_symbol position-relative" id="selected_user_name">Jayse 2332</span>
                        <p>last seen 24 hours</p>
                     </div>

                     <div class="message_inner" id="no_user_selected" style="display: block">
                        <span class="online_symbol position-relative">Select Conversation</span>
                     </div>

                     <div class="display_chat pl-3 pr-3 chat-area" id="chat_box" style="max-height: 300px;overflow-x: auto;">
                     </div>
                     <form class="d-inline-block w-100">
                            
                            <div id="all_quick_replies" class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="top: 30% !important">
                             <input class="form-control" id="myInput" type="text" placeholder="Search.." style="border: 0px;border-bottom: 1px solid #e0e0e0;"> 
                             <ul class="list-group" id="myList_quick" style="max-height: 150px;overflow-y: auto;">
                              @if($quick_replies->count())
                                @foreach($quick_replies as $q)
                                  <li class="list-group-item" data-desc="{{$q->description}}" style="border: 0px;border-bottom: 1px solid #e0e0e0;cursor:pointer">{{$q->title}}</li>
                                  @endforeach
                                @else
                                  <li class="list-group-item" style="border: 0px;border-bottom: 1px solid #e0e0e0;">No Quick Replies</li>                                
                                @endif  
                                </ul>  
                            </div>


                        <input type="text" class="form-control chat_input" name="chat" disabled>
                        <div class="d-flex mt-4 mb-3">
                           <div class="dropdown smileys_group mt-2">
                              <a href="javascript:void(0)" class="dropdown-toggle" type="button" id="smileys" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              &#128522
                              </a>
                              <div class="dropdown-menu smiley_div" aria-labelledby="dropdownMenuButton">
                                 <ul class="smileys_list">
                                     @include('newtemplates.front_partials.smileys')
                                 </ul>
                              </div>
                           </div>
                           <div class="other_chatIcons mt-2">
                              
                           

                              <span class="ml-2 mr-2 dropdown">
                              <a href="javascript:void(0)" class="dropdown-toggle show-quick-offer-btn disabled_link" style="cursor: pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-bolt"></i>
                              </a>

                               <div id="quick_replies" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0)" class="btn btn-info btn-lg" data-toggle="modal" data-target="#create-quick-reply" data-backdrop="false" style="cursor: pointer;">Create Quick Replies</a>
                                  </div>

                              </span>

                            


                              <span>
                              <a href="javascript:void(0)" onclick="$('#imgupload').trigger('click'); return false;" id="OpenImgUpload" for='imgupload' class="disabled_link">
                              <i class="fas fa-paperclip"></i>
                              </a>
                              <input type="file" id="imgupload" style="display:none"/>
                              </span>
                           </div>
                           @if(auth()->user()->hasAccess(['student']))
                            <!-- <span data-toggle="modal" data-target="#place_order_modal" data-backdrop="false">
                           <a href="#" class="order_btn"> Place Order</a>
                           </span> -->
                           @else 
                           <span data-toggle="modal" data-target="#place_order_modal" data-backdrop="false" class="disabled_link">
                           <a href="#" class="order_btn disabled_link"> Create Offer</a>
                           </span>
                           @endif
                           

                           <span class="ml-auto">
                           <a href="javascript:void(0)" style="cursor: pointer;" class="theme_color font_22 btn-chat disabled_link" data-to-user=""> Send </a>
                           </span>
                        </div>
                     </form>
                         <input type="hidden" id="to_user_id" value="" />
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="about_main p-3">
                     <h3>About</h3>
                     <div class="messageUser_name mt-4" style="text-align: center;">
                       <img src="#" id="user_image" style="width: 150px;display: none;height: 150px;border-radius: 100px;">
                     </div>
                  </div>
               </div>
            </div>
         </div>


    <div class="modal fade" id="place_order_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header text-center d-inline-block">
                        <h5 class="modal-title text-white" id="place_orderlabel">Select a Course</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button> -->
                     </div>
                     <div class="modal-body">
                        
                        @foreach($gigs as $g)
                        <div class="border p-2 d-flex mb-3 cursor-pointer course_head" data-toggle="modal" data-target="#course_formModal" data-backdrop="false" data-id='{{$g->id}}'>
                           <div class="course_img mr-4" style="width: 30%">
                              <img src="{{$g->image}}" alt="course-img" class="img-fluid" >
                           </div>
                           <div class="course_dec mt-3" style="width: 70%">
                              <p>{{$g->gig_title}}</p>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div> -->
                  </div>
               </div>
            </div>     


<div id="create-quick-reply" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">New Quick Reply</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        
        <div class="alert" id="alert_message" style="display: none">

        </div>

        <div class="col-md-12 mb-2">
          <input type="text" name="title" id="quick_title" placeholder="Title" class="form-control">
        </div>

          <div class="col-md-12">

            <textarea type="text" name="description" id="quick_description" placeholder="Description" class="form-control"></textarea>          

          </div>        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="save_new_quick_reply" class="btn btn-success">Save</button>
      </div>
    </div>

  </div>
</div>
            

<div class="modal fade" id="course_formModal" tabindex="-1" role="dialog" aria-labelledby="course_formmlabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header text-center d-inline-block">
                        <h5 class="modal-title text-white" id="course_form_label">Create an offer</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button> -->
                     </div>
                     <div class="modal-body">
                        <p class="text_25">I will Teach you Chinese Language in just one month</p>
                        <div class="row mt-4">
                           <div class="col-lg-3">
                              <div class="selected_coursImg">
                                 <img src="{{asset('images/placeholder.jpg')}}" alt="selected_img" id="selected_img" class="img-fluid">
                              </div>
                           </div>
                           <div class="col-lg-9">
                              <form class="offer_modalInput_main">
                                 <div class="form-group">
                                    <textarea class="form-control text_20" id="offer_dec" name="offer_dec" rows="5" style="resize: none;"></textarea>
                                 </div>
                                 <div class="row no-gutter">
                                    <div class="col-6">
                                       <label class="text_20">Course</label>
                                       <!-- <div class="dropdown w-100 offer_modalInput_main position-relative">
                                          <input type="text" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1" id="course_sel" name="course_sel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <span class="input_search_icon">
                                          <i class="fas fa-chevron-down"></i>
                                          </span>
                                          <div class="dropdown-menu message_dropdown p-0" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="#">1 Day</a>
                                             <a class="dropdown-item" href="#">2 Day</a>
                                             <a class="dropdown-item" href="#">3 Day</a>
                                             <a class="dropdown-item" href="#">4 Day</a>
                                             <a class="dropdown-item" href="#">5 Day</a>
                                             <a class="dropdown-item" href="#">6 Day</a>
                                             <a class="dropdown-item" href="#">7 Day</a>
                                          </div>
                                       </div> -->

                                            <datalist id="mylist">
                                              <!--  <option value=""></option> -->
                                               
                                            </datalist>                                       
                                            <input type="search" list="mylist" type="text" class="form-control" placeholder="Category" aria-label="Username" id="course_sel" name="course_sel" >
                                            <input type="hidden" name="selected_course" id="selected_course">

                                    </div>
                                    <div class="col-6">
                                       <div class="form-group">
                                          <label class="text_20">Date</label>
                                          <input class="form-control" type="date" id="offerDate" name="offerDate" value="{{date('Y-m-d')}}">
                                       </div>
                                    </div>
                                    <div class="col-5">
                                       <div class="form-group">
                                          <label class="text_20 w-100">Time</label>
                                          <input type="datetime-local" id="from_offerTime" name="from_offerTime" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-2">
                                       <div class="form-group text-center mt-5">
                                          <span class="text_20">To</span>
                                       </div>
                                    </div>
                                    <div class="col-5">
                                       <div class="form-group">
                                          <label class="text_20 w-100" style="visibility: hidden;">dummy</label>
                                          <input type="datetime-local" id="to_offerTime" name="to_offerTime" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-group">
                                          <label class="text_20 w-100">Price</label>
                                          <input type="text" id="price" name="price" class="form-control" placeholder="$500">
                                       </div>
                                    </div>
                                    
                                    
                                    <div class="col-6">
                                       <div class="form-group">
                                          <a href="#" class="offerBtn text-white text_25">Send offer</a>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
               </div>
            </div>



    <input type="hidden" id="current_user" value="{{ \Auth::user()->id }}" />
    <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
    <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
    <input type="hidden" name="selected_gig" id="selected_gig">    
    <input type="hidden" name="offer_id" id="offer_id">      
    <input type="hidden" name="message_id" id="message_id">  
    <input type="hidden" name="order_id" id="order_id" value="{{$order_id}}">      

@stop
@section('jsOutside')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
    <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myList_quick li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
    <script type="text/javascript">
        $('.chat-toggle').click(function(){

            var name = $(this).data('user');
            var id = $(this).data('id');        
            var image= $(this).data('image');    
            $('#selected_user_name').html(name);
            $('#no_user_selected').hide();
            $('#selected_user').show();
            $('.disabled_link').removeClass('disabled_link');
            $('.chat_input').attr('disabled',false);
            $('#user_image').attr('src',image);
            $('#user_image').show();
        });

        $('#smileys').click(function(){


            $('.smiley_div').toggle();

        });

        $('.show-quick-offer-btn').click(function(){

            $('#quick_replies').toggle();
            $('#all_quick_replies').toggle();
            if($('#all_quick_replies').hasClass('show_data')){
                          $('.display_chat').css('opacity',1);
                          $('#all_quick_replies').removeClass('show_data');              
            }else{
                          $('.display_chat').css('opacity',0.1);
                          $('#all_quick_replies').addClass('show_data');              

            }

        });





$(document).ready(function(){

    $("#imgupload").change(function(){

        var fd = new FormData();
        var files = $('#imgupload')[0].files;
        
        // Check file selected or not
        if(files.length > 0 ){
           fd.append('file',files[0]);
           fd.append('_token','{{ csrf_token() }}');
           $.ajax({
              url: '{{route("send-image")}}',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){

                 if(response != 0){
                    var ext = response.split(".");

                    if(ext[1]=='jpeg' || ext[1]=='png' || ext[1]=='jpg'){
                        var link = '<img style="width:300px;height:300px;" src="'+response+'"/>';
                    }else{
                        var link = '<a href="'+response+'" download>File</a>'
                    }
                    $('.chat_input').val(link);
                    setTimeout(function(){ $('.btn-chat').click(); }, 2000);


                 }else{
                    alert('file not uploaded');
                 }
              },
           });
        }else{
           alert("Please select a file.");
        }
    });
});        


    $('.offerBtn').click(function(){

              var tutor = 0;
              if('{{Auth::user()->hasAccess(["tutor"])}}'==1){
                tutor = 1;
              }
           var offer_dec = $('#offer_dec').val();
           var course_sel = $('#course_sel').val();     
           var offerDate = $('#offerDate').val();
           var from_offerTime = $('#from_offerTime').val();
           var to_offerTime = $('#to_offerTime').val();
           var price = $('#price').val();
           var user_id = $('#to_user_id').val();    

           var fd = new FormData();           
           fd.append('_token','{{ csrf_token() }}');
           fd.append('offer_dec',offer_dec);
           fd.append('course_sel',course_sel);
           fd.append('offerDate',offerDate);
           fd.append('from_offerTime',from_offerTime);
           fd.append('to_offerTime',to_offerTime);
           fd.append('price',price);
           fd.append('user_id',user_id);
           fd.append('selected_gig',$('#selected_gig').val());

var gig_title;
var from_time;
var to_time;
var per_hour_rate;
var image;
var category;
var created_at;

           $.ajax({
              url: '{{route("send-offer")}}',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response1){

                    var id = $('#selected_gig').val();
                      $.ajax({
                            url: '{{route("get-gig-detail")}}?id='+id,
                            type: 'get',
                            contentType: false,
                            processData: false,
                            success: function(response){

                                 if(response){

                                 }
                                 gig_title = response.gig_title;
                                 from_time = response.from_time;
                                 to_time = response.to_time ;
                                 per_hour_rate = response.per_hour_rate ;
                                 image = response.image;
                                 created_at = response.created_at;
                                 category = response.category.name;
                                 created_at = new Date(created_at);

                                var month = created_at.getUTCMonth() + 1; //months from 1-12
                                var day = created_at.getUTCDate();
                                var year = created_at.getUTCFullYear();                                  
                                newdate = day +"/" +month + "/" + year;
                var btn = '';
               /* if(tutor==0){                
                                              
                }else{
                  btn = '';
                }*/

                 btn = `<div class="btn_actions"><a onclick="status_change(this);" style="color:white;" data-href="{{route('confirm-offer')}}?status=approve&id=`+response1.id+`" data-status = "approve" class="text_20 mr-3 status-change">Confirm</a>
                    <a onclick="status_change(this);" style="color:white;" data-href="{{route('confirm-offer')}}?status=reject&id=`+response1.id+`" data-status = "reject" class="text_20 status-change">Decline</a></div>`;  

                var x = `<div>
                <div class="card p-4 mt-5 colored_box">
                  <div class="row no-gutter">
                    <div class="col-3">
                      <div class="tutor_acceptedImg">
                        <img src="`+image+`" alt="confirmed_course" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="course_info text_20">
                        <span class="text-left">
                          `+category+`
                        </span>
                        <span class="float-right">
                          `+per_hour_rate+`
                        </span>
                        <p class="picked_date">
                          `+newdate+`
                        </p>
                        
                      </div>
                    </div>
                  </div>
                  <p class="confirmed_courseText text_20 mt-4">`+gig_title+`</p>
                  <div class="ml-auto btn_group d-inline-block mt-3">
                      
                  `+btn+`
                      

                  </div>
                </div>
              </div>`;    
               $('.chat_input').val(x);
                $('#offer_id').val(response.id);
                setTimeout(function(){ $('.btn-chat').click(); }, 2000);
                                    
                $('#course_formModal').modal().hide();
                $('#place_order_modal').modal().hide();     
                $('.modal-backdrop').remove(); 

                            }
                         });

              
               

              }
           });


    });


    $('.course_head').click(function(){

      var id = $(this).data('id');
      $('#selected_gig').val(id);
      $('#offer_id').val(id);
        $.ajax({
              url: '{{route("get-gig-detail")}}?id='+id,
              type: 'get',
              contentType: false,
              processData: false,
              success: function(response){


                   $('#offer_dec').val(response.gig_title);
                   $('#offerDate').val();
                   $('#from_offerTime').val(response.from_time);
                   $('#to_offerTime').val(response.to_time);
                   $('#price').val(response.per_hour_rate);
                   $('#selected_img').attr('src',response.image);

                   var x = '<option selected class="course_id" onclick="getCourseID(this)" data-value="'+response.category.id+'">'+response.category.name+'</option>'                      
                   $('#mylist').html(x);

              }
           });


    });

    $('#course_sel').change(function(){



    });


    function status_change(th){

      var parent = $(th).closest(`.latest-message`).data('id');
      if(parent==undefined || parent==null){
        parent = $('#message_id').val();
      }

      var href = $(th).data('href');
      var to_user_id = $('#to_user_id').val();
      var status = $(th).data('status');
        $.ajax({
              url: href+'&user_id='+to_user_id+'&message_id='+parent,
              type: 'get',
              contentType: false,
              processData: false,
              success: function(response){

                  if(status=="approve"){

                      var x = `<a class="text_20 mr-3" style="color:white;background:#0eb147">Confirmed</a>`;
                      $('.btn_actions').html(x);
                   

                  }else{

                      var x = `<a class="text_20 mr-3" style="color:white;">Declined</a>`;
                      $('.btn_actions').html(x);

                  }

              }
           });
  }


  $('.list-group-item').click(function(){

    $('.chat_input').val($(this).data('desc'));
    $('.btn-chat').click();
    $('.show-quick-offer-btn').click();     

  });

  $('#save_new_quick_reply').click(function(){



 var title = $('#quick_title').val();
      var description = $('#quick_description').val();      
      if(title=='' || description==''){

          $('#alert_message').addClass('alert-warning');
          $('#alert_message').html('<p>All Fields Required</p>');

      }else{

          $('#alert_message').addClass('alert-info');
          $('#alert_message').html('<p>Processing</p>');         

      }
       $('#alert_message').show();

                      $.ajax({
                            url: '{{route("create_new_quick_reply")}}?title='+title+'&description='+description,
                            type: 'get',
                            contentType: false,
                            processData: false,
                            success: function(response){
                                if(response==1){
                                  $('#alert_message').removeClass('alert-info');
                                  $('#alert_message').removeClass('alert-warning');                                  
                                  $('#alert_message').addClass('alert-success');
                                  $('#alert_message').html('<p>SuccessFully Added</p>');
                                  $('#alert_message').show();
                                  var p =' <li onclick="load_quick_reply(this)" class="list-group-item" data-desc="'+description+'" style="border: 0px;border-bottom: 1px solid #e0e0e0;cursor:pointer">'+title+'</li>';
                                  setTimeout(function(){ 
                                    $('#alert_message').hide();
                                    $('#create-quick-reply').modal().hide();
                                    $('#myList_quick').prepend(p); }, 3000);
                                                                    
                                }else{
                                  $('#alert_message').removeClass('alert-info');
                                  $('#alert_message').removeClass('alert-warning'); 
                                  $('#alert_message').addClass('alert-danger');
                                  $('#alert_message').html('<p>Something Went Wrong</p>');
                                  $('#alert_message').show();
                                  setTimeout(function(){ 
                                    $('#alert_message').hide();
                                    $('#create-quick-reply').modal().hide();
                                  }, 3000);
                                                                    

                                }
                            }
      });
  
  });        

  function load_quick_reply(th){

    $('.chat_input').val($(th).data('desc'));
    $('.btn-chat').click();
    $('.show-quick-offer-btn').click();     

  }   

    </script>
@stop