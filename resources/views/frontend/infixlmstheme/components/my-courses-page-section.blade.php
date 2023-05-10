<div>
    <div class="main_content_iner main_content_padding">
        <div class="container">
            <div class="my_courses_wrapper">
                <div class="row">
                    <div class="col-12">
                        <!--<div class="section__title3 margin-50">
                            <h3>
                                @if( routeIs('myClasses'))
                                    Mis clases en vivo
                                @elseif( routeIs('myQuizzes'))
                                    Mis examenes
                                @else
                                    Mis cursos
                                @endif
                            </h3>
                        </div>-->
                        
                    <!--<div class="row">
                    <div class="col-sm-12"><center><img src="{{getProfileImage(Auth::user()->image)}}" style="margin-bottom:60px;" class="img_home" width="150px"/></center></div>
           </div>-->    

                    <div class="cat_welcome_text mb_20">
                        <h3>Bienvenid@, {{Auth::user()->name}} </h3>
                        <!--<p>{{@$date}}</p>-->
                </div>
                    </div>
                    

                    @php
                        if (routeIs('myClasses')){
                            $search_text = trans('Mis clases');
                            $search_route ='';
                        }elseif (routeIs('myQuizzes')){
                            $search_text = trans('Mis exámenes');
                            $search_route ='';
                        }else{
                            $search_text = trans(';Mis cursos');
                            $search_route ='';
                        }
                    @endphp
                    <div class="col-xl-6 col-md-6">
                        <div class="short_select d-flex align-items-center pt-0 pb-3">
                            <h5 class="mr_10 font_16 f_w_500 mb-0">Filtrar por:</h5>
                            <input type="hidden" id="siteUrl" value="{{route(\Request::route()->getName())}}">
                            <select class="theme_select my-course-select w-50" id="categoryFilter">
                                <option value=""
                                        data-display="Todas las categorías">Todas las categorías</option>
                                @foreach($categories   as $category)
                                    <option
                                        value="{{$category->id}}" {{@$category_id==$category->id?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class=" col-xl-6 col-md-6">
                        <form action="{{route(\Request::route()->getName())}}">
                            <div class="input-group theme_search_field pt-0 pb-3 float-right w-50">
                                <div class="input-group-prepend">
                                    <!--<button class="btn" type="button" id="button-addon1"><i
                                            class="ti-search"></i>
                                    </button>-->
                                </div>

                                <!--<input type="text" class="form-control" name="search"
                                       placeholder="Buscar" value="{{$search}}"
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = '{{$search_text}}'">-->

                            </div>
                        </form>
                    </div>
                    @if(isset($courses))
                        @foreach ($courses as $SingleCourse)
                            @php
                                $course=$SingleCourse->course;
                            @endphp
                            <div class="col-xl-4 col-md-6">
                                @if($course->type==1)
                                    <div class="couse_wizged">
                                          <a href="{{route('continueCourse',[$course->slug])}}">
                                        <div class="thumb">
                                            <div class="thumb_inner lazy"
                                                 data-src="{{ getCourseImage($course->thumbnail) }}">
                                                <x-price-tag :price="$course->price"
                                                             :discount="$course->discount_price"/>

                                            </div></a>

                                        </div>
                                        <div class="course_content">
                                            <a href="{{route('continueCourse',[$course->slug])}}">
                                                <!--<h4 class="noBrake" title="{{$course->title}}">
                                                    {{$course->title}}
                                                </h4>-->
                                            </a>
                                            @if ($SingleCourse->pathway_id!=null)
                                                <x-my-course-pathway-info :enrolld="$SingleCourse" />
                                            @endif
                                            <div class="d-flex align-items-center gap_15">
                                                <!--<div class="rating_cart">
                                                    <div class="rateing">
                                                        <span>{{$course->totalReview}}/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>-->

                                                <div class="progress_percent flex-fill text-right">
                                                    <!--<div class="progress theme_progressBar ">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: {{round($course->loginUserTotalPercentage)}}%"
                                                             aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>-->
                                                    <!--<p class="font_14 f_w_400">{{round($course->loginUserTotalPercentage)}}
                                                        % {{__('student.Complete')}}</p>-->
                                                </div>
                                            </div>
                                            <div class="course_less_students">
                                               <!-- <a>
                                                    <i class="ti-agenda"></i> {{count($course->lessons)}} {{__('student.Lessons')}}
                                                </a>-->
                                                <a>
                                                   <!-- <i class="ti-user"></i> {{$course->total_enrolled}} {{__('student.Students')}}-->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($course->type==2)
                                    <div class="quiz_wizged">
                                        <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                            <div class="thumb">
                                                <div class="thumb_inner lazy"
                                                     data-src="{{ getCourseImage($course->thumbnail) }}">

                                                    <x-price-tag :price="$course->price"
                                                                 :discount="$course->discount_price"/>


                                                </div>
                                                <span class="quiz_tag">{{__('quiz.Quiz')}}</span>
                                            </div>
                                        </a>
                                        <div class="course_content">
                                            <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                                <h4 class="noBrake" title="{{$course->title}}"> {{$course->title}}</h4>
                                            </a>
                                            <div class="rating_cart">
                                                <div class="rateing">
                                                    <span>{{$course->totalReview}}/5</span>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="course_less_students">

                                                <a> <i class="ti-agenda"></i>{{count($course->quiz->assign)}}
                                                    {{__('student.Question')}}</a>
                                                <!--<a>
                                                    <i class="ti-user"></i> {{$course->total_enrolled}} {{__('student.Students')}}
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                @elseif($course->type==3)
                                    <div class="quiz_wizged">
                                        <div class="thumb">
                                            <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                                <div class="thumb">
                                                    <div class="thumb_inner lazy"
                                                         data-src="{{ getCourseImage($course->thumbnail) }}">
                                                        <x-class-close-tag :class="$course->class" />

                                                        <x-price-tag :price="$course->price"
                                                                     :discount="$course->discount_price"/>


                                                    </div>
                                                    <span class="live_tag">{{__('student.Live')}}</span>
                                                </div>
                                            </a>


                                        </div>
                                        <div class="course_content">
                                            <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                                <h4 class="noBrake" title="{{$course->title}}"> {{$course->title}}</h4>
                                            </a>
                                            <div class="rating_cart">
                                                <div class="rateing">
                                                    <span>{{$course->totalReview}}/5</span>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="course_less_students">
                                                <a> <i
                                                        class="ti-agenda"></i> {{$course->class->total_class}}
                                                    {{__('student.Classes')}}</a>
                                                <a>
                                                    <i class="ti-user"></i> {{$course->total_enrolled}} {{__('student.Students')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                        
                        
                        
                        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://cstnr.chilesincancer.cl/" target="_blank"><img class="semaforo-banner" src="/public/frontend/infixlmstheme/img/semaforo-banner.png"></a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Facebook -->
<a href="https://www.facebook.com/chilesincancer" target="_blank"><i class="fab fa-facebook-f"></i></a>

<!-- Instagram -->
<a href="https://www.instagram.com/chilesincancer/" target="_blank"><i class="fab fa-instagram"></i></a>

<!-- Linkedin -->
<a href="https://cl.linkedin.com/company/fundaci%C3%B3n-chilesinc%C3%A1ncer" target="_blank"><i class="fab fa-linkedin-in"></i></a>


<!-- Youtube -->
<a href="https://www.youtube.com/channel/UChQ6Td90UMpLtD6L6sQSOEg" target="_blank"><i class="fab fa-youtube"></i></a>

                </div>
            </div>

                            <div class="pt-3">
                                {{ $courses->links() }}
                            </div>
                    @endif
                    @if(count($courses)==0)
                        <div class="col-12">
                            <div class="section__title3 margin_50">
                                @if( routeIs('myClasses'))
                                    <p class="text-center">{{__('student.No Class Purchased Yet')}}!</p>
                                @elseif( routeIs('myQuizzes'))
                                    <p class="text-center">{{__('student.No Quiz Purchased Yet')}}!</p>
                                @else
                                    <p class="text-center">{{__('student.No Course Purchased Yet')}}!</p>
                                @endif

                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
