@extends('layouts/app')

 @section('content')
<style>
    .lottie1{
        position: absolute;
        right: 150px;
        top: -100px;
        width: 650px;
        height: 650px;
    }
    #check{
        position: relative;
        left: 150px
    }
    .checkurl{
  width: 50%;
}
.pagination ul li{
    list-style: none;
    float: left;
}

</style>
<div class="lottie1">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
            src="https://assets8.lottiefiles.com/packages/lf20_jG18nt.json"  background="transparent"  speed="1"   loop autoplay >
        </lottie-player>
</div>


	<!-- checker-->
	<section id="check">
		<div class="container">
            <h1>List of Phishing Website</h1>
            <span>Search for a Website <a href="/" style="color: white;"> Here</a>.</span>
            <br>
            @if(count($urls)>0)
                <ol>
                    @foreach($urls as $url)
                        <br><li>{{$url->url}}</li>
                    @endforeach
                </ol>
                <div class="pagination">{{$urls->links()}}</div>
                
            @else
                <h3>No list Found...</h3>
            @endif
	</div>
</section>

        
 @endsection
