 @if(session()->has('error_message'))
                <div class="alert alert-danger" style="margin-bottom: 10px;background-color: red">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>{!!session()->get('error_message')!!}</strong>
                </div>
            @endif