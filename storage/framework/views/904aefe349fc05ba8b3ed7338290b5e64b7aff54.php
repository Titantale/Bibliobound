

<?php $__env->startSection('content'); ?>
<div class="row mt-5">
    <div class="col">
        <h3><?php echo e($food -> food_name); ?></h3>
    </div>
</div>

<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    margin-left: 50px;
  }
  th {
    background-color: #ddd;
  }
  h3 {
  font-size: 36px;
  font-weight: bold;
  margin-top: -20px;
  margin-bottom: 30px;
  margin-left: 50px;
  
}
.location{
    width: 80%;
    margin: auto;
    padding: 80px 0;
}
.location iframe{
    width: 100%;
}
.btn-secondary {
  font-size: 16px;
  padding: 12px 20px;
}
.whatsapp-btn {
        background-color: #25d366; /* Green background */
        color: white; /* White text */
        padding: 12px 20px; /* Some padding */
        border: none; /* Remove border */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Add a pointer cursor on hover */
        font-size: 16px; /* Increase font size */
        font-weight: bold; /* Make text bold */
        float: right;
        margin-right: 250px;
        
    }

    /* Add a hover effect */
    .whatsapp-btn:hover {
        background-color: #1da362;
    }




</style>

<div class="row">
    <div class="ml-5 col-3">
        <img src="<?php echo e(asset('public/storage/image/'.$food->image)); ?>" width="300" height="300" alt="" class="img-fluid">
    </div>
    <div class="col-8">
        <table>
            <tr>
                <td><strong>Category : </strong></td>
                <td><?php echo e($food->category->name); ?></td>
            </tr>
            <tr>
                <td><strong>Location : </strong></td>
                <td><?php echo e($food->location->name); ?></td>
            </tr>
            <tr>
                <td><strong>Description : </strong></td>
                <td><?php echo e(nl2br($food -> food_description)); ?></td>
            </tr>
            <tr>
                <td><strong>Uploaded at: </strong></td>
                <td><?php echo e($food -> created_at); ?></td>
            </tr>
            <tr>
                <td><strong>Best Before : </strong></td>
                <td><?php echo e($food -> best_before); ?></td>
            </tr>
            <tr>
                <td><strong>Uploaders Name : </strong></td>
                <td><?php echo e($food->user->name); ?></td>
            </tr> 
            <tr>
                <td><strong>Uploaders Phone Number : </strong></td>
                <td><?php echo e($food->user->phone); ?></td>
            </tr>
            <tr>
                <td>
                <a href="/feed" class="btn btn-secondary btn-sm">Back</a>
                </td>
                <td>
            <button class="whatsapp-btn" onclick="redirectToWhatsApp()">Chat with owner</button>

            <script>
                function redirectToWhatsApp() {
                    var phoneNumber = "+6<?php echo e($food->user->phone); ?>"; // Retrieve phone number from the database
                    var whatsAppLink = "https://wa.me/" + phoneNumber;
                    window.location.href = whatsAppLink;
                }
            </script>
                </td>
        </tr>


        </table>
        <br>
        <section class="location">
            <!-- if ($food->location->id=="1"){
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=$linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            }
            else if ($food->location->id=="2"){
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=$linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            }
            else if ($food->location->id=="3"){
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=$linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            }
            else if ($food->location->id=="4"){
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=$linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                }
            else if ($food->location->id=="5"){
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=$linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            } -->
            <!-- $linkMap -->
            <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src=linkMap frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </section> -->
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=universiti%20sains%20malaysia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>      
        
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.privatesingle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sharekitpaV9\resources\views/member/singlePub.blade.php ENDPATH**/ ?>