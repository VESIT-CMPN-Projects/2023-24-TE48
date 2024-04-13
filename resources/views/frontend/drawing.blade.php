@extends('frontend.layouts.app')

@section('custom-css')
    <style>
        #myCanvas {
            background: white;
            height: 400px;
            width: 600px;
            border: 3px dotted gray;
        }
    </style>
@endsection

@section('breadcrumb')
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
            Draw
        </li>
    </ul>
@endsection

@section('title', 'Drawing')

@section('content')

    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-fluid ">
            <div class="card" id="aplhabets">
                <div class="d-flex flex-wrap justify-content-evenly">
                    <div class="card shadow-sm m-5">
                        <div class="text-center">
                            DRAWING BOARD
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="card shadow-sm m-5" id="learning_image_1">
                            <div class="text-center">

                                <p>To draw, drag in the space below. Choose tool: <a href="#"
                                        onclick="tool1.activate();">Lines</a> | <a href="#"
                                        onclick="tool2.activate();">Clouds</a>, or <a href="#"
                                        onclick="reset.activate();">Clear</a></p>
                                <canvas id="myCanvas"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.15/paper-core.min.js"></script>

    <script>
        paper.install(window);
        // Keep global references to both tools, so the HTML
        // links below can access them.
        var tool1, tool2, reset;

        window.onload = function() {
            paper.setup('myCanvas');

            // Create two drawing tools.
            // tool1 will draw straight lines,
            // tool2 will draw clouds.

            // Both share the mouseDown event:
            var path;

            function onMouseDown(event) {
                path = new Path();
                path.strokeColor = 'rebeccaPurple';
                path.strokeWidth = 3;
                path.add(event.point);
            }

            tool1 = new Tool();
            tool1.onMouseDown = onMouseDown;

            tool1.onMouseDrag = function(event) {
                path.add(event.point);
            }

            tool2 = new Tool();
            tool2.minDistance = 20;
            tool2.onMouseDown = onMouseDown;

            tool2.onMouseDrag = function(event) {
                // Use the arcTo command to draw cloudy lines
                path.arcTo(event.point);
            }

            paper.view.draw();
        }
    </script>
@endsection
