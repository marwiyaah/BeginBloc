<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MBOYMB2ABIDXSISJ5lTlTeYVdA3k9m6FgeZ5/Rx6xQN/BHS6fNTZd8dFIn1lPlFq" crossorigin="anonymous"></script>

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
        
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@S.0.2/dist/js/bootstrap.bundle.min.js" integrity=""></script>
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
