<li>
    <a href="#" class="has-arrow" aria-expanded="false">
        <div class="nav_icon_small">
            <i class="fas fa-award"></i>
        </div>
        <div class="nav_title">
            <span>Certificado</span>
        </div>
    </a>

    <ul>

        @if (permissionCheck('certificate.index'))
            <li>
                <a href="{{ route('certificate.index') }}">Certificados</a>
            </li>
        @endif
        @if (permissionCheck('certificate.create'))
            <li>
                <a href="{{ route('certificate.create') }}">Nuevo Certificado</a>
            </li>
        @endif
        <!--@if (permissionCheck('certificate.fonts'))
            <li>
                <a href="{{ route('certificate.fonts') }}">{{ __('certificate.Fonts') }}</a>
            </li>
        @endif-->
        @if(isModuleActive('InstructorCertificate'))
            @if (permissionCheck('instructorcertificate.list'))
                <li>
                    <a href="{{ route('instructorcertificate.list') }}">{{ __('certificate.Student') }} {{ __('certificate.Certificates') }}
                        @if(env('APP_SYNC'))
                            <span class="demo_addons_sub">Addon</span>
                        @endif
                    </a>
                </li>
            @endif
        @endif
    </ul>
</li>
