@extends('layouts/app')

 @section('content')


<style>
    .lottie2{
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 810px;
        height: 710px;
    }
</style>
<div class="lottie2">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player
    src="https://assets2.lottiefiles.com/packages/lf20_KUwIq5.json"  background="transparent"  speed="1"   loop autoplay >
</lottie-player>
</div>



@endsection