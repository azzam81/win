<?php  
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';



?>

<?php include './parts/header.php';?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="" alt="">
      <h1 class="display-4 fw-normal">مرحبا</h1>
      <h3 id ="demo" ></h3>
      <p class="lead fw-normal">باقي على فتح البرنامج</p>
      <a class="btn btn-outline-secondary" href="#">ياتي قريبا</a>
    </div>
    
  <div class="container">
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث </li>
  <li class="list-group-item">مدة البث ساعه </li>
  <li class="list-group-item">خلال الفترة سيتم فتح صفحة للتسجيل </li>
  <li class="list-group-item">نهاية البث سيتم اختيار فائز</li>
  <li class="list-group-item">الرابح له نسخة مجانية</li>
</ul>
  </div>
  </div>

 

<div class="container">
<div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3> الرجاء ادخال المعلومات </h3>


  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول </label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>" >
    <div  class="form-text error"><?php echo $errors ['firstNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>" >
    <div id="emailHelp" class="form-text error"><?php echo $errors ['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني </label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors ['emailError'] ?></div>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>



<!-- Button trigger modal -->
<div class ="d-grid gap-2 col-6 mx-auto my-5" >
<button type="button"  id ="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>


<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                 <div class="modal-header">
     
                     <h5 class="modal-title" id="ModalLabel"> الرابح في المسابقة</h5>

                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
             <div class="modal-body">
                     <?php foreach($users as $user) :?>
                      <h1 class=" display-3 text-center modal-title" id="ModalLabel"> <?php echo  htmlspecialchars ($user['firstName']).' ' . htmlspecialchars ($user['lastName'])?> </h1>
                      <?php endforeach; ?>
             </div>
      
         </div>
  </div>
</div>








 <?php include './parts/footer.php';?>

