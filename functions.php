<?php
session_start();
$config["server"] = 'localhost';
$config["username"] = 'root';
$config["password"] = '';
$config["database_name"] = 'cf_fc';

include 'includes/db.php';
$db = new DB($config['server'], $config['username'], $config['password'], $config['database_name']);

function _post($key, $val = null)
{
    global $_POST;
    if (isset($_POST[$key]))
        return $_POST[$key];
    else
        return $val;
}

function _get($key, $val = null)
{
    global $_GET;
    if (isset($_GET[$key]))
        return $_GET[$key];
    else
        return $val;
}

function _session($key, $val = null)
{
    global $_SESSION;
    if (isset($_SESSION[$key]))
        return $_SESSION[$key];
    else
        return $val;
}

$mod = _get('m');
$act = _get('act');
$rows = $db->get_results("SELECT kode_gejala, nama_gejala FROM tb_gejala ORDER BY kode_gejala");
$GEJALA = array();
foreach ($rows as $row) {
    $GEJALA[$row->kode_gejala] = $row->nama_gejala;
}

$rows = $db->get_results("SELECT * FROM tb_diagnosa ORDER BY kode_diagnosa");
$DIAGNOSA = array();
foreach ($rows as $row) {
    $DIAGNOSA[$row->kode_diagnosa] = $row;
}

function get_terjawab()
{
    global $db;
    $rows = $db->get_results("SELECT kode_gejala, jawaban FROM tb_konsultasi");
    $arr = array();
    foreach ($rows as $row) {
        $arr[$row->kode_gejala] = $row->jawaban;
    }
    return $arr;
}

function  get_next_gejala($relasi)
{
    eliminate_relasi($relasi);
    foreach ($relasi as $key => $val) {
        foreach ($val as $k => $v) {
            if ($v == '')
                return $k;
        }
    }
    return false;
}

function get_relasi($terjawab)
{
    global $db;
    $rows = $db->get_results("SELECT kode_diagnosa, r.kode_gejala 
        FROM tb_relasi r
        ORDER BY kode_diagnosa, r.kode_gejala");
    $arr = array();
    foreach ($rows as $row) {
        $arr[$row->kode_diagnosa][$row->kode_gejala] = isset($terjawab[$row->kode_gejala]) ? $terjawab[$row->kode_gejala] : null;
    }
    return $arr;
}

function CF_get_diagnosa_option($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT kode_diagnosa, nama_diagnosa FROM tb_diagnosa ORDER BY kode_diagnosa");
    $a = '';
    foreach ($rows as $row) {
        if ($row->kode_diagnosa == $selected)
            $a .= "<option value='$row->kode_diagnosa' selected>[$row->kode_diagnosa] $row->nama_diagnosa</option>";
        else
            $a .= "<option value='$row->kode_diagnosa'>[$row->kode_diagnosa] $row->nama_diagnosa</option>";
    }
    return $a;
}

function get_level_option($selected = '')
{
    $arr = array(
        'admin' => 'Admin',
        'user' => 'User',
    );
    $a = '';
    foreach ($arr as $key => $val) {
        if ($selected == $key)
            $a .= "<option value='$key' selected>$val</option>";
        else
            $a .= "<option value='$key'>$val</option>";
    }
    return $a;
}

function CF_get_gejala_option($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT kode_gejala, nama_gejala FROM tb_gejala ORDER BY kode_gejala");
    $a = '';
    foreach ($rows as $row) {
        if ($row->kode_gejala == $selected)
            $a .= "<option value='$row->kode_gejala' selected>[$row->kode_gejala] $row->nama_gejala</option>";
        else
            $a .= "<option value='$row->kode_gejala'>[$row->kode_gejala] $row->nama_gejala</option>";
    }
    return $a;
}

function set_value($key = null, $default = null)
{
    global $_POST;
    if (isset($_POST[$key]))
        return $_POST[$key];

    if (isset($_GET[$key]))
        return $_GET[$key];

    return $default;
}

function kode_oto($field, $table, $prefix, $length)
{
    global $db;
    $var = $db->get_var("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");
    if ($var) {
        return $prefix . substr(str_repeat('0', $length) . ((int)substr($var, -$length) + 1), -$length);
    } else {
        return $prefix . str_repeat('0', $length - 1) . 1;
    }
}
function esc_field($str)
{
    if ($str)
        return addslashes($str);
}

function redirect_js($url)
{
    echo '<script type="text/javascript">window.location.replace("' . $url . '");</script>';
}

function alert($url)
{
    echo '<script type="text/javascript">alert("' . $url . '");</script>';
}

function print_msg($msg, $type = 'danger')
{
    echo ('<div class="alert alert-' . $type . ' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $msg . '</div>');
}

function eliminate_relasi(&$relasi)
{
    foreach ($relasi as $key => $val) {
        $tidak = 0;
        foreach ($val as $k => $v) {
            if ($v == 'Tidak')
                $tidak++;
        }
        if ($tidak >= 2 || $tidak >= count($val) / 2)
            unset($relasi[$key]);
    }
}
