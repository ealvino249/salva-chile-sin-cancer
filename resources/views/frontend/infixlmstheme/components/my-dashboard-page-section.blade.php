<div>
    <div class="main_content_iner main_content_padding">
        <div class="container">
            <div class="row">
                    <div class="col-sm-12"><center><img src="{{getProfileImage(Auth::user()->image)}}" style="margin-bottom:60px;" class="img_home" width="150px"/></center></div>
           </div>
          
                <div class="col-lg-12 ">
                    <div class="cat_welcome_text mb_20">
                        <h3>{{@$wish_string}}, {{Auth::user()->name}} </h3>
                        <!--<p>{{@$date}}</p>-->
                    </div>
                </div>
               <!-- <div class="{{Settings('student_dashboard_card_view')==0?'col-lg-6':'col-lg-12'}} ">

                    @if(Settings('student_dashboard_card_view')==0)
                        <div class="row">
                            <div class="col-md-4">
                                <h4>
                                    @if($total_spent!=0)
                                        {{getPriceFormat($total_spent)}}
                                    @else
                                        {{Settings('currency_symbol') ??'৳'}}  0
                                    @endif
                                </h4>
                                <p>{{__('frontend.Total Spent')}}</p>
                            </div>
                            <div class="col-md-4">
                                <h4>{{@$total_purchase}}</h4>
                                <p>{{__('frontend.Course Purchased')}}</p>
                            </div>
                            <div class="col-md-4">
                                <h4>
                                    @if(Auth::user()->balance==0)
                                        {{Settings('currency_symbol') ??'৳'}} 0
                                    @else
                                        {{getPriceFormat(Auth::user()->balance)}}
                                    @endif
                                </h4>
                                <p>{{__('frontend.Balance')}}</p>
                            </div>
                        </div>
                    @else
                        <div class="dashboard_card d-flex justify-content-between gap_10  dashboard_card">

                            <div class="card">
                                <h4 class="pb-0 mb-0">
                                    @if($total_spent!=0)
                                        {{getPriceFormat($total_spent)}}
                                    @else
                                        {{Settings('currency_symbol') ??'৳'}}  0
                                    @endif
                                </h4>
                                <p class="">{{__('frontend.Total Spent')}}</p>
                            </div>


                            <div class="card">
                                <h4 class="pb-0 mb-0">{{@$total_purchase}}</h4>
                                <p class="">{{__('frontend.Course Purchased')}}</p>
                            </div>

                            <div class="card">
                                <h4 class="pb-0 mb-0">
                                    @if(Auth::user()->balance==0)
                                        {{Settings('currency_symbol') ??'৳'}} 0
                                    @else
                                        {{getPriceFormat(Auth::user()->balance)}}
                                    @endif
                                </h4>
                                <p>{{__('frontend.Balance')}}</p>
                            </div>
                            @php
                                $total =\Illuminate\Support\Facades\Auth::user()->totalStudentCourses();

                            @endphp
                            <div class="card">
                                <h4 class="pb-0 mb-0">
                                    {{$total['process']}}

                                </h4>
                                <p>{{__('frontend.Course In Progress')}}</p>
                            </div>


                            <div class="card">
                                <h4 class="pb-0 mb-0">
                                    {{$total['complete']}}
                                </h4>
                                <p>{{__('frontend.Completed Courses')}}</p>
                            </div>

                            <div class="card">
                                <h4 class="pb-0 mb-0">
                                    {{\Illuminate\Support\Facades\Auth::user()->totalCertificate()}}
                                </h4>
                                <p>{{__('frontend.Certificates')}}</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>-->

        <br>
        <div class="container">
            <div class="col-12 pl-0">
                <!-- dashboard_banner  -->
                @if($mycourse)
                    @foreach($mycourse as $key=>$single_course)
                        @if($key<1)
                            @php
                                $course =$single_course->course;
                            @endphp
                             <div class="col-xl-4 col-md-6">
                                <div class="couse_wizged mb_30">
                                    <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                        <div class="thumb">
                                            <div class="thumb_inner"
                                                 style="background-image: url('{{ getCourseImage($course->thumbnail) }}')">                                            </div>
                                        </div>
                                    </a>
                                    <!--<div class="course_content">
                                        <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                            <h4 class="noBrake" style="margin-top:-50px;" title="{{@$course->title}}">{{@$course->title}}</h4>
                                        </a>
                                    </div>-->
                                </div>
                            </div>
                                 <!--Final del banner del curso-->
                                
                                    
                                    <!--<p>{!! shortDetails($course->about,200) !!}</p>
                                    <p>Este es tu progreso</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: {{round($course->loginUserTotalPercentage)}}%"
                                             aria-valuenow="25"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                    <div class="course_qualification">
                                        <p> {{round($course->loginUserTotalPercentage)}}% {{__('student.Complete')}}</p>
                                        <div class="rating_star text-right pt-2">-->

                                            @php
                                                $PickId=$course->id;
                                            @endphp

                                           <!-- @if(!$course->isLoginUserReview)
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
                                            @else
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span> {{$course->totalReview}}/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            @endif-->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            
            <!---->
            
            @yield('frontend.infixlmstheme.pages.myCourses.test')
            
            <!---->
            
            
            
            
            
            
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="margin-top:-40px;">
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
        </div>
    </div>
    
    
    
    

    



        <!--<div class="recommended_courses">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin_50">
                            <h3>Más cursos que ver</h3>
                            <p>¿Estás listo para tu próxima lección?</p>
                        </div>
                    </div>

                    @if(isset($courses))
                        @foreach($courses as $course)
                            <div class="col-xl-4 col-md-6">
                                <div class="couse_wizged mb_30">
                                    <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                        <div class="thumb">
                                            <div class="thumb_inner"
                                                 style="background-image: url('{{ getCourseImage($course->thumbnail) }}')">
                                                <x-price-tag :price="$course->price"
                                                             :discount="$course->discount_price"/>

                                            </div>
                                        </div>
                                    </a>
                                    <div class="course_content">
                                        <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                            <h4 class="noBrake" title="{{@$course->title}}">{{@$course->title}}</h4>
                                        </a>
                                        <div class="rating_cart">
                                            <div class="rateing">
                                                <span>{{$course->totalReview}}/5</span>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <div class="course_less_students">
                                            <a>
                                                <i class="ti-agenda"></i> {{count($course->lessons)}} {{__('student.Lessons')}}
                                            </a>
                                            <a>
                                                <i class="ti-user"></i> {{$course->total_enrolled}} {{__('student.Students')}}
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>-->
           <!-- <div class="recommended_courses">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin_50">
                            <h3>{{__('student.Quiz you might like')}}</h3>
                            <p>{{__('student.Are you ready for your next lesson')}}?</p>
                        </div>
                    </div>
                    @if(isset($quizzes))
                        @foreach($quizzes as $course)
                            <div class="col-xl-4 col-md-6">
                                <div class="quiz_wizged mb_30">

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
                                                <span>0/5</span>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            @auth()
                                                @if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart)
                                                    <a href="#" class="cart_store"
                                                       data-id="{{$course->id}}">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                @endif
                                            @endauth
                                            @guest()
                                                @if(!$course->isGuestUserCart)
                                                    <a href="#" class="cart_store"
                                                       data-id="{{$course->id}}">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                @endif
                                            @endguest
                                        </div>
                                        <div class="course_less_students">
                                            <a> <i class="ti-agenda"></i> {{count($course->quiz->assign)}}
                                                {{__('student.Question')}}</a>
                                            <a>
                                                <i class="ti-user"></i> {{$course->total_enrolled}} {{__('student.Students')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>-->


           <!-- <div class="recommended_courses">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin_50">
                            <h3>Otros cursos que pueden interesarte</h3>
                            <p>Si alguno de ellos te interesa, no dudes en contactarnos.</p>
                        </div>
                    </div>
                    @if(isset($classes))
                        @foreach($classes as $course)
                            <div class="col-lg-6 col-xl-4">
                                <div class="quiz_wizged mb_30">
                                    <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                        <div class="thumb">
                                            <div class="thumb_inner lazy"
                                                 data-src="{{ getCourseImage($course->thumbnail) }}">
                                            </div>
                                            <x-price-tag :price="$course->price"
                                                         :discount="$course->discount_price"/>

                                            <span class="live_tag">{{__('student.Live')}}</span>
                                        </div>

                                    </a>

                                    <div class="course_content">
                                        <a href="{{courseDetailsUrl($course->id,$course->type,$course->slug)}}">
                                            <h4 class="noBrake" title=" {{$course->title}}">
                                                {{$course->title}}
                                            </h4>
                                        </a>
                                        <div class="rating_cart">
                                            <div class="rateing">
                                                <span>{{$course->totalReview}}/5</span>
                                                <i class="fas fa-star"></i>
                                            </div>
                                           
                                        </div>

                                        <div class="course_less_students">
                                            <a> <i
                                                    class="ti-agenda"></i> {{$course->class->total_class??0}}
                                                {{__('frontend.Classes')}}</a>
                                            <a>
                                                <i class="ti-user"></i> {{$course->total_enrolled}} {{__('frontend.Students')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>-->
        
        <!--Nuevo Código-->

        
        <!--Final del nuevo código-->
        
    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Qué opinas de este curso?</h5>
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
                                                                <textarea class="lms_summernote" name="review"
                                                                          id=""
                                                                          placeholder="{{__('frontend.Write your review') }}"
                                                                          cols="30"
                                                                          rows="10">{{old('review')}}</textarea>
                            <span class="text-danger" role="alert">{{$errors->first('review')}}</span>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="mt-40 d-flex justify-content-between">
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
</div>
