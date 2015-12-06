<?php
require_once __DIR__ . '/DbAction.php';

class ajaxValidate {
    function SearchPackage() {
        $dba = new DbAction();
        $dbh = $dba->Connect();
        //Put form elements into post variables (this is where you would sanitize your data)
        $search = @$_POST['field1'];
        $pack_sys_id = 1;



        $return = array();

        $return['msg'] = '';
        $return['error'] = false;
        if (!isset($field1) || empty($field1)){
            $package = $dba->installedPackageList($pack_sys_id,$dbh);
            foreach ($package as $i => $row) {
                $return['msg'] .= '<tr class="cell-which-triggers-popup">';
                $return['msg'] .= "<td></td>";
                $return['msg'] .= "<td class=\"item\">" . $row['installed_pack_name'] . "</td>";
                $return['msg'] .= '</tr>';
            }
        }
        //Begin form success functionality
        if ($return['error'] === false) {
            $package = $dba->installedPackageSearch($pack_sys_id,$dbh,$search);
            foreach ($package as $i => $row) {
                $return['msg'] .= '<tr class="cell-which-triggers-popup">';
                $return['msg'] .= "<td></td>";
                $return['msg'] .= "<td class=\"item\">" . $row['installed_pack_name'] . "</td>";
                $return['msg'] .= '</tr>';
            }
        }
        return json_encode($return);
    }
}

$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->SearchPackage();
?>