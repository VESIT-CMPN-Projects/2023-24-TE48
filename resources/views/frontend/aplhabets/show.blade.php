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


@section("title", "Alphabets")

@section("content")

<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="card" id="aplhabets">
            <div class="d-flex flex-wrap justify-content-evenly">
                    <div class="card shadow-sm m-5">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($alphabet->drawing_image)}}"/>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card shadow-sm m-5" id="learning_image_1">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($alphabet->learning_image_1)}}"/>
                        </div>
                        <audio src="{{ asset($alphabet->learning_image_audio_1) }}" id="learning_audio_1" ></audio>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-5" id="learning_image_2">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($alphabet->learning_image_2)}}"/>
                        </div>
                        <audio src="{{ asset($alphabet->learning_image_audio_2) }}" id="learning_audio_2"></audio>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-5" id="learning_image_3">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($alphabet->learning_image_3)}}"/>
                        </div>
                        <audio src="{{ asset($alphabet->learning_image_audio_3) }}" id="learning_audio_3"></audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("custom-js")
    <script src="{{ asset("assets/js/custom/pages/alphabets.js")}}"></script>
@endsection

@section("custom-css")
<style>
    .card {
        cursor: pointer;
    }
</style>
@endsection
