@extends("frontend.layouts.app")

@section("breadcrumb")
<ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
        <a href="/saul-html-free/index.html" class="text-gray-500 text-hover-primary">
            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
        </a>
    </li>
    <li class="breadcrumb-item">
        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
    </li>
    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
        Alphabets
    </li>
</ul>
@endsection


@section("title", "Animal")

@section("content")

<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="card" id="aplhabets">
            <div class="d-flex flex-wrap justify-content-evenly">
                    <div class="card shadow-sm m-5">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($animal->image_path)}}"/>
                            <p class="fs-1">{{ $animal->name }}</p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="card shadow-sm m-5"  onclick="speakText('{{ $animal->info }}')" id="info">
                    <div class="text-center fs-2 fw-bold comic">
                        {{$animal->info}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("custom-css")
<style>
    .card {
        cursor: pointer;
    }
    .comic {
        font-family: "Comic Sans MS", "Comic Sans", cursive;
    }
</style>
@endsection
