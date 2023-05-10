@extends('backend.master')
@push('styles')
    <link rel="stylesheet" href="{{asset('public/backend/css/student_list.css')}}"/>
@endpush


@section('mainContent')

    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>Estudiantes</h1>
                <div class="bc-pages">
                    <a href="{{route('dashboard')}}">{{__('dashboard.Dashboard')}}</a>
                    <a href="#">Estudiantes</a>
                    <a href="#">Importar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title">
                        <h3>Importar Alumnos</h3>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 text-right mb-20">

                    <a href="{{route('regular_student_excel_download')}}">
                        <button class="primary-btn tr-bg text-uppercase bord-rad">
                            Descargar Plantilla
                            <span class="pl ti-download"></span>
                        </button>
                    </a>
                </div>

            </div>

            {{ Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'regular_student_import_save',
                                'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'student_form']) }}
            <div class="row">
                <div class="col-lg-12">


                    <div class="white-box">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-title">

                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="url" id="url" value="{{URL::to('/')}}">
                            <div class="row mb-40 mt-30">




                                <div class="col-lg-12">
                                    <div class="primary_input mb-35">
                                       
                                        <label class="primary_input_label"
                                               for="">Explorar archivo<strong
                                                class="text-danger">*</strong> </label>
                                        <div class="primary_file_uploader">
                                            <input class="primary-input" type="text" id="placeholderFileOneName"
                                                   placeholder="Explorar archivo" readonly="">
                                                   
                                            <button class="primary-btn tr-bg text-uppercase bord-rad" type="button">
                                                <label style="color:black;" class="primary_btn_1"
                                                       for="document_file_1">Buscar archivo </label>
                                                <input type="file" class="d-none" name="file" id="document_file_1">
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row mt-40">
                                <div class="col-lg-12 text-center">
                                   
                                    <button class="primary-btn fix-gr-bg">
                                        <span class="ti-check"></span>
                                        Importar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </section>

@endsection

