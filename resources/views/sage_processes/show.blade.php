@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sage Process
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('sage_processes.show_fields')
                    <a href="{!! route('sageProcesses.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection