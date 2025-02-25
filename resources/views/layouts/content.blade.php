@vite(['resources/js/app.js','resources/css/main.css','resources/css/taskmanager.css'])
@vite(['resources/css/button.css'])
<div class="body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 lmenu">
                @if(Request::is('/'))
                <ul>
                    @foreach($lists_sites as $sites)
                    <? $category = $sites->link ?>
                    @if($sites->type==1)
                    <a href="{{ $category}}" target="_blank"><button class="lmenu_btn_link">{{$sites->name}}</button></a><br>
                    @else
                    <a href="{{ route('websearch', ['No'=>$category]) }}" target="center_frame"><button class="lmenu_btn_folders">{{$sites->name}}</button></a><br>
                    @endif
                    @endforeach
                    @endif
            </div>
            <div class="col-5">
                <div class="container frame">
                    <iframe name="center_frame" src="">

                    </iframe>
                </div>
            </div>
            <div class="col-4">
                <div class="rmenu">
                    <iframe src="{{route('tasks')}}" frameborder="0">
                    </iframe>
            </div>
        </div>
    </div> <!-- Начало Тела сайта -->
</div>