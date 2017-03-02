<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class sendemail extends CI_Controller {
 
  function __construct(){
      parent::__construct();
      $this->load->library('email');
  }
  function send_email() {
 
      $subject = 'Testing Email';
      $name = 'iCoreThink Technologies';
      $email = 'fadil.nylon@gmail.com';
      $body = "This is body text for test email to combine CodeIgniter and PHPmailer";
      $this->phpmailer->AddAddress($email);
      $this->phpmailer->IsMail();
      $this->phpmailer->From = 'info@icorethink.com';
      $this->phpmailer->FromName = 'iCoreThink Technologies';
      $this->phpmailer->IsHTML(true);
      $this->phpmailer->Subject = $subject;
      $this->phpmailer->Body = $body;
      $this->phpmailer->Send();
 
  }
}

