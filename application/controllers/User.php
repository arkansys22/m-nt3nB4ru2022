<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }
  public function login()	{
    $data['title'] = 'Sign In';
    $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
    $this->form_validation->set_rules('username','','trim|required', array('trim' => '', 'required' => 'Username belum diisi'));
    $this->form_validation->set_rules('password','','trim|required', array('trim' => '', 'required' => 'Password belum diisi'));
    if($this->form_validation->run() === FALSE){
        $this->load->view('fronts/user/v_login', $data);
    } else {
      if ($this->agent->is_browser())
          {
                $agent = 'Desktop ' .$this->agent->browser().' '.$this->agent->version();
          }
          elseif ($this->agent->is_robot())
          {
                $agent = $this->agent->robot();
          }
          elseif ($this->agent->is_mobile())
          {
                $agent = 'Mobile' .$this->agent->mobile().''.$this->agent->version();
          }
          else
          {
                $agent = 'Unidentified User Agent';
          }

        $modul = 'Login';
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $cek = $this->As_m->cek_login($username,$password,'user');
          $row = $cek->row_array();
          $total = $cek->num_rows();
          if ($total > 0){
            $this->session->set_userdata(
              array(
                'username'=>$row['username'],
                'level'=>$row['level'],
                'id_user'=>$row['id_user'],
                'id_session'=>$row['id_session']));

            $this->session->set_flashdata('user_loggedin','Selamat Anda Berhasil Login');
            $id = array('id_session' => $this->session->id_session);
            $data = array('user_login_status'=>'online','user_login_tanggal'=> date('Y-m-d'),'user_login_jam'=> date('H:i:s'));
            $this->db->update('user', $data, $id);

            $data2 = array (
              'log_activity_user_id'=>$row['id_user'],
              'log_activity_modul' => 'login',
              'log_activity_status' => 'login',
              'log_activity_platform'=> $agent,
              'log_activity_ip'=> $this->input->ip_address()
            );
            $this->db->insert('log_activity', $data2);
            redirect('beranda');
          }else {
            // Set message
            $this->session->set_flashdata('login_failed', 'Username Dan Password salah!');

            redirect(base_url('login'));
        }
    }
		}

  public function register(){
      $this->form_validation->set_rules('username','','trim|required|is_unique[user.username]', array('trim' => '', 'required' => 'Username belum diisi','is_unique' => 'Username telah digunakan, silahkan gunakan username lain.'));
        $this->form_validation->set_rules('email','','trim|required|valid_email|is_unique[user.email]', array('trim' => '', 'required' => 'Email belum diisi','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
        $this->form_validation->set_rules('password','','trim|required', array('trim' => '', 'required' => 'Password belum diisi'));
        $this->form_validation->set_rules('konfirmpassword','','trim|required|matches[password]', array('trim' => '', 'required' => 'Konfirmasi Password belum diisi','matches'=>'Password tidak sama! Cek kembali password Anda'));
       
        if($this->form_validation->run() != false){
          if (isset($_POST['submit']))
          {
            $username = $this->input->post('username');
            $email = $this->input->post('email');            
            $password = sha1($this->input->post('password'));
            $cek = $this->Crud_m->cek_register($username,$email,'user');
              $total = $cek->num_rows();
            if ($total > 0)
              {
              $data['title'] = 'Periksa kembali email dan password Anda!';
              redirect(site_url('daftar'));
              }else{
                $saltid   = md5($email);
                $aktivasi   = 0;
                $data = array('username'=>$this->db->escape_str($this->input->post('username')),
                                'password'=>sha1($this->input->post('password')),
                                'email'=>$this->db->escape_str($this->input->post('email')),
                                'user_status'=> $aktivasi,
                                'user_post_hari'=>hari_ini(date('w')),
                                'user_post_tanggal'=>date('Y-m-d'),
                                'user_post_jam'=>date('H:i:s'),
                                'level'=>'5',
                                'user_stat'=>'verified',
                                'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'));
                $id_user_detail = $this->Crud_m->tambah_user($data);
                $data_user_detail = array(
                    'id_user' => $id_user_detail);
                if($this->Crud_m->tambah_user_detail($data_user_detail))
                {
                  if($this->sendemail($email,$saltid,$username))
                                {
                                    $this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Segera lakukan aktivasi akun mantenbaru dari email anda. Harap merefresh pesan masuk di email Anda.</div>');
                                    redirect(base_url('daftar')
                                    );
                            }else
                                {
                                  $this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Email Verifikasi tidak terkirim</div>');
                                  redirect(base_url('daftar'));
                                }
                }
                $data['title'] = 'Sukses mendaftar';
                $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
                $this->load->view('fronts/user/v_register',$data);

                }
            }
            else
            {
              $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
              $this->load->view('fronts/user/v_register',$data);
            }

          }	else{
          $data['title'] = 'Ops.. Masih ada yang kurang. Silahkan dicek kembali.';
          $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/user/v_register',$data);
        }
  }
  public function datapengantin(){
        $this->form_validation->set_rules('cpp_namaleng','','trim|required', array('trim' => '', 'required' => 'nama lengkap pengantin pria belum diisi'));


        // $this->form_validation->set_rules('email','','trim|required|valid_email|is_unique[user.email]', array('trim' => '', 'required' => 'Email belum diisi','is_unique' => 'Email telah digunakan, silahkan gunakan email lain.'));
        // $this->form_validation->set_rules('password','','trim|required', array('trim' => '', 'required' => 'Password belum diisi'));
        // $this->form_validation->set_rules('konfirmpassword','','trim|required|matches[password]', array('trim' => '', 'required' => 'Konfirmasi Password belum diisi','matches'=>'Password tidak sama! Cek kembali password Anda'));
       
        // if($this->form_validation->run() != false){
          if (isset($_POST['submit']))
          {var_dump($_POST);
            $username = $this->input->post('username');
            $email = $this->input->post('email');            
            $password = sha1($this->input->post('password'));
            $cek = $this->Crud_m->cek_register($username,$email,'user');
              $total = $cek->num_rows();
            if ($total > 0)
              {
              $data['title'] = 'Periksa kembali email dan password Anda!';
              // redirect(site_url('daftar'));
              }else{
                $saltid   = md5($email);
                $aktivasi   = 0;
                $data = array('username'=>$this->db->escape_str($this->input->post('username')),
                                'password'=>sha1($this->input->post('password')),
                                'email'=>$this->db->escape_str($this->input->post('email')),
                                'user_status'=> $aktivasi,
                                'user_post_hari'=>hari_ini(date('w')),
                                'user_post_tanggal'=>date('Y-m-d'),
                                'user_post_jam'=>date('H:i:s'),
                                'level'=>'5',
                                'user_stat'=>'verified',
                                'id_session'=>md5($this->input->post('email')).'-'.date('YmdHis'));
                $id_user_detail = $this->Crud_m->tambah_user($data);
                $data_user_detail = array('id_user' => $id_user_detail);
                if($this->Crud_m->tambah_user_detail($data_user_detail))
                {
                  if($this->sendemail($email,$saltid,$username))
                                {
                                    $this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Segera lakukan aktivasi akun mantenbaru dari email anda. Harap merefresh pesan masuk di email Anda.</div>');
                                    // redirect(base_url('daftar')
                                    // );
                            }else
                                {
                                  $this->session->set_flashdata('msg','<div class="alert bg-5 text-center">Email Verifikasi tidak terkirim</div>');
                                  // redirect(base_url('daftar'));
                                }
                }
                $data['title'] = 'Sukses mendaftar';
                $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
                $this->load->view('fronts/user/v_datapengantin',$data);

                }
            }
            else
            {
              $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
              $this->load->view('fronts/user/v_datapengantin',$data);
            }

          } 
  //         else{
  //         $data['title'] = 'Ops.. Masih ada yang kurang. Silahkan dicek kembali.';
  //         $data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
  //         $this->load->view('fronts/user/v_datapengantin',$data);
  //       }
  // }
  public function sendemail($email,$saltid,$username){
        // configure the email setting

            $config = array (
              'protocol'    => 'smtp',
              'smtp_host'   => 'mail.mantenbaru.com',
              'smtp_port'   => '465',
              'smtp_user'   => 'activation@mantenbaru.com',
              'smtp_pass'   => 'dh4wy3p1c',
              'mailtype'    => 'html',
              'charset'     => 'iso-8859-1',
              'wordwrap'    => TRUE
              );           
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $url = base_url()."user/confirmation/".$saltid;
            $this->email->from('activation@mantenbaru.com', 'Mantenbaru');
            $this->email->to($email);
            $this->email->subject('Verifikasi Email - Mantenbaru');
            $message = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head><body><p><strong>Hallo, $username</strong></p><p>Hanya tinggal 1 langkah lagi untuk bisa bergabung dengan Mantenbaru.</p><p>Silahkan mengklik link di bawah ini</p>".$url."<br/><p>Salam Hangat</p><p>Mantenbaru Team</p></body></html>";
            $this->email->message($message);
            return $this->email->send();
      }
  public function confirmation($key){
          if($this->Crud_m->verifyemail($key))
          {
            $this->session->set_flashdata('msg','<div class="alert bg-3 text-center">Selamat Anda telah Resmi Bergabung! Silahkan Login.</div>');
            redirect(base_url('login'));
          }	else {
            $this->session->set_flashdata('msg','<div class="alert bg-3 text-center">Ops. Anda gagal, silahkan coba lagi.</div>');
            redirect(base_url('login'));
          }
      }

  public function submit_data_pengantin() {
    $agama = $this->input->post('agama');

    if ($agama == 'islam') {
      $data = array(
      'customers_islam_cpw_namaleng' => $this->input->post('customers_' . $agama . '_cpw_namaleng'),
      'customers_islam_cpw_namapang' => $this->input->post('customers_' . $agama . '_cpw_namapang'),
      'customers_islam_cpw_anakke' => $this->input->post('customers_' . $agama . '_cpw_anakke'),
      'customers_islam_cpw_anakdari' => $this->input->post('customers_' . $agama . '_cpw_anakdari'),
      'customers_islam_cpw_namabpk' => $this->input->post('customers_' . $agama . '_cpw_namabpk'),
      'customers_islam_cpw_panggilkebpk' => $this->input->post('customers_' . $agama . '_cpw_panggilkebpk'),
      'customers_islam_cpw_namaibu' => $this->input->post('customers_' . $agama . '_cpw_namaibu'),
      'customers_islam_cpw_panggilkeibu' => $this->input->post('customers_' . $agama . '_cpw_panggilkeibu'),
      'customers_islam_cpw_saudara' => $this->input->post('customers_' . $agama . '_cpw_saudara'),
      'customers_islam_cpp_namaleng' => $this->input->post('customers_' . $agama . '_cpp_namaleng'),
      'customers_islam_cpp_namapang' => $this->input->post('customers_' . $agama . '_cpp_namapang'),
      'customers_islam_cpp_anakke' => $this->input->post('customers_' . $agama . '_cpp_anakke'),
      'customers_islam_cpp_anakdari' => $this->input->post('customers_' . $agama . '_cpp_anakdari'),
      'customers_islam_cpp_namabpk' => $this->input->post('customers_' . $agama . '_cpp_namabpk'),
      'customers_islam_cpp_panggilkebpk' => $this->input->post('customers_' . $agama . '_cpp_panggilkebpk'),
      'customers_islam_cpp_namaibu' => $this->input->post('customers_' . $agama . '_cpp_namaibu'),
      'customers_islam_cpp_panggilkeibu' => $this->input->post('customers_' . $agama . '_cpp_panggilkeibu'),
      'customers_islam_cpp_saudara' => $this->input->post('customers_' . $agama . '_cpp_saudara'),
      'customers_islam_mahar' => $this->input->post('customers_' . $agama . '_mahar'),
      'customers_islam_seserahan' => $this->input->post('customers_' . $agama . '_seserahan'),
      'customers_islam_cpw_koor' => $this->input->post('customers_' . $agama . '_cpw_koor'),
      'customers_islam_cpp_koor' => $this->input->post('customers_' . $agama . '_cpp_koor'),
      'customers_islam_cpw_jubir' => $this->input->post('customers_' . $agama . '_cpw_jubir'),
      'customers_islam_cpp_jubir' => $this->input->post('customers_' . $agama . '_cpp_jubir'),
      'customers_islam_namapenghulu' => $this->input->post('customers_' . $agama . '_namapenghulu'),
      'customers_islam_namawali' => $this->input->post('customers_' . $agama . '_namawali'),
      'customers_islam_cpw_saksi' => $this->input->post('customers_' . $agama . '_cpw_saksi'),
      'customers_islam_cpp_saksi' => $this->input->post('customers_' . $agama . '_cpp_saksi'),
      'customers_islam_qori' => $this->input->post('customers_' . $agama . '_qori'),
      'customers_islam_nasehat' => $this->input->post('customers_' . $agama . '_nasehat'),
      'customers_islam_pengapit' => $this->input->post('customers_' . $agama . '_pengapit'),
      'customers_islam_nampan' => $this->input->post('customers_' . $agama . '_nampan'),
      'customers_islam_pemmas' => $this->input->post('customers_' . $agama . '_pemmas'),
      'customers_islam_pemcin' => $this->input->post('customers_' . $agama . '_pemcin')
      );
      $this->db->insert('pengantin_islam', $data);
    } else {
      $data = array(
        'customers_lain_cpw_namaleng' => $this->input->post('customers_' . $agama . '_cpw_namaleng'),
        'customers_lain_cpw_namapang' => $this->input->post('customers_' . $agama . '_cpw_namapang'),
        'customers_lain_cpw_anakke' => $this->input->post('customers_' . $agama . '_cpw_anakke'),
        'customers_lain_cpw_anakdari' => $this->input->post('customers_' . $agama . '_cpw_anakdari'),
        'customers_lain_cpw_namabpk' => $this->input->post('customers_' . $agama . '_cpw_namabpk'),
        'customers_lain_cpw_panggilkebpk' => $this->input->post('customers_' . $agama . '_cpw_panggilkebpk'),
        'customers_lain_cpw_namaibu' => $this->input->post('customers_' . $agama . '_cpw_namaibu'),
        'customers_lain_cpw_panggilkeibu' => $this->input->post('customers_' . $agama . '_cpw_panggilkeibu'),
        'customers_lain_cpw_saudara' => $this->input->post('customers_' . $agama . '_cpw_saudara'),
        'customers_lain_cpp_namaleng' => $this->input->post('customers_' . $agama . '_cpp_namaleng'),
        'customers_lain_cpp_namapang' => $this->input->post('customers_' . $agama . '_cpp_namapang'),
        'customers_lain_cpp_anakke' => $this->input->post('customers_' . $agama . '_cpp_anakke'),
        'customers_lain_cpp_anakdari' => $this->input->post('customers_' . $agama . '_cpp_anakdari'),
        'customers_lain_cpp_namabpk' => $this->input->post('customers_' . $agama . '_cpp_namabpk'),
        'customers_lain_cpp_panggilkebpk' => $this->input->post('customers_' . $agama . '_cpp_panggilkebpk'),
        'customers_lain_cpp_namaibu' => $this->input->post('customers_' . $agama . '_cpp_namaibu'),
        'customers_lain_cpp_panggilkeibu' => $this->input->post('customers_' . $agama . '_cpp_panggilkeibu'),
        'customers_lain_cpp_saudara' => $this->input->post('customers_' . $agama . '_cpp_saudara'),
        'customers_lain_namapendeta' => $this->input->post('customers_' . $agama . '_namapendeta'),
        'customers_lain_gereja' => $this->input->post('customers_' . $agama . '_gereja'),
        'customers_lain_doa' => $this->input->post('customers_' . $agama . '_doa')
      );
      $this->db->insert('pengantin_lainnya', $data);
    }

    redirect('user/success');
  }

  public function success() {
    $data['title'] = 'Data Pengantin Berhasil Disimpan';
    $this->load->view('fronts/user/v_success', $data);
  }
}
