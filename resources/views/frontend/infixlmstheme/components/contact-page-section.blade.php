<div>

    <div class="contact_section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="contact_address">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5">
                                        <div class="contact_info mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0">Contáctanos</h4>
                                            </div>
                                            <p>Si quieres contactarnos, puedes hacerlo completando el formulario de contacto, interactuando en nuestras Redes Sociales o enviarnos un mail a <a href="mailto:salva@chilesincancer.cl">salva@chilesincancer.cl</a></p>


                                            <div class="address_lines">
                                                @if(!empty(Settings('address') ))
                                                    <!--<div class="single_address_line d-flex">
                                                        <i class="ti-direction-alt"></i>
                                                        <div class="address_info">
                                                            <p> {!!Settings('address')  ? Settings('address')  : '89/2 Panthapath, Dhaka 1215, Bangladesh' !!}</p>

                                                        </div>
                                                    </div>
                                                @endif
                                                @if(!empty(Settings('phone') ))
                                                    <div class="single_address_line d-flex">
                                                        <i class="ti-headphone-alt"></i>
                                                        <div class="address_info">
                                                            <p> {!!Settings('phone') !!}</p>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(!empty(Settings('email') ))

                                                    <div class="single_address_line d-flex">
                                                        <i class="ti-email"></i>
                                                        <div class="address_info">
                                                            <a> {!!Settings('email') !!}</a>
                                                            <p>Envíanos un mensaje y te responderemos lo más pronto posible.</p>
                                                        </div>
                                                    </div>-->
                                                @endif
                                                <div class="social_links">
                                                    <h4>Síguenos en nuestras redes</h4>
                                                    <span style="padding:10px;"><a href="https://www.facebook.com/chilesincancer" target="_blank"> <i class="fab fa-facebook-f" style="color:#CF3561;margin-top:15px;"></i> </a></span>
                                                    <span style="padding:10px;"> <a href="https://www.instagram.com/chilesincancer/" target="_blank"><i class="fab fa-instagram" style="color:#CF3561;margin-top:15px;"></i> </a></span>
                                                    <span style="padding:10px;"><a href="https://www.youtube.com/channel/UChQ6Td90UMpLtD6L6sQSOEg" target="_blank"> <i class="fab fa-youtube" style="color:#CF3561;margin-top:15px;"></i> </a></span>
                                                    <span style="padding:10px;"><a href="https://cl.linkedin.com/company/fundaci%C3%B3n-chilesinc%C3%A1ncer" target="_blank"> <i class="fab fa-linkedin" style="color:#CF3561;margin-top:15px;"></i></a></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="contact_form_box mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0">Envíanos un mensaje</h4>
                                            </div>
                                            <form class="form-area contact-form" id="myForm"
                                                  action="{{route('contactMsgSubmit')}}"
                                                  method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="primary_label">{{__('frontend.Name')}}</label>
                                                        <input name="name" placeholder="Escribe tu nombre"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = 'Escribe tu nombre'"
                                                               class="primary_input mb_20" type="text" required
                                                               value="{{old('name')}}">
                                                        <span class="text-danger"
                                                              role="alert">{{$errors->first('name')}}</span>

                                                        <label
                                                            class="primary_label">{{__('frontend.Email Address')}}</label>
                                                        <input name="email" required
                                                               placeholder="Escribe tu dirección de correo electrónico"
                                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = 'Escribe tu dirección de correo electrónico'"
                                                               class="primary_input mb_20"
                                                               type="email" value="{{old('email')}}">
                                                        <span class="text-danger"
                                                              role="alert">{{$errors->first('email')}}</span>
                                                        <label class="primary_label">{{__('frontend.Subject')}}</label>
                                                        <input name="subject" required
                                                               placeholder="Escribe el asunto del mensaje"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = 'Escribe el asunto del mensaje'"
                                                               class="primary_input mb_20" type="text"
                                                               value="{{old('subject')}}">
                                                        <span class="text-danger"
                                                              role="alert">{{$errors->first('subject')}}</span>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="primary_label">{{__('frontend.Message')}}</label>
                                                        <textarea required class="primary_textarea mb-0" name="message"
                                                                  placeholder="Escribe tu mensaje"
                                                                  onfocus="this.placeholder = ''"
                                                                  onblur="this.placeholder = '{{__('frontend.Write your message')}}'"
                                                        >{{old('message')}}</textarea>
                                                        <span class="text-danger"
                                                              role="alert">{{$errors->first('message')}}</span>
                                                    </div>

                                                    <div class="col-12 mt_10 mb_20">


                                                        @if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true')
                                                            <input type="hidden" name="hasCaptcha"
                                                                   value="{{saasEnv('NOCAPTCHA_FOR_CONTACT')}}">
                                                            @if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                                                {!! NoCaptcha::display(["data-size"=>"invisible"]) !!}
                                                                {!! NoCaptcha::renderJs() !!}
                                                            @else
                                                                {!! NoCaptcha::display() !!}
                                                                {!! NoCaptcha::renderJs() !!}
                                                            @endif

                                                            @if ($errors->has('g-recaptcha-response'))
                                                                <span class="text-danger"
                                                                      role="alert">{{$errors->first('g-recaptcha-response')}}</span>
                                                            @endif
                                                        @endif


                                                    </div>
                                                    <div class="col-lg-12 text-left">
                                                        <div class="alert-msg"></div>


                                                            @if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true")
                                                                <button type="button"
                                                                        class="g-recaptcha theme_btn small_btn submit-btn w-100 text-center"
                                                                        data-sitekey="{{saasEnv('NOCAPTCHA_SITEKEY')}}"
                                                                        data-size="invisible"
                                                                        data-callback="onSubmit"
                                                                >Enviar
                                                                </button>

                                                                <script src="https://www.google.com/recaptcha/api.js"
                                                                        async
                                                                        defer></script>
                                                                <script>
                                                                    function onSubmit(token) {
                                                                        document.getElementById("myForm").submit();
                                                                    }
                                                                </script>
                                                            @else

                                                            <button type="submit"
                                                                        class="theme_btn small_btn submit-btn w-100 text-center">
                                                                    {{__('frontend.Send Message')}}
                                                                </button>
                                                            @endif

                                                    </div>
                                                </div>
                                            </form>
                                        </div>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
