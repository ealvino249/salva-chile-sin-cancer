<div>
    <div class="lms_blog_details_area">
        <div class="col-12">
             <div class="section__title3">
                        <h3>Blog</h3>
                    </div>
             </div>
        
        <div class="container">

            
            <div class="row justify-content-center ">
                <div class="col-xl-12 col-lg-12 ">
                    <div class="blog_page_wrapper pt-0">
                        <div class="container">
                            <div class="row">
                                     @if(isset($blogs))
                                    @foreach($blogs as $blog)
                                        <div class="col-lg-6">
                                            <div class="single_blog">
                                                <a href="{{route('blogDetails',[$blog->slug])}}">
                                                    <div class="thumb">

                                                        <div class="thumb_inner lazy"
                                                             data-src="{{getBlogImage($blog->thumbnail)}}">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="blog_meta">
                                                    <span>{{$blog->user->name}} . {{ showDate(@$blog->authored_date ) }}, {{ @$blog->authored_time }}</span>

                                                    <a href="{{route('blogDetails',[$blog->slug])}}">
                                                        <h4>{{$blog->title}}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                    @if(count($blogs)==0)
                                        <div class="col-lg-12">
                                            <div class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                                <div class="thumb">
                                                    <img style="width: 50px"
                                                         src="{{ asset('public/frontend/infixlmstheme') }}/img/not-found.png"
                                                         alt="">
                                                </div>
                                                <h1>
                                                    No hay post en este momento.
                                                </h1>
                                            </div>
                                        </div>
                                    @endif

                            </div>
                            {{ $blogs->appends(Request::all())->links() }}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
