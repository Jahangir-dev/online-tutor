@extends('newtemplates.front_partials.default')
@section('content')
      
      
<div class="container">

         <div class="row content_main">
                <div class="row" style="margin-left: 1%;width: 100%">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong> Gigs Details:</strong> </label>
                </div>            
                </div><br>


            @if($gigs_details->active==0) 
               <div class="row mt-2 content_main mb-2 ">
                 <div class="col-lg-12">
                 <a href="{{route('student-order-status',['id'=>$gigs_details->uid,'status'=>'accept'])}}" class="btn btn-success">Accept</a>

                  <a href="{{route('student-order-status',['id'=>$gigs_details->uid,'status'=>'reject'])}}" class="btn btn-danger">Reject</a>

                   <a href="{{route('messages',['id'=>$gigs_details->uid])}}" class="btn btn-primary">Chat</a>
                </div>
                </div> 
                @else
                 <div class="row mt-2 content_main mb-2 ">
                   <div class="col-lg-12">
                    @if($gigs_details->active==1)

                              <a href="#" class="btn btn-success">Accepted at {{date('Y-m-d H:i A',strtotime($gigs_details->updated_at))}}</a>

                    @elseif($gigs_details->active==2)

                              <a href="#" class="btn btn-warning">Late Delivery at {{date('Y-m-d H:i A',strtotime($gigs_details->updated_at))}}</a>

                    @elseif($gigs_details->active==3)

                              <a href="#" class="btn btn-infp">Delivered at {{date('Y-m-d H:i A',strtotime($gigs_details->updated_at))}}</a>

                    @elseif($gigs_details->active==4)

                                <a href="#" class="btn btn-success">Completed at {{date('Y-m-d H:i A',strtotime($gigs_details->updated_at))}}</a>

                    @elseif($gigs_details->active==5)

                             <a href="#" class="btn btn-danger">Cancelled at {{date('Y-m-d H:i A',strtotime($gigs_details->updated_at))}}</a>

                    @endif

                   <a href="{{route('messages',['id'=>$gigs_details->uid])}}" class="btn btn-primary">Chat</a>                    
                  </div>
                  </div>
                @endif      



          <div class="col-lg-12">


 
            <div class="card">

              <div class="card-body">
               
               <div class="row">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Overview:</strong> </label>
              <input type="hidden" name="id" value="{{$gigs_details->gig_details->id}}">
                </div>
                 
                </div>
      


                <div class="row">
                 <div class="col-lg-2">
                  <label><strong>Gig Title</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea name="gig_tittle"  required class="form-control" rows="5">{{$gigs_details->gig_details->gig_title}}</textarea>
                  
                </div> 
                </div>
                <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Category</strong> </label>

                </div>
                <div class="col-lg-10">
                 <select name="category_id" class="form-control">
                   <option value="{{NULL}}">Choose</option>
                   @foreach($categories as $c)
                   @if($gigs_details->gig_details->category_id==$c->id)

                   <option <?php if($gigs_details->gig_details->category_id==$c->id) echo "selected;"; ?> selected value="{{$c->id}}"s>{{$c->name}}</option>

                   @else

                   @endif
                   @endforeach()
                 </select>
                  
                </div> 
                </div>




                <div class="row mb-2" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Tags</strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="text" name="search_tag" value="{{$gigs_details->gig_details->search_tag}}" class="form-control" required>
                  
                </div> 
                </div>


                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                
         


                <div class="row">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Pricing:</strong> </label>

                </div>
                 
                </div>


             <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Available Timing From</strong> </label>

                </div>
                <div class="col-lg-10">
                <input type="datetime-local" value="{{$gigs_details->gig_details->from_time}}" name="from_time" class="form-control" required>
                  
                </div> 
                </div>




                <div class="row" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Available Timing To </strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="datetime-local" value="{{$gigs_details->gig_details->to_time}}"  required name="to_time" class="form-control">
                  
                </div> 
                </div>




                <div class="row mb-2" style="margin-top: 3%;">
                 <div class="col-lg-2">
                  <label><strong>Per Hour Rate </strong> </label>

                </div>
                <div class="col-lg-10">
                  <input type="text" required value="{{$gigs_details->gig_details->per_hour_rate}}"  name="per_hour_rate" class="form-control">
                  
                </div> 
                </div>


               <hr style="height:2px;border-width:0;color:gray;background-color:gray">


                <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Description@Faqs:</strong> </label>

                </div>
                 
                </div>

              <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Description</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea class="form-control" required name="description" rows="5">{{$gigs_details->gig_details->description}}</textarea>
                  
                </div> 
                </div>
        

 <hr style="height:2px;border-width:0;color:gray;background-color:gray">

           <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Requriments:</strong> </label>

                </div>
                 
                </div>




                <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Requirment</strong> </label>

                </div>
                <div class="col-lg-10">
                  <textarea class="form-control" required name="requirment" rows="5">{{$gigs_details->gig_details->requirement}}</textarea>
                  
                </div> 
                </div>



                 <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <div class="row mb-2">
                 <div class="col-lg-12">
                  <label style="font-size: 20px;"><strong>Gallery:</strong> </label>

                </div>
                 
                </div>




                <div class="row mb-2">
                 <div class="col-lg-2">
                  <label><strong>Images:</strong> </label>

                </div>
                <div class="col-lg-10">
                  <img src="{{$gigs_details->gig_details->image}}" style="    width: 15%;">
                  
                </div> 
                </div>


                <hr style="height:2px;border-width:0;color:gray;background-color:gray">




        
 

              </div>

  
            </div>
            



         
          </div>
          
            
            
         </div>
      </div>      
      
      
@endsection

@section('jsOutside')

<script type="text/javascript">
  
  $(document).ready(function(){

    $('input,textarea,select').attr('readonly',true);

  });

</script>

@endsection