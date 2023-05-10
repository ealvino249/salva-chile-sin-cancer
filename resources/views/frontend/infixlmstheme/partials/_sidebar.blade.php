<meta charset="UTF-8"/>
<!-- sidebar part here -->

<style>
.theme_btn4 {
    background: linear-gradient(92.72deg, #D03662 -0.75%, #E74F7A 115.76%);
    border-radius: 5px;
    font-family: Poppins;
    font-size: 12px;
    color: #fff;
    font-weight: 600;
    padding: 21px 28px;
    border: 1px solid transparent;
    text-transform: capitalize;
    display: inline-block;
    line-height: 1;
}
</style>
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="{{url('/')}}"><img style="width: 200px" src="/public/backend/img/logoblanco.png"
                                    alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar_iner">
        <ul class="list-unstyled">
           
           
            @if (permissionCheck('studentDashboard'))
                <li>
                    <a href="{{route('myCourses')}}"
                       class="  d-flex align-items-center {{ routeIs('studentDashboard')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/home.png" alt="">
                        </div>
                        <span>Inicio</span>
                    </a>
                </li>
            @endif
            
<!--
                <li>
                    <a href="#"
                       class="  d-flex align-items-center ">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/calendario.png" alt="">
                        </div>
                        <span>Calendario</span>
                    </a>
                </li>
-->
            
            

                <!--<li>
                    <a href="https://csc.spherical.cl/my-notifications"
                       class="  d-flex align-items-center ">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/mensajes.png" alt="">
                        </div>
                        <span>Notificaciones</span>
                    </a>
                </li>-->
                
                <!--<li>
                    
                    <a href="https://csc.spherical.cl/blogs"
                       class="  d-flex align-items-center ">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/blog.png" alt="">
                        </div>
                        <span>Blog</span>
                    </a>
                </li>-->

            
            
            
            <!--@if (permissionCheck('myCourses'))

                <li>
                    <a href="{{route('myCourses')}}"
                       class=" d-flex align-items-center {{ routeIs('myCourses')  ? 'active' : '' }}">
                        <div class="menu_icon">
                             <img class="menu_icon" src="/public/frontend/infixlmstheme/img/svg/Book_open.svg" alt="">
                        </div>
                        <span>{{__('common.My Courses')}}</span>
                    </a>
                </li>
            @endif-->
            <!--@if (permissionCheck('myQuizzes'))
                <li>
                    <a href="{{route('myQuizzes')}}"
                       class=" d-flex align-items-center {{ routeIs('myQuizzes')  ? 'active' : '' }}">
                        <div class="menu_icon">
                           <img class="menu_icon" src="/public/frontend/infixlmstheme/img/blog.png" alt="">
                        </div>
                        <span>Exámenes</span>
                    </a>
                </li>
            @endif-->

            
            <!--
            @if (permissionCheck('myClasses'))

                <li>
                    <a href="{{route('myClasses')}}"
                       class=" d-flex align-items-center {{ routeIs('myClasses')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/my_quiz.svg" alt="">
                        </div>
                        <span>{{__('common.Live Classes')}}</span>
                    </a>
                </li>
            @endif
            

                @if(isModuleActive('Appointment'))
                    {{-- @if(permissionCheck('myAppointment')) --}}
                    <li>
                        <a href="{{route('myAppointment')}}"
                           class=" d-flex align-items-center {{ routeIs('myAppointment')  ? 'active' : '' }}">
                            <div class="menu_icon">
                                <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/my_course.svg" alt="">
                            </div>
                            <span>{{__('appointment.My Appointment')}}</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('myWishlists')}}"
                           class=" d-flex align-items-center {{ routeIs('myWishlists')  ? 'active' : '' }}">
                            <div class="menu_icon">
                                <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/my_course.svg" alt="">
                            </div>
                            <span>{{__('appointment.My WishList')}}</span>
                        </a>
                    </li>
                    {{-- @endif --}}
                @endif-->
            @if (isModuleActive('Org'))
                <li>
                    <a href="{{route('myReports')}}"
                       class=" d-flex align-items-center {{ routeIs('myReports')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/my_report.svg" alt="">
                        </div>
                        <span>{{__('common.Reports')}}</span>
                    </a>
                </li>
            @endif
            @if(isModuleActive('OrgSubscription'))
                <li>
                    <a href="{{route('orgSubscriptionCourses')}}"
                       class=" d-flex align-items-center {{ routeIs('orgSubscriptionCourses')  ? 'active' : '' }}">
                        <span>{{__('org-subscription.My Plan')}}</span>
                    </a>
                </li>
            @endif 

            @if(isModuleActive('Homework'))
                <li>
                    <a href="{{route('myHomework')}}"
                       class=" d-flex align-items-center {{ routeIs('myHomework')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/my_quiz.svg" alt="">
                        </div>
                        <span>{{__('homework.Study Material')}}</span>
                    </a>
                </li>
            @endif
<!--
            @if(isModuleActive('Survey'))
                <li>
                    <a href="{{route('survey.student_survey')}}"
                       class=" d-flex align-items-center  {{ routeIs('survey.student_survey')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/compact/')}}/img/svg/purchase_history.svg" alt="">
                        </div>
                        <span>{{__('survey.Survey')}}</span>
                    </a>
                </li>
            @endif
             -->

            @if(isModuleActive('Chat'))
                <li>
                    <a class=" d-flex justify-content-between {{ routeIs('chat.index')  ? 'active' : '' }}"
                       data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                       aria-controls="collapseExample">

                        <span>@lang('chat.chat') </span>
                        <i class="fa fa-chevron-down text-black"></i>
                    </a>
                    <ul class="collapse chat-menu-ul" id="collapseExample">
                        <li>
                            <a class="chat-submenu" href="{{ route('chat.index') }}">{{ __('chat.chat_box') }}</a>
                        </li>

                        <li>
                            <a class="chat-submenu"
                               href="{{ route('chat.invitation') }}">{{ __('chat.invitation') }}</a>
                        </li>

                        <li>
                            <a class="chat-submenu"
                               href="{{ route('chat.blocked.users') }}">{{ __('chat.blocked_user') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

            
            <!--<li>
                <a href="{{route('myNotificationSetup')}}"
                   class=" d-flex align-items-center  {{ routeIs('myNotificationSetup')  ? 'active' : '' }}">
                    <div class="menu_icon">
                        <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/purchase_history.svg" alt="">
                    </div>
                    <span>{{ __('setting.Notification Setup') }}</span>
                </a>
            </li>-->
            @if(isModuleActive('BundleSubscription'))
            @endif
            
        
            <!--@if (permissionCheck('myCertificate'))
                <li>
                    <a href="{{route('myCertificate')}}"
                       class=" d-flex align-items-center  {{ routeIs('myCertificate')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/purchase_history.svg" alt="">
                        </div>
                        <span>{{__('certificate.Certificate')}}</span>
                    </a>
                </li>
            @endif-->
            
            <!--
            @if (isModuleActive('Assignment'))

                <li>
                    <a href="{{route('myAssignment')}}"
                       class=" d-flex align-items-center  {{ routeIs('myAssignment')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/purchase_history.svg" alt="">
                        </div>
                        <span>{{__('assignment.Assignment')}}</span>
                    </a>
                </li>
            @endif
            
        -->
        <!--
            @if (permissionCheck('myPurchases'))
                <li>
                    <a href="{{route('myPurchases')}}"
                       class=" d-flex align-items-center  {{ routeIs('myPurchases')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/purchase_history.svg" alt="">
                        </div>
                        <span>{{__('common.Purchase History')}}</span>
                    </a>
                </li>
            @endif
            
            -->
            <!--@if (permissionCheck('myProfile'))
                <li>
                    <a href="{{route('myProfile')}}"
                       class=" d-flex align-items-center {{ routeIs('myProfile')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/svg/perfil.png" alt="">
                        </div>
                        <span>Mi perfil</span>
                    </a>
                </li>
            @endif-->
           <!-- @if (permissionCheck('myAccount'))
                <li>
                    <a href="{{route('myAccount')}}"
                       class=" d-flex align-items-center {{ routeIs('myAccount')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/account_setting.svg" alt="">
                        </div>
                        <span>Nuevo Contrasena</span>
                    </a>
                </li>
            @endif
           
            @if (permissionCheck('deposit') && showEcommerce())
                <li>
                    <a href="{{route('deposit')}}"
                       class=" d-flex align-items-center {{ routeIs('deposit')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/account_setting.svg" alt="">
                        </div>
                        <span>{{__('common.Deposit')}}</span>
                    </a>
                </li>
            @endif
            @if (permissionCheck('logged.in.devices'))
                <li>
                    <a href="{{route('logged.in.devices')}}"
                       class=" d-flex align-items-center {{ routeIs('logged.in.devices')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/account_setting.svg" alt="">
                        </div>
                        <span>{{__('common.Logged In Devices')}}</span>
                    </a>
                </li>
            @endif
            @if (permissionCheck('referral') && showEcommerce())
                <li>
                    <a href="{{route('referral')}}"
                       class=" d-flex align-items-center {{ routeIs('referral')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img src="{{asset('/public/frontend/infixlmstheme/')}}/img/svg/account_setting.svg" alt="">
                        </div>
                        <span>{{__('common.Referral')}}</span>
                    </a>
                </li>
            @endif
            @if(isModuleActive('Subscription'))
                @if(isSubscribe())
                    <li>
                        <a href="{{route('subscriptionCourses')}}"
                           class=" d-flex align-items-center {{ routeIs('subscriptionCourses')  ? 'active' : '' }}">

                            <span>{{__('subscription.Subscription')}}</span>
                        </a>
                    </li>
                @endif
            @endif
            @if(isModuleActive('Affiliate') && hasAffiliateAccess() )
                <li>
                    <a href="{{route('affiliate.my_affiliate.index')}}"
                       class=" d-flex align-items-center {{ routeIs('affiliate.my_affiliate.index')  ? 'active' : '' }}">
                        <span>{{__('affiliate.My Affiliate')}}</span>
                    </a>
                </li>
            @endif
            -->

            @if(isModuleActive('SupportTicket') && permissionCheck('student.support-ticket.index'))
                <li>
                    <a href="{{route('student.support-ticket.index')}}"
                       class=" d-flex align-items-center {{ routeIs('student.support-ticket.index')  ? 'active' : '' }}">
                        <span>{{__('ticket.support_ticket')}}</span>
                    </a>
                </li>
            @endif
            
            <li>
            <a href="https://salva.chilesincancer.cl/contact-us"
                       class=" d-flex align-items-center {{ routeIs('myProfile')  ? 'active' : '' }}">
                        <div class="menu_icon">
                            <img class="menu_icon" src="/public/frontend/infixlmstheme/img/email-24.png" alt="">
                        </div>
                        <span>Contacto</span>
                    </a>
            </li>
            <li>
             <a href="https://cstnr.chilesincancer.cl/" target="_blank"
                                           class="theme_btn4 d-block text-center height_50 mb_10" style="margin-top:30px">Conoce tu riesgo de cáncer</a>  
            </li>

        </ul>
    </div>
</nav>
<!-- sidebar part end -->
