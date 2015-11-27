 <div class="col-md-4" style="border:1px solid #ccc;margin-left:15px;padding:10px;">
        <h4 class="page-header">
            Collaborators
        </h4>
        <form class="form-vertical" role="form" method="post" action="{{ route('projects.collaborators.create', $project->id) }}">
        <div class="form-group{{ $errors->has('collaborator') ? ' has-error' : '' }}">
            <label> Add New </label>
            {!! mention()->asText('collaborator', old('collaborator'), 'users', 'username', 'form-control') !!}
            @if ($errors->has('collaborator'))
                <span class="help-block">{{ $errors->first('collaborator') }}</span>
            @endif
        </div>
 
        <div class="form-group">
            <button type="submit" class="btn btn-info">Add User</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
</div>