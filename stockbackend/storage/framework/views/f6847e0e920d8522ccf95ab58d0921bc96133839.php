<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="./css/index.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="container-all d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="search-box col-4">
                <h1>輕鬆投</h1>
                <h3>智能投資</h3>
                <div class="col-12 form-group flex-column">
                    <form action="/basic_info">
                        <input id="checkID" type="text" class="form-control search-form border-0" placeholder="股票代碼">
                        <span id="test_result" class="d-flex justify-content-center"></span>
                    </form>
                </div>
                <span class="pb-3 d-flex justify-content-center">輕鬆分析，聰明投資</span>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {

        $('#checkID').change(function(){
            var ID;
            ID = $('#checkID').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'GET',
                url: '/ajax/checkID',
                contentType: false,
                cache: false,
                processData: false,
                // data: ,
                success: function (res) {
                    if (res == true) {
                        $("#test_result").text("請輸入Enter查詢");
                        $("#test_result").css("color","#41c44e");

                    } else {
                        $("#test_result").text("查無此代碼");
                        $("#test_result").css("color","#41c44e");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });

        });
    });




</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Documents\GitHub\StockIntegrationPlatform\stockbackend\resources\views/front/index.blade.php ENDPATH**/ ?>