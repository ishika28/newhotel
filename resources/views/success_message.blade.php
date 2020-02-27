 @if(session()->has('success_message'))
                <div class="alert alert-info" style="margin-bottom: 10px;background-color: #38b315;color:white;">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>{!!session()->get('success_message')!!}</strong>
                </div>
            @endif