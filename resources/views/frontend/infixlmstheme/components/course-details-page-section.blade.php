<div>
    <input type="hidden" value="{{asset('/')}}" id="baseUrl">
    <!-- course_details::start  -->
    
    <style>

        .theme_btn_lite {
    background: #FB1159 !important;
    border-radius: 30px;
    font-family: Poppins;
    font-size: 14px;
    font-weight: 500;
    padding: 7px 25px;
    border: 1px solid transparent;
    display: inline-block;
    line-height: 1;
    color: #fff !important;
    transition: all .218s ease 0s;
}


.ti-control-play {
    color:#FB1159;
}

.theme_btn4 {
  background-color: #4CAF50; /* Color de fondo del botón */
  border: none; /* Eliminar borde del botón */
  color: white; /* Color del texto del botón */
  padding: 15px 32px; /* Tamaño del botón */
  text-align: center; /* Centrar texto en el botón */
  text-decoration: none; /* Quitar subrayado del texto */
  display: inline-block; /* Hacer que el botón sea un bloque */
  font-size: 16px; /* Tamaño de fuente del texto */
  margin: 4px 2px; /* Margen entre botones */
  cursor: pointer; /* Cambiar cursor al pasar el mouse */
  animation-name: pulsate; /* Nombre de la animación */
  animation-duration: 1.5s; /* Duración de la animación */
  animation-iteration-count: infinite; /* Repetir la animación infinitamente */
}

.theme_btn4:hover {
    border: solid  2px #FB1159;
    color: #FB1159;
}

@keyframes pulsate {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}
    </style>
    <div class="course__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="course__details_title">
                        <!--<div class="single__details">
                           <div class="thumb"
                                 style="background-image: url('{{getInstructorImage(@$course->user->image)}}')"></div>
                            <div class="details_content">
                                <span>Instructor del curso</span>
                                <a href="{{route('instructorDetails',[$course->user->id,$course->user->name])}}">
                                    <h4 class="f_w_700">Chile sin Cáncer</h4>
                                </a>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span>{{__('frontend.Category')}}</span>
                                <h4 class="f_w_700">{{@$course->category->name}}</h4>
                            </div>
                        </div>-->
                        <div class="single__details">
                            <div class="details_content">
                               <!-- <span>{{__('frontend.Reviews')}}</span>-->


                                <!--<div class="rating_star">


                                    <div class="stars">
                                        @php

                                            $main_stars= @$userRating['rating'] ;

                                            $stars=intval($userRating['rating']);

                                        @endphp
                                        @for ($i = 0; $i <  $stars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @if ($main_stars>$stars)
                                            <i class="fas fa-star-half"></i>
                                        @endif
                                        @if($main_stars==0)
                                            @for ($i = 0; $i <  5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                        @endif
                                    </div>
                                    <p>{{@$userRating['rating']}}
                                        ({{@$userRating['total']}} {{__('frontend.Rating')}})</p>
                                </div>-->
                                                    <p><a href="https://salva.chilesincancer.cl/my-courses"><span style="color:#D03662;"><i class="fa fa-home"> Volver al inicio</span></i></a></p>
                            </div>
                        </div>
                    </div>

                    

                   <a href="{{route('continueCourse',[$course->slug])}}"> <div
                        class="video_screen  @if($course->host!='ImagePreview' && $course->host!='') theme__overlay @endif mb_60">
                        @if($course->host!='ImagePreview' && $course->host!='')
                            <div class="video_play text-center">
                                @if($course->host=="Self" || $course->host=="AmazonS3")
                                    <div id="vidBox">
                                        <div id="videCont">
                                            <video id="videoPlayer" loop controls  controlsList="nodownload">
                                                <source src="{{asset($course->trailer_link)}}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <a href="{{youtubeVideo($course->trailer_link)}}" id="SelfVideoPlayer"></a>

                                @endif
                                <a id="playTrailer"
                                   @if($course->host=="Vimeo")
                                   video-url="https://vimeo.com/{{getVideoId(showPicName(@$course->trailer_link))}}?autoplay=1"

                                   @else
                                   video-url="{{$course->trailer_link}}"
                                   @endif

                                   data-host="{{$course->host}}"
                                   class="play_button ">
                                    <i class="ti-control-play"></i>
                                </a>
                                <p>{{__('frontend.Preview this course')}}</p>
                            </div>
                        @endif
                    </div></a>

                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="course_tabs text-center">
                                <ul class="w-100 nav lms_tabmenu justify-content-between  mb_55" id="myTab"
                                    role="tablist">
                                    <!--<li class="nav-item">
                                        <a class="nav-link active" id="Curriculum-tab" data-toggle="tab" href="#Curriculum"
                                           role="tab" aria-controls="Curriculum"
                                           aria-selected="false">{{__('frontend.Curriculum')}}</a>
                                    </li>-->
                                    
                                    <!--<li class="nav-item">
                                        <a class="nav-link" id="Overview-tab" data-toggle="tab" href="#Overview"
                                           role="tab" aria-controls="Overview"
                                           aria-selected="true">{{__('frontend.Overview')}}</a>
                                    </li>-->
                                    
                                    <li class="nav-item">
                                        <!--<a class="nav-link" id="Instructor-tab" data-toggle="tab" href="#Instructor"
                                           role="tab" aria-controls="Instructor"
                                           aria-selected="false"></a>-->
                                    </li>
                                    <li class="nav-item">
                                       <!-- <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews"
                                           role="tab" aria-controls="Instructor"
                                           aria-selected="false"></a>-->
                                    </li>
                                    <li class="nav-item">
                                        <!--<a class="nav-link" id="QA-tab" data-toggle="tab" href="#QASection"
                                           role="tab" aria-controls="Instructor"
                                           aria-selected="false"></a>-->
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content lms_tab_content" id="myTabContent">
                                <div class="tab-pane fade" id="Overview" role="tabpanel"
                                     aria-labelledby="Overview-tab">
                                    <!-- content  -->
                                    <div class="course_overview_description">

                                        <div class="single_overview">

                                           <!--@if(!empty($course->requirements))
                                                <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Requirements')}}</h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            {!! $course->requirements !!}
                                                        </div>
                                                    </div>

                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            @endif-->

                                            @if(!empty($course->about))
                                                <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Description')}}</h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            {!! $course->about !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            @endif


                                            @if(!empty($course->outcomes))
                                                <h4 class="font_22 f_w_700 mb_20">{{__('frontend.Course Outcomes')}}</h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            {!! $course->outcomes !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            @endif
                                            <!--<div class="social_btns">
                                                <a target="_blank"
                                                   href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}"
                                                   class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                                                    {{__('frontend.Facebook')}}   </a>
                                                <a target="_blank"
                                                   href="https://twitter.com/intent/tweet?text={{$course->title}}&amp;url={{URL::current()}}"
                                                   class="social_btn Twitter_bg"> <i
                                                        class="fab fa-twitter"></i> {{__('frontend.Twitter')}}</a>
                                                <a target="_blank"
                                                   href="https://pinterest.com/pin/create/link/?url={{URL::current()}}&amp;description={{$course->title}}"
                                                   class="social_btn Pinterest_bg"> <i
                                                        class="fab fa-pinterest-p"></i> {{__('frontend.Pinterest')}}</a>
                                                <a target="_blank"
                                                   href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{URL::current()}}&amp;title={{$course->title}}&amp;summary={{$course->title}}"
                                                   class="social_btn Linkedin_bg"> <i
                                                        class="fab fa-linkedin-in"></i> {{__('frontend.Linkedin')}}</a>
                                            </div>-->

                                        </div>
                                    </div>
                                    <!--/ content  -->
                                </div>
                                <div class="tab-pane fade show active" id="Curriculum" role="tabpanel"
                                     aria-labelledby="Curriculum-tab">
                                    <!-- content  -->
                                    <h4 class="font_22 f_w_700 mb_20">Lecciones</h4>
                                    <div class="theme_according mb_30" id="accordion1">
                                        @if(isset($course->chapters))
                                            @foreach($course->chapters as $chapter)
                                                <div class="card">

                                                    <div class="card-header pink_bg" id="heading{{$chapter->id}}">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link text_white collapsed"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapse{{$chapter->id}}"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapse{{$chapter->id}}">
                                                                {{$chapter->name}}
                                                               <!-- <span
                                                                    class="course_length"> {{count($chapter->lessons)}} Actividades</span>-->
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="collapse{{$chapter->id}}"
                                                         aria-labelledby="heading{{$chapter->id}}"
                                                         data-parent="#accordion1">
                                                        <div class="card-body">
                                                            <div class="curriculam_list">
                                                                <!-- curriculam_single  -->
                                                                @foreach($chapter->lessons as $key=>$lesson)

                                                                    <div class="curriculam_single">
                                                                        <div class="curriculam_left">
                                                                            @if ($lesson->is_lock==1)
                                                                                @if (Auth::check())
                                                                                    @if ($isEnrolled)
                                                                                        @if ($lesson->is_quiz==1)

                                                                                            @foreach ($lesson->quiz as $quiz)
                                                                                                <span
                                                                                                    onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                                    class="quizLink active"
{{--                                                                                                    data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                                >
                                                                    <i class="ti-check-box"></i>
                                                                    <span
                                                                        class="quiz_name">{{@$key+1}} {{@$quiz->title}}</span>
                                                                </span>

                                                                                            @endforeach
                                                                                        @else

                                                                                            <i class="ti-control-play"></i>
                                                                                            <span
                                                                                                onclick="goFullScreen({{$course->id}},{{$lesson->id}})">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                        @endif
                                                                                    @else
                                                                                        <i class="ti-lock"></i>
                                                                                        @if ($lesson->is_quiz==1)
                                                                                            @foreach ($lesson->quiz as $quiz)
                                                                                                <span
                                                                                                    class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <span
                                                                                                data-host="{{$lesson->host}}"
                                                                                                data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                        @endif
                                                                                    @endif
                                                                                @else
                                                                                    <i class="ti-lock"></i>
                                                                                    @if ($lesson->is_quiz==1)
                                                                                        @foreach ($lesson->quiz as $quiz)
                                                                                            <span
                                                                                                class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                        @endforeach
                                                                                    @else
                                                                                        <span
                                                                                            data-host="{{$lesson->host}}"
                                                                                            data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                    @endif
                                                                                @endif
                                                                            @else
                                                                                @if ($lesson->is_quiz==1)
                                                                                    @foreach ($lesson->quiz as $quiz)
                                                                                        @if (Auth::check() && $isEnrolled)
                                                                                            <span
                                                                                                onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                                class="quizLink active"
{{--                                                                                                data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                            >
                                                                  <i class="ti-check-box"></i>
                                                        <span
                                                            class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                        </span>
                                                                                            {{--                                                        <span class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>--}}
                                                                                        @else
                                                                                            <i class="ti-check-box"></i>
                                                                                            <span
                                                                                                class="quiz_name">{{@$key+1}} {{@$quiz->title}} [Quiz]</span>
                                                                                        @endif
                                                                                    @endforeach
                                                                                @else
                                                                                    @if ($lesson->host=='Youtube')
                                                                                        <i class="ti-control-play"></i>
                                                                                        <span class="lesson_name"
                                                                                              data-host="{{$lesson->host}}"
                                                                                              data-url="{{youtubeVideo($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>

                                                                                    @elseif ($lesson->host=='Self'|| $lesson->host=="AmazonS3")
                                                                                        <i class="ti-control-play"></i>

                                                                                        <span class="lesson_name"
                                                                                              data-host="{{$lesson->host}}"
                                                                                              data-url="{{asset($lesson->video_url)}}">{{@$key+1}} {{@$lesson->name}}</span>

                                                                                    @else

                                                                                        <i class="ti-control-play"></i>
                                                                                        <span class="lesson_name"
                                                                                              data-host="{{$lesson->host}}"
                                                                                              data-url="{{$lesson->video_url}}">{{@$key+1}} {{@$lesson->name}}</span>
                                                                                    @endif
                                                                                @endif

                                                                            @endif

                                                                        </div>
                                                                        <div class="curriculam_right">
                                                                            @if ($lesson->is_lock==0)
                                                                                @if ($lesson->is_quiz==0)
                                                                                    <a href="#"
                                                                                       {{--                                                                                   class="theme_btn_lite course_play_name"--}}
                                                                                       data-course="{{$course->id}}"
                                                                                       data-lesson="{{$lesson->id}}"
                                                                                       class="theme_btn_lite goFullScreen"
                                                                                    >Ver</a>
                                                                                @else
                                                                                    <a href="#"
                                                                                       class="theme_btn_lite quizLink"
                                                                                       onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                        {{--                                                                                       data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                    >{{__('frontend.Start')}}</a>
                                                                                @endif

                                                                            @else
                                                                                @if (Auth::check() && $isEnrolled)
                                                                                    @if ($lesson->is_quiz==0)
                                                                                        <a href="#"
                                                                                           data-course="{{$course->id}}"
                                                                                           data-lesson="{{$lesson->id}}"
                                                                                           class="theme_btn_lite goFullScreen"
                                                                                        >{{__('common.View')}}</a>
                                                                                    @else
                                                                                        <a href="#"
                                                                                           onclick="goFullScreen({{$course->id}},{{$lesson->id}})"
                                                                                           class="theme_btn_lite quizLink"
                                                                                            {{--                                                                                           data-url="{{route('quizStart',[$course->id,$quiz->id,$quiz->title])}}"--}}
                                                                                        >{{__('frontend.Start')}}</a>
                                                                                    @endif

                                                                                @endif

                                                                            @endif

                                                                            @php
                                                                                $duration =0;
                                                                                 if ($lesson->is_quiz==0 || count($lesson->quiz)==0){
                                                                                    $duration= $lesson->duration;
                                                                                }else{
                                                                                    $quiz =$lesson->quiz[0];
                                                                                    $type =$quiz->question_time_type;
                                                                                    if ($type==0){
                                                                                        $duration = $quiz->question_time*count($quiz->assign);
                                                                                    }else{
                                                                                        $duration = $quiz->question_time;

                                                                                    }

                                                                                }
                                                                            @endphp
                                                                            <span
                                                                                class="nowrap">{{MinuteFormat($duration)}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        {{$lesson->description}}
                                                                    </p>
                                                                    <hr>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    @if(isset($course_exercises))
                                        @if(count($course_exercises)!=0)
                                            <div class="theme_according mb_30" id="accordion0">

                                                <div class="card">

                                                    <div class="card-header pink_bg" id="heading">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link text_white"
                                                                    data-toggle="collapse"
                                                                    data-target="#collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse">
                                                                Archivos

                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="collapse"
                                                         aria-labelledby="heading"
                                                         data-parent="#accordion1">
                                                        <div class="card-body">
                                                            <div class="curriculam_list">

                                                                <!-- curriculam_single  -->
                                                                @if(isset($course_exercises))
                                                                    @foreach($course_exercises as $key2=>$file)

                                                                        <div class="curriculam_single">
                                                                            <div class="curriculam_left">
                                                                                @if ($file->lock==0)
                                                                                    <i class="ti-unlock"></i>
                                                                                @else
                                                                                    @if(Auth::check() && $isEnrolled)
                                                                                        <i class="ti-unlock"></i>
                                                                                    @else
                                                                                        <i class="ti-lock"></i>
                                                                                    @endif

                                                                                @endif

                                                                                <span>{{@$key2+1}}. {{@$file->fileName}}</span>
                                                                            </div>

                                                                            <div class="curriculam_right">

                                                                                @if ($file->lock==0)
                                                                                    <a href="{{asset($file->file)}}"
                                                                                       class="theme_btn_lite  mr-0"
                                                                                       download>Descargar</a>
                                                                                @else
                                                                                    @if(Auth::check() && $isEnrolled)
                                                                                        <a href="{{asset($file->file)}}"
                                                                                           class="theme_btn_lite  mr-0"
                                                                                           download>Descargar</a>
                                                                                    @endif

                                                                                @endif


                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        @endif
                                    @endif

                                </div>
                                <div class="tab-pane fade " id="Instructor" role="tabpanel"
                                     aria-labelledby="Instructor-tab">
                                    <div class="instractor_details_wrapper">
                                        <div class="instractor_title">
                                            <h4 class="font_22 f_w_700">{{__('frontend.Instructor')}}</h4>
                                            <p class="font_16 f_w_400">{{@$course->user->headline}}</p>
                                        </div>
                                        <div class="instractor_details_inner">
                                            <div class="thumb">
                                                <img class="w-100" src="{{getInstructorImage(@$course->user->image)}}"
                                                     alt="">
                                            </div>
                                            <div class="instractor_details_info">
                                                <a href="{{route('instructorDetails',[$course->user->id,$course->user->name])}}">
                                                    <h4 class="font_22 f_w_700">{{@$course->user->name}}</h4>
                                                </a>
                                                <h5>  {{@$course->user->headline}}</h5>
                                                <div class="ins_details">
                                                    <p> {{@$course->user->short_details}}</p>
                                                </div>
                                                <div class="intractor_qualification">
                                                    <div class="single_qualification">
                                                        <i class="ti-star"></i> {{@$userRating['rating']}}
                                                        {{__('frontend.Rating')}}
                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-comments"></i> {{@$userRating['total']}}
                                                        {{__('frontend.Reviews')}}
                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-user"></i> {{@$course->user->totalEnrolled()}}
                                                        {{__('frontend.Students')}}
                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-layout-media-center-alt"></i> {{@$course->user->totalCourses()}}
                                                        {{__('frontend.Courses')}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            {!! @$course->user->about !!}
                                        </p>
                                    </div>
                                    <div class="author_courses">
                                        <div class="section__title mb_80">
                                            <h3>{{__('frontend.More Courses by Author')}}</h3>
                                        </div>
                                        <div class="row">
                                            @foreach(@$course->user->courses->take(2) as $c)
                                                <div class="col-xl-6">
                                                    <div class="couse_wizged mb_30">
                                                        <div class="thumb">
                                                            <a href="{{courseDetailsUrl(@$c->id,@$c->type,@$c->slug)}}">
                                                                <img class="w-100"
                                                                     src="{{ file_exists($c->thumbnail) ? asset($c->thumbnail) : asset('public/\uploads/course_sample.png') }}"
                                                                     alt="">
                                                                <x-price-tag :price="$course->price"
                                                                             :discount="$course->discount_price"/>
                                                            </a>
                                                        </div>
                                                        <div class="course_content">
                                                            <a href="{{courseDetailsUrl(@$c->id,@$c->type,@$c->slug)}}">
                                                                <h4>{{@$c->title}}</h4>
                                                            </a>
                                                            <div class="rating_cart">
                                                                <div class="rateing">
                                                                    <span>{{$c->totalReview}}/5</span>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                @auth()
                                                                    @if(!$c->isLoginUserEnrolled && !$c->isLoginUserCart)
                                                                        <a href="#" class="cart_store"
                                                                           data-id="{{$c->id}}">
                                                                            <i class="fas fa-shopping-cart"></i>
                                                                        </a>
                                                                    @endif
                                                                @endauth
                                                                @guest()
                                                                    @if(!$c->isGuestUserCart)
                                                                        <a href="#" class="cart_store"
                                                                           data-id="{{$c->id}}">
                                                                            <i class="fas fa-shopping-cart"></i>
                                                                        </a>
                                                                    @endif
                                                                @endguest
                                                            </div>
                                                            <div class="course_less_students">
                                                                <a href="#"> <i
                                                                        class="ti-agenda"></i> {{count($c->lessons)}}
                                                                    {{__('frontend.Lessons')}}</a>
                                                                <a href="#"> <i
                                                                        class="ti-user"></i> {{$c->total_enrolled}}
                                                                    {{__('frontend.Students')}} </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="tab-pane fade " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <!-- content  -->
                                    <div class="course_review_wrapper">
                                        <div class="details_title">
                                            <h4 class="font_22 f_w_700">{{__('frontend.Student Feedback')}}</h4>
                                            <p class="font_16 f_w_400">{{$course->title}}</p>
                                        </div>
                                        <div class="course_feedback">
                                            <div class="course_feedback_left">
                                                <h2>{{$course->totalReview}}</h2>
                                                <div class="feedmak_stars">
                                                    @php

                                                        $main_stars=$course->totalReview;

                                                        $stars=intval($course->totalReview);

                                                    @endphp
                                                    @for ($i = 0; $i <  $stars; $i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                    @if ($main_stars>$stars)
                                                        <i class="fas fa-star-half"></i>
                                                    @endif
                                                    @if($main_stars==0)
                                                        @for ($i = 0; $i <  5; $i++)
                                                            <i class="far fa-star"></i>
                                                        @endfor
                                                    @endif
                                                </div>
                                                <span>{{__('frontend.Course Rating')}}</span>
                                            </div>
                                            <div class="feedbark_progressbar">
                                                <div class="single_progrssbar">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{getPercentageRating($course->starWiseReview,5)}}%"
                                                             aria-valuenow="{{getPercentageRating($course->starWiseReview,5)}}"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="rating_percent d-flex align-items-center">
                                                        <div class="feedmak_stars d-flex align-items-center">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <span>{{getPercentageRating($course->starWiseReview,5)}}%</span>
                                                    </div>
                                                </div>
                                                <div class="single_progrssbar">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{getPercentageRating($course->starWiseReview,4)}}%"
                                                             aria-valuenow="{{getPercentageRating($course->starWiseReview,4)}}"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="rating_percent d-flex align-items-center">
                                                        <div class="feedmak_stars d-flex align-items-center">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <span>{{getPercentageRating($course->starWiseReview,4)}}%</span>
                                                    </div>
                                                </div>
                                                <div class="single_progrssbar">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{getPercentageRating($course->starWiseReview,3)}}%"
                                                             aria-valuenow="{{getPercentageRating($course->starWiseReview,3)}}"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="rating_percent d-flex align-items-center">
                                                        <div class="feedmak_stars d-flex align-items-center">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>

                                                        </div>
                                                        <span>{{getPercentageRating($course->starWiseReview,3)}}%</span>
                                                    </div>
                                                </div>
                                                <div class="single_progrssbar">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{getPercentageRating($course->starWiseReview,2)}}%"
                                                             aria-valuenow="{{getPercentageRating($course->starWiseReview,2)}}"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="rating_percent d-flex align-items-center">
                                                        <div class="feedmak_stars d-flex align-items-center">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <span>{{getPercentageRating($course->starWiseReview,2)}}%</span>
                                                    </div>
                                                </div>
                                                <div class="single_progrssbar">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{getPercentageRating($course->starWiseReview,1)}}%"
                                                             aria-valuenow="{{getPercentageRating($course->starWiseReview,1)}}"
                                                             aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="rating_percent d-flex align-items-center">
                                                        <div class="feedmak_stars d-flex align-items-center">
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <span>{{getPercentageRating($course->starWiseReview,1)}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="course_review_header mb_20">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="review_poients">
                                                        @if ($course->reviews->count()<1)
                                                            @if (Auth::check() && $isEnrolled)
                                                                <p class="theme_color font_16 mb-0">{{ __('frontend.Be the first reviewer') }}</p>
                                                            @else

                                                                <p class="theme_color font_16 mb-0">{{ __('frontend.No Review found') }}</p>
                                                            @endif

                                                        @else


                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating_star text-right">

                                                        @php
                                                            $PickId=$course->id;
                                                        @endphp
                                                        @if (Auth::check() && Auth::user()->role_id==3)
                                                            @if (!in_array(Auth::user()->id,$reviewer_user_ids) && $isEnrolled)


                                                                <div
                                                                    class="star_icon d-flex align-items-center justify-content-end">
                                                                    <a class="rating">
                                                                        <input type="radio" id="star5" name="rating"
                                                                               value="5"
                                                                               class="rating"/><label
                                                                            class="full" for="star5" id="star5"
                                                                            title="Awesome - 5 stars"
                                                                            onclick="Rates(5, {{@$PickId }})"></label>

                                                                        <input type="radio" id="star4" name="rating"
                                                                               value="4"
                                                                               class="rating"/><label
                                                                            class="full" for="star4"
                                                                            title="Pretty good - 4 stars"
                                                                            onclick="Rates(4, {{@$PickId }})"></label>

                                                                        <input type="radio" id="star3" name="rating"
                                                                               value="3"
                                                                               class="rating"/><label
                                                                            class="full" for="star3"
                                                                            title="Meh - 3 stars"
                                                                            onclick="Rates(3, {{@$PickId }})"></label>

                                                                        <input type="radio" id="star2" name="rating"
                                                                               value="2"
                                                                               class="rating"/><label
                                                                            class="full" for="star2"
                                                                            title="Kinda bad - 2 stars"
                                                                            onclick="Rates(2, {{@$PickId }})"></label>

                                                                        <input type="radio" id="star1" name="rating"
                                                                               value="1"
                                                                               class="rating"/><label
                                                                            class="full" for="star1"
                                                                            title="Bad  - 1 star"
                                                                            onclick="Rates(1,{{@$PickId }})"></label>

                                                                    </a>
                                                                </div>
                                                            @endif
                                                        @else

                                                            <p class="font_14 f_w_400 mt-0"><a href="{{url('login')}}"
                                                                                               class="theme_color2">{{__('frontend.Sign In')}}</a>
                                                                {{__('frontend.or')}} <a
                                                                    class="theme_color2"
                                                                    href="{{url('register')}}">{{__('frontend.Sign Up')}}</a>
                                                                {{__('frontend.as student to post a review')}}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="course_cutomer_reviews">
                                            <div class="details_title">
                                                <h4 class="font_22 f_w_700">{{__('frontend.Reviews')}}</h4>

                                            </div>
                                            <div class="customers_reviews" id="customers_reviews">


                                            </div>
                                        </div>

                                        <div class="author_courses">
                                            <div class="section__title mb_80">
                                                <h3>{{__('frontend.Course you might like')}}</h3>
                                            </div>
                                            <div class="row">
                                                @foreach(@$related as $r)
                                                    <div class="col-xl-6">
                                                        <div class="couse_wizged mb_30">
                                                            <div class="thumb">
                                                                <a href="{{courseDetailsUrl(@$r->id,@$r->type,@$r->slug)}}">
                                                                    <img class="w-100"
                                                                         src="{{ file_exists($r->thumbnail) ? asset($r->thumbnail) : asset('public/\uploads/course_sample.png') }}"
                                                                         alt="">
                                                                    <x-price-tag :price="$r->price"
                                                                                 :discount="$r->discount_price"/>
                                                                </a>
                                                            </div>
                                                            <div class="course_content">
                                                                <a href="{{courseDetailsUrl(@$r->id,@$r->type,@$r->slug)}}">
                                                                    <h4>{{@$r->title}}</h4>
                                                                </a>
                                                                <div class="rating_cart">
                                                                    <div class="rateing">
                                                                        <span>{{$r->totalReview}}/5</span>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                    @auth()
                                                                        @if(!$r->isLoginUserEnrolled && !$r->isLoginUserCart)
                                                                            <a href="#" class="cart_store"
                                                                               data-id="{{$r->id}}">
                                                                                <i class="fas fa-shopping-cart"></i>
                                                                            </a>
                                                                        @endif
                                                                    @endauth
                                                                    @guest()
                                                                        @if(!$r->isGuestUserCart)
                                                                            <a href="#" class="cart_store"
                                                                               data-id="{{$r->id}}">
                                                                                <i class="fas fa-shopping-cart"></i>
                                                                            </a>
                                                                        @endif
                                                                    @endguest
                                                                </div>
                                                                <div class="course_less_students">
                                                                    <a href="#"> <i
                                                                            class="ti-agenda"></i> {{count($r->lessons)}}
                                                                        {{__('frontend.Lessons')}}</a>
                                                                    <a href="#"> <i
                                                                            class="ti-user"></i> {{$r->total_enrolled}}
                                                                        {{__('frontend.Students')}} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content  -->
                                </div>
                                <div class="tab-pane fade " id="QASection" role="tabpanel" aria-labelledby="QA-tab">
                                    <!-- content  -->

                                    <div class="conversition_box">

                                        <div id="conversition_box"></div>

                                        <div class="row">
                                            @if ($isEnrolled)
                                                <div class="col-lg-12 " id="mainComment">
                                                    <form action="{{route('saveComment')}}" method="post" class="">
                                                        @csrf
                                                        <input type="hidden" name="course_id" value="{{@$course->id}}">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="section_title3 mb_20">
                                                                    <h3>{{__('frontend.Leave a question/comment') }}</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="single_input mb_25">
                                                                                        <textarea
                                                                                            placeholder="{{__('frontend.Leave a question/comment') }}"
                                                                                            name="comment"
                                                                                            class="primary_textarea gray_input"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb_30">

                                                                <button type="submit"
                                                                        class="theme_btn height_50">
                                                                    <i class="fas fa-comments"></i>
                                                                    {{__('frontend.Question') }}/
                                                                    {{__('frontend.comment') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endif
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar__widget mb_30">
                                <div class="sidebar__title">
                                    <h3>
                                        @if (@$course->discount_price!=null)

                                            {{getPriceFormat($course->discount_price)}}
                                        @else
                                            {{getPriceFormat($course->price)}}
                                        @endif
                                    </h3>
                                   <!-- <p>
                                        @if (Auth::check() && $isBookmarked )
                                            <i class="fas fa-heart"></i>
                                            <a href="{{route('bookmarkSave',[$course->id])}}"
                                               class="">{{__('frontend.Already Bookmarked')}}
                                            </a>
                                        @elseif (Auth::check() && !$isBookmarked )
                                            <a href="{{route('bookmarkSave',[$course->id])}}"
                                               class="">
                                                <i class="far fa-heart"></i>
                                                {{__('frontend.Add To Bookmark')}}  </a>
                                        @endif
                                    </p>-->
                                </div>


                                @if (Auth::check())
                                    @if ($isEnrolled)
                                        <a href="{{route('continueCourse',[$course->slug])}}"
                                           class="theme_btn4 d-block text-center height_50 mb_10">Ver curso</a>
                                        <div class="container">
                                        <div class="row">
                                            <a href="https://cstnr.chilesincancer.cl/" target="_blank"><img class="semaforo-sidebar" src="/public/frontend/infixlmstheme/img/semaforo-vertical.png"></a>
                                         </div>
                                     </div>
                                     </div>   
                                    @else
                                        @if($isFree)

                                            @if($is_cart == 1)
                                                <a href="javascript:void(0)"
                                                   class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                            @else
                                                <a href="{{route('addToCart',[@$course->id])}}"
                                                   class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                            @endif
                                        @else

                                            @if($is_cart == 1)
                                                <a href="javascript:void(0)"
                                                   class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                            @else
                                                <a href=" {{route('addToCart',[@$course->id])}}"
                                                   class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                            @endif
                                           <!-- <a href="{{route('buyNow',[@$course->id])}}"
                                               class="theme_line_btn d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>-->
                                        @endif
                                    @endif

                                @else
                                    @if($isFree)
                                        @if($is_cart == 1)
                                            <a href="javascript:void(0)"
                                               class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                        @else
                                            <a href=" {{route('addToCart',[@$course->id])}} "
                                               class="theme_btn4 d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                        @endif
                                    @else
                                       <!-- @if($is_cart == 1)
                                            <a href="javascript:void(0)"
                                               class="theme_btn d-block text-center height_50 mb_10">{{__('common.Added To Cart')}}</a>
                                        @else
                                            <a href=" {{route('addToCart',[@$course->id])}} "
                                               class="theme_btn d-block text-center height_50 mb_10">{{__('common.Add To Cart')}}</a>
                                            <a href="{{route('buyNow',[@$course->id])}}"
                                               class="theme_line_btn d-block text-center height_50 mb_20">{{__('common.Buy Now')}}</a>
                                        @endif-->
                                    @endif
                                @endif
                                <p class="font_14 f_w_500 text-center mb_30"></p>
                                
                                
                                <!--<h4 class="f_w_700 mb_10">{{__('frontend.This course includes')}}:</h4>
                                <ul class="course_includes">
                                    <li><i class="ti-alarm-clock"></i>
                                        <p class="nowrap"> {{ __('frontend.Duration') }} {{MinuteFormat($course->duration)}}

                                        </p></li>
                                    <li><i class="ti-thumb-up"></i>
                                        <p>{{__('frontend.Skill Level')}}
                                            @foreach($levels as $level)
                                                @if (@$course->level==$level->id)
                                                    {{ $level->title}}
                                                @endif
                                            @endforeach
                                        </p></li>
                                    <li><i class="ti-agenda"></i>
                                        <p>{{__('frontend.Lectures')}} {{count($course->lessons)}} {{__('frontend.lessons')}}</p>
                                    </li>
                                    <li><i class="ti-user"></i>
                                        <p>{{__('frontend.Enrolled')}} {{$course->total_enrolled}} {{__('frontend.students')}}</p>
                                    </li>
                                    <li><i class="ti-user"></i>
                                        <p>{{__('frontend.Certificate of Completion')}}</p></li>
                                    <li><i class="ti-blackboard"></i>
                                        <p>{{__('frontend.Full lifetime access')}}</p></li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('frontend.Review') }}</h5>
                    <button type="button" class="close" data-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <form action="{{route('submitReview')}}" method="Post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="course_id" id="rating_course_id"
                               value="">
                        <input type="hidden" name="rating" id="rating_value" value="">

                        <div class="text-center">
                                                                <textarea class="lms_summernote" name="review" name=""
                                                                          id=""
                                                                          placeholder="{{__('frontend.Write your review') }}"
                                                                          cols="30"
                                                                          rows="10">{{old('review')}}</textarea>
                            <span class="text-danger" role="alert">{{$errors->first('review')}}</span>
                        </div>


                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40">
                            <button type="button" class="theme_line_btn mr-2"
                                    data-dismiss="modal">{{ __('common.Cancel') }}
                            </button>
                            <button class="theme_btn "
                                    type="submit">{{ __('common.Submit') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @include(theme('partials._delete_model'))


</div>
