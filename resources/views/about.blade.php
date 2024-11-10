@extends('layout')

@section('content')
    <h2>About Me</h2>
    <p>Learn more about my background, skills, and hobbies.</p>

    <!-- Skills with Progress Bars -->
    <h3>Skills</h3>
    <div class="mb-3">
        <h5>Web Development</h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%">80%</div>
        </div>
    </div>
    <div class="mb-3">
        <h5>Graphic Design</h5>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%">70%</div>
        </div>
    </div>

    <!-- Accordion for Experience and Hobbies -->
    <h3>Experience & Hobbies</h3>
    <div class="accordion" id="experienceAccordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                        Web Developer
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#experienceAccordion">
                <div class="card-body">
                    Experience working with modern web technologies and creating responsive websites.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                        Photography
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#experienceAccordion">
                <div class="card-body">
                    Passionate about capturing moments and exploring the art of photography.
                </div>
            </div>
        </div>
    </div>
@endsection
