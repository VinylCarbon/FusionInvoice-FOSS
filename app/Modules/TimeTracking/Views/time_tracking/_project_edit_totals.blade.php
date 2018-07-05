<div class="box box-primary">
    <div class="box-body">

        <span class="pull-left"><strong>{{ trans('fi.unbilled_hours') }}</strong></span>
        <span class="pull-right">{{ $project->unbilled_hours }}</span>
        <div class="clearfix"></div>

        <span class="pull-left"><strong>{{ trans('fi.billed_hours') }}</strong></span>
        <span class="pull-right">{{ $project->billed_hours }}</span>
        <div class="clearfix"></div>

        <span class="pull-left"><strong>{{ trans('fi.total_hours') }}</strong></span>
        <span class="pull-right">{{ $project->hours }}</span>
        <div class="clearfix"></div>

    </div>
</div>