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
        Poems
    </li>
</ul>
@endsection


@section("title", "Poems")

@section("content")

<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="card" id="aplhabets">
            <div class="p-5">
                <div class="text-left">
                    <p class="fw-bold fs-1">{{ $poem->name }}</p>
                </div>
                <div class="card shadow-sm m-5 p-15">
                    <div class="text-center">
                        <img class="mw-100 mh-300px card-rounded p-2" alt="" src="{{ asset($poem->cover_image)}}"/>
                    </div>
                    <div class="text-left fs-3 fw-bold comic">
                        {!! $poem->transcript !!}
                        {{-- <audio src="{{ asset($poem->learning_audio) }}" id="poem_audio"></audio> --}}
                        <audio id="poem_audio">
                            <source src="{{ asset($poem->learning_audio) }}">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("custom-js")
    <script src="{{ asset("assets/js/custom/pages/poem.js")}}"></script>
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
