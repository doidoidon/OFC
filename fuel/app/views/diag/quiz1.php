<body class="fb-login">
<div class="login-screen fb-login-screen">
<!--<div class="fb-container">-->
	<div class="jumbotron fb-quiz">
		<h2>食事は好きな方から食べる</h2>
		<br />
		<p>
			<a class="btn btn-danger btn-hg" role="button" href="/diag/quiz2">はい</a>
			<a class="btn btn-danger btn-hg" role="button" href="/diag/quiz3">いいえ</a>
		</p>
	</div>
<!--</div>-->
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
