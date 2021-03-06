<!--
Eisen Frontend
http://eisen-dev.github.io

Copyright (c) $today.year Alice Ferrazzi <alice.ferrazzi@gmail.com> - Takuma Muramatsu <t.muramatu59@gmail.com>
Dual licensed under the MIT or GPL Version 3 licenses or later.
http://eisen-dev.github.io/License.md
-->
<!DOCTYPE html>
<html lang="ja">
<?php
    $title = "初期設定";
    require_once __DIR__ . '/parts/head.php';
    require_once __DIR__ . '/locale.php';
?>

<body>
<div class="wrapper">
    <div class="contentwrapper-nonav">
        <main class="contents">
            <h1 class="title-c">初期設定</h1>
            <div class="setup-step">
                <div class="setup-step-container">
                    <div class="setup-step-item">
                        <div class="step-disp setup-disp-current"><span class="step-disp-text">1</span>
                        </div>
                        <span class="setup-desc">接続設定</span>
                    </div>
                    <div class="setup-step-item">
                        <div class="step-disp"><span class="step-disp-text">2</span></div>
                        <span class="setup-desc">ユーザー設定</span>
                    </div>
                    <div class="setup-step-item">
                        <div class="step-disp"><span class="step-disp-text">3</span></div>
                        <span class="setup-desc">完了</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <form action="init-setup2.php" method="post">
                    <h2 class="title">データベース設定</h2>
                    <div class="compact-form">
                        <div class="compact-form-row">
                            <div class="compact-form-item-left">
                                <span>IPアドレス</span>
                            </div>
                            <div class="compact-form-item-right">
                                <input type="text" name="db_host">
                            </div>
                        </div>
                        <div class="compact-form-row">
                            <div class="compact-form-item-left">
                                <span>ユーザー名</span>
                            </div>
                            <div class="compact-form-item-right">
                                <input type="text" name="db_user">
                            </div>
                        </div>
                        <div class="compact-form-row">
                            <div class="compact-form-item-left">
                                <span>パスワード</span>
                            </div>
                            <div class="compact-form-item-right">
                                <input type="password" name="db_pass">
                            </div>
                        </div>
                        <div class="compact-form-row">
                            <div class="compact-form-item-left">
                                <span>データベース名</span>
                            </div>
                            <div class="compact-form-item-right">
                                <input type="text" name="db_name">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="設定して次に進む" class="button">
                </form>
            </div>
        </main>
    </div>
</div>
<?php require_once __DIR__ . '/parts/scripts.php'; ?>
</body>

</html>
