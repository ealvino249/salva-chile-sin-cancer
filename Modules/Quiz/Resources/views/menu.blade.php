<li>
    <a href="javascript:;" class="has-arrow" aria-expanded="false">
        <div class="nav_icon_small"><span class="fas fa-question-circle"></span></div>
        <div class="nav_title"><span>Exámenes</span></div>
    </a>
    <ul>
        @if (permissionCheck('question-group'))
            <li><a href="{{ route('question-group') }}">Grupo de preguntas</a></li>
        @endif

        @if (permissionCheck('question-bank'))
            <li><a href="{{ route('question-bank') }}">Agregar preguntas</a></li>
        @endif

        @if (permissionCheck('question-bank'))
            <li><a href="{{ route('question-bank-list') }}">Banco de preguntas</a>
            </li>
        @endif


        @if (permissionCheck('question-bank-bulk'))
            <li><a href="{{ route('question-bank-bulk') }}">{{ __('quiz.Question') }} {{ __('quiz.Bulk Import') }}</a>
            </li>
        @endif
        @if (permissionCheck('set-quiz.store'))
            <li><a href="{{ route('online-quiz') }}">Agregar examen</a></li>
        @endif
        @if (permissionCheck('quizSetup'))
            <li><a href="{{ route('quizSetup') }}">{{ __('quiz.Quiz Setup') }}</a></li>
        @endif

        @if(isModuleActive('Assignment'))
            <li><a href="{{ route('assignment_list') }}">{{ __('assignment.Assignment List') }}
                    @if(env('APP_SYNC'))
                        <span class="demo_addons_sub">Addon</span>
                    @endif
                </a></li>
        @endif
    </ul>
</li>
