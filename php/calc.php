
<div class="bg-landing">


	 <div class="container">
	    <div class="home home-demo">


			  <div class="row">
			    <div class="col-sm-2">
			      <p></p>
			    </div>

			    <div class="home-apply col-sm-8">
					<div class="home-questions">

					<h3 class="tagline-text">Broker Calculator</h3>
				    <!--   form   -->

	 <?php 
	  $fattr = array('class' => 'form-signin', 'id' => 'calc');
	  $hidden = array('vrequestemail'=>$this->session->userdata('user'));
	  //$arrprov = $ds_prov;
	  //$arrloanpurpose = $ds_loanpurpose;
		$arrloanranges = $ds_loanranges;
    	$arrapplicationtype = $ds_applicationtype;
    	$arrincometypes = $ds_incometypes;
		$arrrentowntypes = $ds_rentowntypes;
        $arrloanranges = $ds_loanranges;
        $arrrepaymenttypes = $ds_repaymenttypes;
        $arrprov = $ds_prov;

	  echo form_open('/loancalc/calc', '', $hidden); 
	  ?>


   <div>
      <div class="form-group">
        <?php echo form_label('Amount Requested:', 'iamountrequested', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vamountrequested', $arrloanranges, $vamountrequested,'class="form-control" id="iamountrequested"'); ?>
        <?php echo form_error('vamountrequested');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Type of Application:', 'itypeofapp', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vtypeofapp', $arrapplicationtype, $vtypeofapp,'class="form-control" id="itypeofapp"'); ?>
        <?php echo form_error('vtypeofapp');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Province:', 'iprov', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vprov', $arrprov, $vtypeofapp,'class="form-control" id="iprov"'); ?>
        <?php echo form_error('vprov');?>
        </div>
      </div>
    </div>									

    <div>
      <div class="form-group">
        <?php echo form_label('Beacon 1:', 'ibeacon1', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vbeacon1', 'id'=> 'ibeacon1', 'class'=>'form-control', 'value'=> set_value('vbeacon1', ''))); ?>
        <?php echo form_error('vbeacon1');?>
        </div>
      </div>
    </div>

    <div>
      <div class="form-group">
        <?php echo form_label('Beacon 2:', 'ibeacon2', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vbeacon2', 'id'=> 'ibeacon2', 'class'=>'form-control', 'value'=> set_value('vbeacon2', ''))); ?>
        <?php echo form_error('vbeacon2');?>
        </div>
      </div>
    </div>

    <div>
      <div class="form-group">
        <?php echo form_label('Income Primary:', 'iannualincome1', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vannualincome1', 'id'=> 'iannualincome1', 'class'=>'form-control', 'value'=> set_value('vannualincome1', ''))); ?>
        <?php echo form_error('vannualincome1');?>
        </div>
      </div>
    </div>

    <div>
      <div class="form-group">
        <?php echo form_label('Income Co-Applicant:', 'iannualincome2', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vannualincome2', 'id'=> 'iannualincome2', 'class'=>'form-control', 'value'=> set_value('vannualincome2', ''))); ?>
        <?php echo form_error('vannualincome2');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Income Type (Primary Applicant):', 'iincometype', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vincometype', $arrincometypes, $vincometype,'class="form-control" id="iincometype"'); ?>
        <?php echo form_error('vincometype');?>
        </div>
      </div>
    </div>

    <div>
      <div class="form-group">
        <?php echo form_label('Estimated TDS (Pre-Loan)%:', 'iestimatedtds', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vestimatedtds', 'id'=> 'iestimatedtds', 'class'=>'form-control', 'value'=> set_value('vestimatedtds', ''))); ?>
        <?php echo form_error('vestimatedtds');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Rent / Own:', 'irentown', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vrentown', $arrrentowntypes, $vrentown,'class="form-control" id="irentown"'); ?>
        <?php echo form_error('vrentown');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Repayment:', 'irepayment', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_dropdown('vrepayment', $arrrepaymenttypes, $vrepayment,'class="form-control" id="irepayment"'); ?>
        <?php echo form_error('vrepayment');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Mortgage Outstanding:', 'imortgageamount', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vmortgageamount', 'id'=> 'imortgageamount', 'class'=>'form-control', 'value'=> set_value('vmortgageamount', ''))); ?>
        <?php echo form_error('vmortgageamount');?>
        </div>
      </div>
    </div>

   <div>
      <div class="form-group">
        <?php echo form_label('Property Value:', 'ipropertyvalue', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
        <?php echo form_input(array('name'=>'vpropertyvalue', 'id'=> 'ipropertyvalue', 'class'=>'form-control', 'value'=> set_value('vpropertyvalue', ''))); ?>
        <?php echo form_error('vpropertyvalue');?>
        </div>
      </div>
    </div>


   <div>
      <div class="form-group">
        <?php echo form_label('', '', array('class'=>'col-xs-5 control-label')); ?>
	    <div class="col-xs-7">
          <?php echo form_reset(array('value'=>'Clear', 'class'=>'btn btn-md btn-primary ')); ?>
          <?php echo form_submit(array('value'=>'Calculate', 'class'=>'btn btn-md btn-primary')); ?>
        </div>
      </div>
    </div>

 
      <?php echo form_close(); ?>


				    <!-- end form -->
			    	</div>
			    </div>

			    <div class="col-sm-2">
			      <p></p>
			    </div>
			  </div>

		</div>
	 </div><!-- .container -->


</div>