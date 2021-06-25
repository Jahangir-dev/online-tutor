



@if($message->from_user == \Auth::user()->id)
    <p class="pt-3 pb-3 text-right" data-id='{{$message->id}}'><div class="latest-message" data-id='{{$message->id}}'>{!! $message->content !!}</div></p>
@else
    <p class="pt-3 pb-3" data-id='{{$message->id}}'><div class="latest-message" data-id='{{$message->id}}'>{!! $message->content !!}</div></p>
@endif