@extends('backend.master')
@php
    $table_name='categories';
@endphp
@section('table')
    {{$table_name}}
@endsection
@section('mainContent')
    @include("backend.partials.alertMessage")
    @php
        $LanguageList = getLanguageList();
    @endphp
    <section class="sms-breadcrumb mb-40 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>Categorias</h1>
                <div class="bc-pages">
                    <a href="{{route('dashboard')}}">Categoria</a>
                    <a href="#">Cursos</a>
                    <a class="active" href="{{route('course.category')}}">Categoria</a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex mb-0">
                            <h3 class="mb-0"> @if(!isset($edit))
                                    Añadir nueva categria
                                @else
                                    Actualizar categoria
                                @endif</h3>
                            @if(isset($edit))
                                @if (permissionCheck('course.category.store'))
                                    <a href="{{route('course.category')}}"
                                       class="primary-btn small fix-gr-bg ml-4" style="line-height: 25px;"
                                       title="{{__('courses.Add New')}}">+</a>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="white-box mb_30  student-details header-menu">

                        <div class="row pt-0">
                            @if(isModuleActive('FrontendMultiLang'))
                                <ul class="nav nav-tabs no-bottom-border  mt-sm-md-20 mb-10 ml-3"
                                    role="tablist">
                                    @foreach ($LanguageList as $key => $language)
                                        <li class="nav-item">
                                            <a class="nav-link  @if (auth()->user()->language_code == $language->code) active @endif"
                                               href="#element{{$language->code}}"
                                               role="tab"
                                               data-toggle="tab">{{ $language->native }}  </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>


                        @if (isset($edit))
                            <form action="{{route('course.category.update')}}" method="POST"
                                  id="category-form"
                                  name="category-form" enctype="multipart/form-data">
                                <input type="hidden" name="id"
                                       value="{{$edit->id}}">
                                @else
                                    @if (permissionCheck('course.category.store'))
                                        <form action="{{route('course.category.store') }}" method="POST"
                                              id="category-form" name="category-form"
                                              enctype="multipart/form-data">
                                            @endif
                                            @endif
                                            @csrf

                                            <div class="tab-content">
                                                @foreach ($LanguageList as $key => $language)
                                                    <div role="tabpanel"
                                                         class="tab-pane fade @if (auth()->user()->language_code == $language->code) show active @endif  "
                                                         id="element{{$language->code}}">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                           for="nameInput">Nombre
                                                                        <strong
                                                                            class="text-danger">*</strong></label>
                                                                    <input name="name[{{$language->code}}]"
                                                                           id="nameInput"
                                                                           class="primary_input_field name {{ @$errors->has('name') ? ' is-invalid' : '' }}"
                                                                           placeholder="Nombre"
                                                                           type="text"
                                                                           value="{{isset($edit)?$edit->getTranslation('name',$language->code):old('name')}}" {{$errors->has('name') ? 'autofocus' : ''}}>
                                                                    @if ($errors->has('name'))
                                                                        <span class="invalid-feedback d-block mb-10"
                                                                              role="alert">
                                                                <strong>{{ @$errors->first('name') }}</strong>
                                                            </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="primary_input mb-25">
                                                                    <label class="primary_input_label"
                                                                           for="descriptionInput">Descripción</label>
                                                                    <input name="description[{{$language->code}}]"
                                                                           id="descriptionInput"
                                                                           class="primary_input_field description {{ @$errors->has('description') ? ' is-invalid' : '' }}"
                                                                           placeholder="Descripción"
                                                                           type="text"
                                                                           value="{{isset($edit)?$edit->getTranslation('description',$language->code):old('description')}}" {{$errors->has('description') ? 'autofocus' : ''}}>
                                                                    @if ($errors->has('description'))
                                                                        <span class="invalid-feedback d-block mb-10"
                                                                              role="alert">
                                                                <strong>{{ @$errors->first('description') }}</strong>
                                                            </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="parent">Jerarquia</label>
                                                        <select class="primary_select mb-25" name="parent"
                                                                id="parent">
                                                            <option value="">Ninguna</option>
                                                            @foreach($categories as $category)
                                                                @if(isset($edit) && $category->id==$edit->id)
                                                                    @php
                                                                        continue;
                                                                    @endphp
                                                                @endif
                                                                <option
                                                                    value="{{$category->id}}"
                                                                    {{isset($edit)?($edit->parent_id==$category->id?'selected':old('parent')):old('parent')}}
                                                                >{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="position_order">Posición</label>
                                                        <select class="primary_select mb-25"
                                                                name="position_order"
                                                                id="position_order">
                                                            @for($i=1; $i<=$max_id; $i++)
                                                                <option
                                                                    value="{{ $i }}" {{isset($edit)?($edit->position_order==$i?'selected':old('position_order')):old('position_order')}} >
                                                                    {{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="status">Estatus</label>
                                                        <select class="primary_select mb-25" name="status"
                                                                id="status"
                                                        >
                                                            <option
                                                                value="1" {{isset($edit)?($edit->status==1?'selected':''):''}}>Activo</option>
                                                            <option
                                                                value="0" {{isset($edit)?($edit->status==0?'selected':''):''}}>Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 mt-10">
                                                    <div class="primary_input mb-15">
                                                        <label class="primary_input_label"
                                                               for="placeholderFileOneName">Icono
                                                        </label>
                                                        <div class="primary_file_uploader">
                                                            <input class="primary-input filePlaceholder"
                                                                   type="text"
                                                                   value="{{isset($edit)?$edit->image:''}}"

                                                                   placeholder="{{__('student.Browse Image file')}}"
                                                                   readonly="" {{$errors->has('photo') ? 'autofocus' : ''}}>
                                                            <button class="" type="button">
                                                                <label class="primary-btn small fix-gr-bg"
                                                                       for="document_file_1">Explorar</label>
                                                                <input type="file" class="d-none fileUpload"
                                                                       name="photo"
                                                                       id="document_file_1">
                                                            </button>
                                                        </div>
                                                        <p class="image_size">{{__('Recomendado 200px x 200px')}}</p>
                                                        @if ($errors->has('photo'))
                                                            <span class="invalid-feedback d-block mb-10"
                                                                  role="alert">
                                                                <strong>{{ @$errors->first('photo') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="primary_input mb-15">
                                                        <label class="primary_input_label"
                                                               for="">Imagén del curso  </label>
                                                        <div class="primary_file_uploader">
                                                            <input class="primary-input filePlaceholder"
                                                                   type="text"
                                                                   id=" "
                                                                   value="{{isset($edit)?$edit->thumbnail:''}}"
                                                                   placeholder="Browse file"
                                                                   readonly="" {{$errors->has('thumbnail') ? 'autofocus' : ''}}>
                                                            <button class="" type="button">
                                                                <label class="primary-btn small fix-gr-bg"
                                                                       for="document_file_2">Explorar</label>
                                                                <input type="file" class="d-none fileUpload"
                                                                       name="thumbnail"
                                                                       id="document_file_2">
                                                            </button>
                                                        </div>
                                                        <p class="image_size">{{__('Tamaño recomendado 1140px x 300px')}}</p>
                                                    </div>
                                                    @if ($errors->has('thumbnail'))
                                                        <span class="invalid-feedback d-block mb-10"
                                                              role="alert">
                                                            <strong>{{ @$errors->first('thumbnail') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                @php
                                                    $tooltip = "";
                                                    if(permissionCheck('course.category.store')){
                                                          $tooltip = "";
                                                      }else{
                                                          $tooltip = trans("courses.You have no permission to add");
                                                      }
                                                @endphp
                                                <div class="col-lg-12 text-center">
                                                    <div class="d-flex justify-content-center pt_20">
                                                        <button type="submit"
                                                                class="primary-btn semi_large fix-gr-bg"
                                                                data-toggle="tooltip" title="{{@$tooltip}}"
                                                                id="save_button_parent">
                                                            <i class="ti-check"></i>
                                                            @if(!isset($edit))
                                                                Guardar
                                                            @else
                                                                Actualizar
                                                            @endif
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex mb-0">
                            <h3 class="mb-0">Lista de categorias</h3>
                        </div>
                    </div>
                    <div class="  QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <div class="">
                                <table id="lms_table" class="table Crm_table_active3">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Jerarquia</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Icono</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Acción }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $key => $category)
                                        <tr>
                                            <td> {{checkParent($category)}} {{@$category->name }}</td>
                                            <td>{{@$category->parent->name }}</td>
                                            <td>{{@$category->description }}</td>
                                            <td>
                                                <div>
                                                    <img style="width: 70px !important;"
                                                         src="{{url(@$category->image)}}" alt=""
                                                         class="img img-responsive m-2">
                                                </div>
                                            </td>

                                            <td>
                                                <img
                                                    src="@if(isset($category->thumbnail)){{url(@$category->thumbnail)}}@endif"
                                                    alt=""
                                                    class="img img-responsive m-2"
                                                    style="width: 70px !important; ">
                                            </td>
                                            <td class="nowrap">
                                                <label class="switch_toggle"
                                                       for="active_checkbox{{@$category->id }}">
                                                    <input type="checkbox"
                                                           class="@if (permissionCheck('course.category.status_update'))  status_enable_disable @endif "
                                                           id="active_checkbox{{@$category->id }}"
                                                           @if (@$category->status == 1) checked
                                                           @endif value="{{@$category->id }}">
                                                    <i class="slider round"></i>
                                                </label>
                                            </td>

                                            <td>
                                                <!-- shortby  -->
                                                <div class="dropdown CRM_dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenu1{{@$category->id}}"
                                                            data-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Seleccionar
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         aria-labelledby="dropdownMenu1{{@$category->id}}">
                                                        @if (permissionCheck('course.category.edit'))
                                                            <a class="dropdown-item edit_brand"
                                                               href="{{route('course.category.edit',$category->id)}}">Editar</a>
                                                        @endif
                                                        @if (permissionCheck('course.category.delete'))
                                                            <a onclick="confirm_modal('{{route('course.category.delete', $category->id)}}');"
                                                               class="dropdown-item edit_brand">Eliminar</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- shortby  -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <input type="hidden" name="status_route" class="status_route" value="{{ route('course.category.status_update') }}">
    @include('backend.partials.delete_modal')
@endsection
@push('scripts')
    <script src="{{asset('public/backend/js/category.js')}}"></script>
@endpush
