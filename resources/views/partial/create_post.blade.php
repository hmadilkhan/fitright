<form method="post" enctype="multipart/form-data" action="" id="create_post_form">
    @csrf
    <input type="hidden" name="timeline_id" value="{{ session('timelineID') }}">
    <input type="hidden" name="youtube_title" value="">
    <input type="hidden" name="youtube_video_id" value="">
    <input type="hidden" name="location" value="">
    <input type="hidden" name="soundcloud_id" value="">
    <input type="hidden" name="user_tags" value="">
    <input type="hidden" name="soundcloud_title" value="">
    <input type="hidden" name="type" value="posts">
<div class="central-meta postbox">
    <span class="create-post">Create post</span>
    <div class="new-postbox">
        <figure>
            <img width="45" height="45" src="{{(session('user')->avatar ? asset('storage/app/images/avatar/'.session('user')->avatar) : asset('public/images/resources/admin.jpg'))}}" alt="">
        </figure>
        <div class="newpst-input">

                <textarea rows="2" placeholder="Share some what you are thinking?" id="description" name="description"></textarea>

        </div>

        <div id="youtubeArea" class="newspst-input" style="display: none;">
            <textarea rows="1" placeholder="What are you wacthing?" id="youtube" name="youtube"></textarea>
        </div>

        <div id="imgPreviews">

        </div>

        <br/>
        <div class="attachments">
            <ul>
                <li>
                    <span class="add-loc">
                        <i class="fa fa-map-marker"></i>
                    </span>
                </li>
                <li>
                    <i class="fa fa-music"></i>
                    <label class="fileContainer">
                        <input type="file">
                    </label>
                </li>
                <li>
                    <i class="fa fa-image"></i>
                    <label class="fileContainer">
                        <input type="file" id="image" multiple  name="image[]" >
                    </label>
                </li>
                <li>
                    <i class="fa fa-video-camera"></i>
                    <label class="fileContainer">
                        <input type="file">
                    </label>
                </li>
                <li>
                    <i class="fa fa-youtube" onclick="$('#youtubeArea').toggle()" style="cursor: pointer"></i>
                </li>
                <li class="preview-btn">
                    <button class="post-btn-preview" type="button" data-ripple="">Preview</button>
                </li>
            </ul>
            <button id="btnPost" class="post-btn" type="submit" data-ripple="">Post</button>
        </div>
        <div class="add-location-post">
            <span>Drag map point to selected area</span>
            <div class="row">

                <div class="col-lg-6">
                    <label class="control-label">Lat :</label>
                    <input type="text" class="" id="us3-lat" />
                </div>
                <div class="col-lg-6">
                    <label>Long :</label>
                    <input type="text" class="" id="us3-lon" />
                </div>
            </div>
            <!-- map -->
            <div id="us3"></div>
        </div>
    </div>
</div><!-- add post new box -->
</form>
@section('script')
    <script type="text/javascript">
        $('#create_post_form').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url:"{{ url('/create-post') }}",
                method:"POST",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    // setting a timeout
                    $('#btnPost').attr('disable','true');

                },
                success:function(data)
                {
                    $('#btnPost').attr('disable','false');
                    $("#create_post_form")[0].reset();
                    $('#imgPreviews').html('');
                    $("#over").css("display", "none");
                    $('#newposts').html(data);
                }
            });
        });
    </script>
@endsection

