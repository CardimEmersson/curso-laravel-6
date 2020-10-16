{{-- Bloco de verificação de erros na validação dos formularios --}}
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

{{-- <div class="alert">
    <p>Alert - {{$content ?? ''}} </p>
</div> --}}