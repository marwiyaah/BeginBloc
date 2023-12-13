<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

{{-- Check if ajax is working --}}
<script>
    $(document).ready(function(){
        // alert('hello');
    });
</script>
{{-- <script>
    $(document).ready(function () {
        $('#saveChangesBtn').click(function () {
            $.ajax({
                
                success: function (data) {
                    alert('hello');
                },
                error: function (error) {
                    // Handle errors, for example, display error messages
                    console.error('Error:', error);
                }
            });
        });
    });
</script> --}}
