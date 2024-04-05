@extends('layouts.default')

@section('title','Home')

@section('content')
    <div class="p-0 mt-4 "  style="height:300px;">
        <h2 class="ps-4">Recently visited workspaces</h2>
        <ul class="p-0" style="list-style-type:none;">
            @foreach ($workspaces as $index => $workspace)
                @if ($index < 5)
                <li class="d-flex align-items-center custom-table" style="height: 50px">
                    <a class="link-black" style="width: 100%; height:100%" href="{{ route('workspace.collections', ['workspace' => $workspace->id]) }}">
                        <div class="col-9 d-flex align-items-center ps-4" style="height:100%">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16" width="18" height="18"><path d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z"></path></svg>
                            <label label class="fs-6 fw-normal cursor" for="">{{$workspace->name}}</label>
                        </div>
                        <div class="col-3 d-flex align-items-center" style="height:100%">
                            <img src="https://media.discordapp.net/attachments/994685233087643719/1215271120127791114/77ed449a829d201a7940b0f98d49ca5a3cf43dd9.jpg?ex=65fc246d&is=65e9af6d&hm=cc53b20e7bac20faa1f57f479c85b3a5c19f166a5ece6b0da943736fc79cb017&=&format=webp" alt="" width="32" height="32" class="rounded-circle me-2">
                            <label class="fs-6 fw-normal mt-1 ms-2 cursor" for="">{{$workspace->userCreate->name}}</label>
                        </div>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="p-0 mt-4 "  style="height:300px;">
        <h2 class="ps-4">Favorites workspaces</h2>
        <ul class="p-0" style="list-style-type:none;">
            @foreach ($workspaces as $index => $workspace)
                @if ($index < 5)
                <li class="d-flex align-items-center custom-table" style="height: 50px">
                    <a class="link-black" style="width: 100%; height:100%" href="{{ route('workspace.index', ['workspace' => $workspace->id]) }}">
                        <div class="col-9 d-flex align-items-center ps-4" style="height:100%">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16" width="18" height="18"><path d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z"></path></svg>
                            <label label class="fs-6 fw-normal" for="">{{$workspace->name}}</label>
                        </div>
                        <div class="col-3 d-flex align-items-center" style="height:100%">
                            <img src="https://media.discordapp.net/attachments/994685233087643719/1215271120127791114/77ed449a829d201a7940b0f98d49ca5a3cf43dd9.jpg?ex=65fc246d&is=65e9af6d&hm=cc53b20e7bac20faa1f57f479c85b3a5c19f166a5ece6b0da943736fc79cb017&=&format=webp" alt="" width="32" height="32" class="rounded-circle me-2">
                            <label class="fs-6 fw-normal mt-1 ms-2" for="">{{$workspace->userCreate->name}}</label>
                        </div>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection

@section('js')
@endsection
