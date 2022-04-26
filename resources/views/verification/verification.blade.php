<!Doctype html>
@include('layouts.header')
    <body class="login-page">
        
<div class="bg-light p-5 rounded">
        <h1>Felicitation</h1>
        
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Lien de vérification à été votre addresse email .
            </div>
        @endif

        Un lien à été envoyé dans votre boîte électronique. Veuillez vérifier vos mails.
        {{-- <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="d-inline btn btn-link p-0">
                click here to request another
            </button>.
        </form> --}}
    </div> 
     @include('layouts.footScript')
    </body>
</html>
