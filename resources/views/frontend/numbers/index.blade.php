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
        Numbers
    </li>
</ul>
@endsection


@section("title", "Numbers")

@section("content")

<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="card" id="aplhabets">
            <div class="d-flex flex-wrap justify-content-evenly">
                @foreach ($numbers as $number)
                    <a href="{{ route("numbers.show", $number->id)}}" class="card shadow-sm m-5">
                        <div class="text-center">
                            <img class="mw-100 mh-200px card-rounded p-2" alt="" src="{{ asset($number->cover_image)}}"/>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
