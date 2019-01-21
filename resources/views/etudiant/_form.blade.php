
@if(isset($etudiant))
    {!! Form::model($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method' => 'post']) !!}
@else
{!! Form::open(['route' => 'addEtudiant']) !!}
@endif


{!! Form::label("{{ trans('etudiant.nom')}}", trans('etudiant.nom')) !!}
{!! Form::text('nom') !!}
{!! Form::label("{{ trans('etudiant.prenom')}}", trans('etudiant.prenom')) !!}
{!! Form::text('prenom') !!}
<button type="submit" class="btn btn-sn btn-primary m-t-n-xs">{{trans('commun.enregistrer')}}</button>

{!! Form::close() !!}


