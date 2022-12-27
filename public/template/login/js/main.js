$(document).ready(function() {
    $(document).on('click', '#removeRow', function() {
        var id = $(this).attr('data-id');
        var url = $(this).attr('data-url');

        if(confirm('Bạn có chắc muốn xóa mục này ?')) {
            $.ajax({
                type: 'POST',
                datatype: 'JSON',
                data: { id: id },
                url: 'http://127.0.0.1/shopnoithat/admin/menus/destroy',
                success: function(result){
                    console.log(result);
                    if (result.error == false){
                        alert(result.message);
                    } else{
                        alert('xóa lỗi vui lòng thử lại');
                    }
                }
            });
        }
    });
});