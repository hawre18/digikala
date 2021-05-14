<script src="/assets/Admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets/Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/Admin/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
    <script type="text/javascript" src="/assets/Admin/plugins/dropzone.js"></script>
    <script>
        Dropzone.autoDiscover=false;
        var photosGallery=[]
        var drop=new Dropzone('#photo',{
            addRemoveLinks:true,
            url:"{{route('photos.upload')}}",
            sending:function (file,xhr,formData) {
                formData.append("_token","{{csrf_token()}}")
            },
            success: function (file,response) {
                photosGallery.push(response.photo_id)

            }
        });
        photoDocuments=function () {
            document.getElementById('photoDocum').value = photosGallery
        }
    </script>
