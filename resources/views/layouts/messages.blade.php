@if (Session::has('success') || Session::has('error'))
    @php
        $alertClass = Session::has('success') ? 'alert-success' : 'alert-danger';
        $message = Session::has('success') ? Session::get('success') : Session::get('error');
        print_r($message);
        
    @endphp

    <div class="alert {{ $alertClass }}">
        {{ $message }}
    </div>
@endif
