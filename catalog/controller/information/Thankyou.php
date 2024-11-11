<?php
class ControllerInformationThankyou extends Controller
{
  public function index()
  {
    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('common/home')
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('Thank You'),
      'href' => $this->url->link('information/thankyou')
    );

    $data['column_left'] = $this->load->controller('common/column_left');
    $data['column_right'] = $this->load->controller('common/column_right');
    $data['content_top'] = $this->load->controller('common/content_top');
    $data['content_bottom'] = $this->load->controller('common/content_bottom');
    $data['footer'] = $this->load->controller('common/footer');
    $data['header'] = $this->load->controller('common/header');

//    print_r($_POST);
// die;
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
  $text = "Name :". $_POST['first_name'];
  $text .= "\n Phone Number :".$_POST['phone'];
  $text .= "\n Email :" .$_POST['email_address'];
  $text .= "\nSubject :". $_POST['contact_subject'];
  $text .= "\nMessage :" .$_POST['message'];
  $mail->setText($text);
  $mail->send();



    $this->response->setOutput($this->load->view('information/thankyou', $data));
  }
}
