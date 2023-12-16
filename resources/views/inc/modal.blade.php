{{-- <!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="post" id="addProductForm">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="errMsgContainer">

                    </div>

                    <div class="form-group mt-2">
                        <label for="name">Product name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Product name">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_product">Save</button>
                </div>
            </div>
        </div>
    </form>
</div> --}}

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{{-- pagination --}}
<script>
    $(document).on('click','.pagination a',function(e){
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        post(page);
    })

    function post(page){
        $.ajax({
            url: "/pagination/paginate-data?page=" + page,
            success: function (res) {
            $('.well').html(res);
            }
        });

    }
</script>