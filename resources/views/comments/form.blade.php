<h4 class="page-header">
    Comments
</h4>
<div class="row" style="margin-left:5px;padding:5px;">
    <form class="form-vertical" role="form" method="post" action="#">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <textarea name="comment" class="form-control" style="width:80%;" id="comment" rows="5" cols="5"></textarea>
            @if ($errors->has('comment'))
                <span class="help-block">{{ $errors->first('comment') }}</span>
            @endif
        </div>
 
        <div class="form-group">
            <button type="submit" class="btn btn-info">Add Comment</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>