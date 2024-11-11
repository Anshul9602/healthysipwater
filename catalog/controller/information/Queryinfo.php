<?php

use GuzzleHttp\Subscriber\Redirect;

class ControllerInformationQueryinfo extends Controller
{
  public function index()
  {
    $this->load->model('tool/Query');
    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    $mail = new Mail();
    $mail->protocol = $this->config->get('config_mail_protocol');
    $mail->parameter = $this->config->get('config_mail_parameter');
    $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
    $mail->smtp_username = $this->config->get('config_mail_smtp_username');
    $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
    $mail->smtp_port = $this->config->get('config_mail_smtp_port');
    $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
  
    $mail->setTo('healthysip01@gmail.com');
    $mail->setFrom('theodinjaipur@gmail.com');
    $mail->setSender('Healthy Sip Website', ENT_QUOTES, 'UTF-8');
    $mail->setSubject('Lead on website');
    $text = "Name :". $_POST['usrnm'];
    $text .= "\n Phone Number :".$_POST['phone'];
    $text .= "\n Email :" .$_POST['email'];
    $text .= "\n Country :" .$_POST['country'];
    $text .= "\n City :" .$_POST['city'];
    $text .= "\n State :" .$_POST['state'];
    $text .= "\n Pincode :" .$_POST['pincode'];
    $text .= "\n Address-1 :" .$_POST['Address1'];
    $text .= "\n Address-2 :" .$_POST['Address2'];
    
    $text .= "\nMessage :" .$_POST['query'];
    $mail->setText($text);
    $mail->send();
  
  
    $data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

      $this->response->setOutput($this->load->view('information/thankyou' , $data));
   

  }
}
