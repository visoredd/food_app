	<!-- jQuery -->
    <script src="<?php echo $this->config->item('style_url'); ?>js/jquery.js"></script>
    <!-- Validation JS -->
	<script src="<?php echo $this->config->item('style_url'); ?>js/jquery.validate.js"></script>
    <!-- MultiSelectDropDown JS -->
	<script src="<?php echo $this->config->item('style_url'); ?>js/jqueryMultiSelectDropDown.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->config->item('style_url'); ?>js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	jQuery.validator.addMethod("lettersonly", function(value, element) {
		  return this.optional(element) || /^[a-z]+$/i.test(value);
		}, "Letters only please!"); 
    </script>