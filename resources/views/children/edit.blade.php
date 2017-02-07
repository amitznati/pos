@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Child
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($child, ['route' => ['children.update', $child->id], 'method' => 'patch']) !!}

                        @include('children.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection