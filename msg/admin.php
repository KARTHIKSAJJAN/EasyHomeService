<?php if (isset($_GET['msg'])): ?>
<div class="container" style="margin-top: 30px">
    <?php if ($_GET['msg'] == 'success'): ?>
    <div class="alert alert-success">
        <h3>Success</h3>
        <p>Booking has been removed successfully.</p>
    </div>
    <?php elseif ($_GET['msg'] == 'failed'): ?>
    <div class="alert alert-danger">
        <h3>Failure</h3>
        <p>There is a Problem while removing the booking, Please try again after sometime!</p>
    </div>
    <?php endif; ?>
</div>
<?php endif;
