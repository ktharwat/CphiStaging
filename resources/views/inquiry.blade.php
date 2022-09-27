<div class="inquiry" id="{{ $inqid }}">
    <div class="inquiry-top">
        <h3 id="contact-us">03<span class="spacer"> </span>Contact Us</h3>
        <p class="inquiry-close">×</p>
    </div>
    
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    
    <p class="inquiry-title">{{ $title }}</p>
    <form action="" method="POST" action="{{ route('contact.store') }}" onsubmit="showSuccessMsg()">
        
        @csrf
        
        <div>
            <input type="hidden" value="{{$ashraf}}" name="reciever_email">
        <div class="form-group">
            <!-- <label>Name</label> -->
            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Name">

            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <!-- <label>Email</label> -->
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" placeholder="Email">

            @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <!-- <label>body</label> -->
            <textarea class="form-control {{ $errors->has('body') ? 'error' : '' }}" name="body" id="body"
                rows="4" placeholder="Enter Your Message"></textarea>

            @if ($errors->has('body'))
            <div class="error">
                {{ $errors->first('body') }}
            </div>
            @endif
        </div>
        </div>
        
        <div class="inquiry-bottom">
            <div class="inquiry-submit">
                <input type="submit" name="send" value="Send Inquiry" class="btn btn-dark btn-block">
                <img src="assets/right-arrow.svg" alt="Send">
            </div>
        </div>
    </form>
    <!-- <div>
        <div class="inquiry-top">
            <h3 id="contact-us">03<span class="spacer"> </span>Contact Us</h3>
            <p class="inquiry-close">×</p>
        </div>
        <p class="inquiry-title">{{ $title }}</p>
        <form method="post" action="contact-us">
             {{csrf_field()}}
        <input type="text" name="Name" id="name" placeholder="Name">
        <input type="text" name="Email" id="email" placeholder="Email">
        <textarea type="text" name="Message" id="message" placeholder="Type Your Message"></textarea>
    </div>
    <div class="inquiry-bottom">
     <button><input type="submit" name="send">Send Inquiry <img src="assets/right-arrow.svg" alt="Send"></button>   
    </div>
</form> -->
</div>