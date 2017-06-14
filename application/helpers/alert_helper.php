<?php

	function warning($text)
	{	
		return "<div class='alert alert-warning alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		 $text </div>";
	}
	
	function success($text)
	{
		return "<div class='alert alert-success alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> $text </div>";
	}
	
	function danger($text)
	{
		return "<div class='alert alert-danger alert-dismissible' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> $text </div>";	
	}