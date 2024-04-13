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
        Quizes
    </li>
</ul>
@endsection


@section("title", "QUIZY WORLD")

@section("content")

<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="card" id="aplhabets">
            <div class="d-flex flex-wrap justify-content-evenly">
                    <div class="card col-md-12 shadow-sm m-5 p-5" id="question_card">
                        <div class="text-center">
                            @if($question->question_image != null)
                                <img class="mw-100 mh-250px card-rounded" alt="" src="{{ asset($question->question_image_path)}}"/>
                            @endif
                            <p class="fs-2">{{ $question->question_text}}</p>
                        <audio src="{{ asset($question->question_voice_path) }}" id="question_audio"></audio>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($question->options as $i => $option)
                            <div class="col-md-5 card shadow-sm m-5" id="{{"option_card_" . $i}}" data-correct="{{ $option->is_correct }}">
                                <div class="text-center">
                                    @if($option->option_image != null)
                                        <img class="mw-100 mh-150px card-rounded" alt="" src="{{ asset($option->option_image_path)}}"/>
                                    @endif
                                    <p class="fs-2">{{ $option->option_text}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>


            </div>

            <div class="d-flex flex-wrap justify-content-between p-10">
                <a href="{{ route("quizzes.show", ($question->id-1))}}" class="btn btn-success" id="prev-quest-btn">
                    PREVIOUS QUESTION
                </a>
                <a href="{{ route("quizzes.show", ($question->id+1))}}" class="btn btn-success" id="next-quest-btn">
                    NEXT QUESTION
                </a>
            </div>
        </div>
        <audio src="{{ asset("assets/media/options/right_answer.mp3") }}" id="right_answer_audio"></audio>
        <audio src="{{ asset("assets/media/options/wrong_answer.mp3") }}" id="wrong_answer_audio"></audio>
    </div>
</div>
@endsection

@section("custom-js")
    <script src="{{ asset("assets/js/custom/pages/quiz.js")}}"></script>
@endsection

@section("custom-css")
<style>
    .card {
        cursor: pointer;
    }
</style>
@endsection
