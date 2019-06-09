<?php
$config=[
  'form_rules'=>[
                   [
				     'field'=>'name',
					 'label'=>'Name',
					 'rules'=>'required|alpha_numeric_spaces'
				   ],
				   [
				   'field'=>'phoneno',
					 'label'=>'Phone no.',
					 'rules'=>'required|numeric',
				   ],
				   [
				   'field'=>'email',
					 'label'=>'Email address',
					 'rules'=>'required',
				   ],
				   [
				   'field'=>'amount',
					 'label'=>'Amount',
					 'rules'=>'required|numeric',
				   ]
				  ]
];				  