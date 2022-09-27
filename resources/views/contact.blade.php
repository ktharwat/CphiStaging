<body>
    <div class="container mt-5">

        <!-- Success body -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

<form action="" method="post" action="{{ route('contact.store') }}">

    @csrf

    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

   

    <div class="form-group">
        <label>body</label>
        <textarea class="form-control {{ $errors->has('body') ? 'error' : '' }}" name="body" id="body"
            rows="4"></textarea>

        @if ($errors->has('body'))
        <div class="error">
            {{ $errors->first('body') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>