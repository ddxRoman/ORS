

    @vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])

    <div class="body">  
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 lmenu">
                    @if(Request::is('/'))
                    <ul>
    @foreach($lists_sites as $sites)

<a href="{{route($sites->link)}}" target="center_frame"><button>{{$sites->name}}</button></a><br>
@endforeach
</ul>


@endif
</div>
<div class="col-7">
    <div class="container frame"> 
        <iframe name="center_frame" src="">
            
            </iframe>
        </div>
    </div>
    <div class="col-3">
        <div class="rmenu">
            <h4>Rmenu</h4>
            <script src="{{URL::to('taskmanager')}}">
                
                </script>
                </div>
            </div>

        </div>
    </div> <!-- Начало Тела сайта -->
    





        </div>
