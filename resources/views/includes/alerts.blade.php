{{-- check for errors --}}
@if ($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert callout radius">
            {{ $error }}
        </div>
     @endforeach
@endif

{{-- check for success session alerts --}}
@if (session('success'))
    <div class="success callout radius">
        {{ session('success') }}
    </div>
@endif

{{-- check for error session alerts --}}
@if (session('error'))
    <div class="alert callout radius">
        {{ session('error') }}
    </div>
@endif
