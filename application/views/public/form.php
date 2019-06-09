<?php include('public_header.php');?>
<?php echo form_open_multipart('user/valid',['class'=>'container']);?>
<?php echo form_hidden('amount',$this->session->userdata('amount')); ?>
<?php if($feedback=$this->session->flashdata('feedback')):
     $feedback_class=$this->session->flashdata('feedback_class');
	?>
	<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
	<div class="alert alert-dismissible <?= $feedback_class ?>">
	<?= $feedback ?>
    </div>
	</div>
	</div>
	<?php endif; ?>
<form>
  <fieldset>
  <div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('name',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Phone no.</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'phoneno','class'=>'form-control','placeholder'=>'Phone no.','value'=>set_value('phoneno')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('phoneno',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
  <div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
	   <div class="col-lg-10">
      <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')])?>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
	</div>
	</div>
	 <div class="col-lg-6">
	<?php echo form_error('email',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Enter the amount to donate</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'amount','class'=>'form-control','placeholder'=>'Amount','value'=>set_value('amount')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="form-group">
	<div class="col-lg-10 col-lg-offset-2">
    <button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</div>
  </fieldset>
</form>


<?php include('public_footer.php');?>