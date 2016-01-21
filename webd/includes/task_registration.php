<?php
    /**
     * Created by PhpStorm.
     * User: IT College
     * Date: 2015/11/18
     * Time: 23:03
     */
    require_once __DIR__ . '/DbAction.php';
    require_once __DIR__ . "/session.php";
    require_once __DIR__ . "/restclient.php";

    if (isset($_POST['submit'])) {
        $hosts = htmlspecialchars($_POST["manager_host"]);
        $hosts = htmlspecialchars($_POST["target_hosts"]);
        $command = htmlspecialchars($_POST["command"]);
        # module variable already used for machinelist
        $task_module = htmlspecialchars($_POST["module"]);
    }
    printf($command);
    $me = new Session();
    $me->start_session();
    $me->is_session_started();

    $dba = new DbAction();
    $dbh = $dba->Connect();
    $user_id = $me->get_user_id();

    $machine = $dba->hostManagerActiveList($user_id, $dbh);
    kint::dump($machine);
    $rest = new restclient();
    $rest->task_register(
        $manager_host,
        $machine[0]['port'],
        $machine[0]['username'],
        $machine[0]['password'],
        $target_host,
        $command,
        $module
    );

    header('location:../task_list.php?target='.$hosts.'&os=');