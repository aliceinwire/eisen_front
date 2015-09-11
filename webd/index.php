<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Untitled Document</title>
	<link rel="stylesheet" href="includes/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="sass/style.css">
</head>

<body>
	<div class="wrapper">
<nav class="navigation">
			<div class="inner">
				<i class="fa fa-bars navigation__toggle"></i>
				<div class="navigation__title">
				</div>
				<div class="menu clearfix">
					<div class="menu__button machines menu__border--red">
						<div class="menu__icon">
							<i class="fa fa-server menu__icon"></i>
						</div>

					</div>

					<div class="menu__button menu__border--green">
						<div class="menu__icon toggle--notifications">
							<i class="fa fa-bell-o"></i>
						</div>
						<div class="notifications__list">
							<div class="menu__list__title"><i class="fa fa-bell-o fa-inline"></i>Notifications</div>
							<div class="menu__list__items">
							<ul>
								<li>
									<span class="notifications__machine-name">WebServer</span>
									<span class="notifications__time">2015/07/07 14:44</span>
									<br>
									<span class="notifications__message">
                                    <i class="fa fa-check-circle fa-inline"></i>
										パッケージのインストールが完了しました
									</span>
								</li>
								<li>
									<span class="notifications__machine-name">WebServer</span>
									<span class="notifications__time">2015/07/07 12:31</span>
									<br>
									<span class="notifications__message">
                                    <i class="fa fa-times-circle fa-inline"></i>
										パッケージのインストールが失敗しました
									</span>
								</li>
								<li>
									<span class="notifications__machine-name">WebServer</span>
									<span class="notifications__time">2015/07/03 09:55</span>
									<br>
									<span class="notifications__message">
                                    <i class="fa fa-exclamation-circle fa-inline"></i>
										新しいパッケージの更新があります
									</span>
								</li>
								<li>
									<span class="notifications__machine-name">WebServer</span>
									<span class="notifications__time">2015/07/02 11:25</span>
									<br>
									<span class="notifications__message">
                                    <i class="fa fa-check-circle fa-inline"></i>
										パッケージの更新が完了しました
									</span>
								</li>
								<li>
									<span class="notifications__machine-name">WebServer</span>
									<span class="notifications__time">2015/07/01 21:19</span>
									<br>
									<span class="notifications__message">
                                    <i class="fa fa-check-circle fa-inline"></i>
										パッケージのインストールが完了しました
									</span>
								</li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="contentswrapper">
			<main class="contents">
				<div class="section">
					<div class="inner inner--section">
						<h1 class="title--section">Hello</h1> Untitled Document!
						<?php echo '<p>Hello World</p>';
						require_once "/includes/connectvars.php";
						//データベース接続
						$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
						try {
							$query = "SELECT * FROM パッケージ情報";
							//json-rpcでインストールしたのパッケージゲットメソッドを呼び出して表示する。
							echo "printing installed package:<br>";
							$data = mysqli_query($dbc, $query);
							foreach ($data as $value){
								print_r($value['パッケージ名'].'-'.$value['パッケージバージョン'].'<br>');
							}
						} catch (Exception $e) {
							echo nl2br($e->getMessage()).'<br />'."\n";
						}
						?>
					</div>
				</div>
			</main>
		</div>
	</div>
</body>

</html>
