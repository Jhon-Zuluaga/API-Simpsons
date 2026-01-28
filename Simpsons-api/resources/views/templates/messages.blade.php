@if(session('success'))
    <div class="alert shadow animated shake" 
         style="background-color: #39FF14; border: 3px solid #000; color: #000; font-weight: bold; border-radius: 10px;">
        <i class="fas fa-check-circle"></i> ¡Excelente!: {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert shadow animated wobble" 
         style="background-color: #F14E28; border: 3px solid #000; color: #fff; font-weight: bold; border-radius: 10px;">
        <i class="fas fa-bomb"></i> ¡D'oh!: {{ session('error') }}
    </div>
@endif