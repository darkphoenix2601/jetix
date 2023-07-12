<!DOCTYPE html>
<html class="loading">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title> ♕︎𝙅𝙚𝙩𝙞𝙭♕︎ </title>
  <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 </head>
 <body class="vertical-layout" data-color="bg-gradient-x-purple-blue">
  <div class="app-content content">
   <div class="content-wrapper">
    <div class="content-wrapper-before mb-3"></div>
    <div class="content-body">
     <div class="mt-2"></div>
     <div class="row">
      <div class="col-md-8">
       <div class="card">
        <div class="card-body text-center">
         <h4 class="mb-2">
          <strong>♕︎𝙅𝙚𝙩𝙞𝙭 𝙎𝙆 𝘽𝘼𝙎𝙀𝘿 & 𝙉𝙊𝙉-𝙎𝙆 𝘾𝙃𝙀𝘾𝙆𝙀𝙍♕︎</strong>
         </h4>
         <textarea rows="12" class="form-control text-center form-checker mb-2" placeholder="░T░H░R░O░W░ ░G░E░N░ ░C░A░R░D░ ░H░E░R░E░"></textarea>
         <textarea rows="1" class="form-control text-center" style="width: 50%; float: left ;" id="sec" placeholder="sk_live_xxxxxxxxxx (Leave It Blank if You don't have one)"></textarea>
         <textarea rows="1" class="form-control text-center" style="width: 20%; float: left ;" id="bot" placeholder="Your Telegram ID"></textarea>
         <textarea rows="1" class="form-control text-center" style="width: 30%; float: right margin-bottom: 5px;" id="cst" placeholder="Custom Amount OR Leave it Blank"></textarea>
         </br>
         <select name="gate" id="gate" class="form-control" style="margin-bottom: 5px;" id="gate" placeholder="Select Gate">
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1CCN.php">CCN CHARGE: $1</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd5CCN.php">CCN CHARGE: $5</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur1CCN.php">CCN CHARGE: €1</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur5CCN.php">CCN CHARGE: €5</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd1CVV.php">CVV CHARGE: $1</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/usd5CVV.php">CVV CHARGE: $5</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur1CVV.php">CVV CHARGE: €1</option>
          <option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/eur5CVV.php">CVV CHARGE: €5</option>
         </select>
         <br>
         <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;">
          <i class="fa fa-play"></i> 𝙎𝙏𝘼𝙍𝙏 </button>
         <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled>
          <i class="fa fa-stop"></i> 𝙎𝙏𝙊𝙋 </button>
        </div>
       </div>
      </div>
      <div class="col-md-4">
       <div class="card mb-2">
        <div class="card-body">
         <h5>𝙏𝙊𝙏𝘼𝙇 : <span class="badge badge-secondary float-right carregadas">0</span>
         </h5>
         <hr>
         <h5>𝘾𝙃𝘼𝙍𝙂𝙀𝘿 : <span class="badge badge-success float-right charge">0</span>
         </h5>
         <hr>
         <h5>𝘾𝙑𝙑 : <span class="badge badge-success float-right cvvs">0</span>
         </h5>
         <hr>
         <h5>𝘾𝘾𝙉 : <span class="badge badge-success float-right aprovadas">0</span>
         </h5>
         <hr>
         <h5>𝘿𝙄𝙀 : <span class="badge badge-danger float-right reprovadas">0</span>
         </h5>
         <hr>
         <h5>𝙏𝙀𝙎𝙏𝙀𝘿 : <span class="badge badge-primary float-right testadas">0</span>
         </h5>
         <hr>
         <h5>𝘿𝘼𝙏𝙀 : <span class="badge badge-info float-right" id="datetime">04/04/2023</span>
         </h5>
         <hr>
         <h5>𝙏𝙄𝙈𝙀: <span class="badge badge-info float-right" id="timenow">12:00:00 AM</span>
         </h5>
        </div>
       </div>
      </div>
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
         <div class="float-right">
          <button type="show" class="btn btn-primary btn-sm show-charge">
           <i class="fa fa-eye-slash"></i>
          </button>
          <button class="btn btn-success btn-sm btn-copy1">
           <i class="fa fa-copy"></i>
          </button>
         </div>
         <h4 class="card-title mb-1">
          <i class="fa fa-check-circle text-success"></i> ♕︎𝘾𝙃𝘼𝙍𝙂𝙀𝘿
         </h4>
         <div id='lista_charge'></div>
        </div>
       </div>
      </div>
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
         <div class="float-right">
          <button type="show" class="btn btn-primary btn-sm show-live">
           <i class="fa fa-eye-slash"></i>
          </button>
          <button class="btn btn-success btn-sm btn-copy2">
           <i class="fa fa-copy"></i>
          </button>
         </div>
         <h4 class="card-title mb-1">
          <i class="fa fa-check text-success"></i> ♕︎𝘾𝙑𝙑
         </h4>
         <div id='lista_cvvs'></div>
        </div>
       </div>
      </div>
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
         <div class="float-right">
          <button type="show" class="btn btn-primary btn-sm show-lives">
           <i class="fa fa-eye-slash"></i>
          </button>
          <button class="btn btn-success btn-sm btn-copy">
           <i class="fa fa-copy"></i>
          </button>
         </div>
         <h4 class="card-title mb-1">
          <i class="fa fa-times text-success"></i> ♕︎𝘾𝘾𝙉
         </h4>
         <div id='lista_aprovadas'></div>
        </div>
       </div>
      </div>
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
         <div class="float-right">
          <button type='hidden' class="btn btn-primary btn-sm show-dies">
           <i class="fa fa-eye"></i>
          </button>
          <button class="btn btn-danger btn-sm btn-trash">
           <i class="fa fa-trash"></i>
          </button>
         </div>
         <h4 class="card-title mb-1">
          <i class="fa fa-times text-danger"></i> ♕︎𝘿𝙀𝘾𝙇𝙄𝙉𝙀𝘿
         </h4>
         <div style='display: none;' id='lista_reprovadas'></div>
        </div>
       </div>
      </div>
      </section>
     </div>
    </div>
   </div>
   <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
   <script>
$(document).ready(function() {


	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	})



	$('.show-charge').click(function() {
		var type = $('.show-charge').attr('type');
		$('#lista_charge').slideToggle();
		if (type == 'show') {
			$('.show-charge').html('<i class="fa fa-eye"></i>');
			$('.show-charge').attr('type', 'hidden');
		} else {
			$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
			$('.show-charge').attr('type', 'show');
		}
	});

	$('.show-live').click(function() {
		var type = $('.show-live').attr('type');
		$('#lista_cvvs').slideToggle();
		if (type == 'show') {
			$('.show-live').html('<i class="fa fa-eye"></i>');
			$('.show-live').attr('type', 'hidden');
		} else {
			$('.show-live').html('<i class="fa fa-eye-slash"></i>');
			$('.show-live').attr('type', 'show');
		}
	});

	$('.show-lives').click(function() {
		var type = $('.show-lives').attr('type');
		$('#lista_aprovadas').slideToggle();
		if (type == 'show') {
			$('.show-lives').html('<i class="fa fa-eye"></i>');
			$('.show-lives').attr('type', 'hidden');
		} else {
			$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
			$('.show-lives').attr('type', 'show');
		}
	});

	$('.show-dies').click(function() {
		var type = $('.show-dies').attr('type');
		$('#lista_reprovadas').slideToggle();
		if (type == 'show') {
			$('.show-dies').html('<i class="fa fa-eye"></i>');
			$('.show-dies').attr('type', 'hidden');
		} else {
			$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
			$('.show-dies').attr('type', 'show');
		}
	});

	$('.btn-trash').click(function() {
		Swal.fire({
			title: 'REMOVED DEAD',
			icon: 'success',
			showConfirmButton: false,
			toast: true,
			position: 'top-end',
			timer: 3000
		});
		$('#lista_reprovadas').text('');
	});

	$('.btn-copy1').click(function() {
		Swal.fire({
			title: 'COPIED CHARGED',
			icon: 'success',
			showConfirmButton: false,
			toast: true,
			position: 'top-end',
			timer: 3000
		});
		var lista_charge = document.getElementById('lista_charge').innerText;
		var textarea = document.createElement("textarea");
		textarea.value = lista_charge;
		document.body.appendChild(textarea);
		textarea.select();
		document.execCommand('copy');
		document.body.removeChild(textarea);
	});

	$('.btn-copy2').click(function() {
		Swal.fire({
			title: 'COPIED CVV',
			icon: 'success',
			showConfirmButton: false,
			toast: true,
			position: 'top-end',
			timer: 3000
		});
		var lista_live = document.getElementById('lista_cvvs').innerText;
		var textarea = document.createElement("textarea");
		textarea.value = lista_live;
		document.body.appendChild(textarea);
		textarea.select();
		document.execCommand('copy');
		document.body.removeChild(textarea);
	});

	$('.btn-copy').click(function() {
		Swal.fire({
			title: 'COPIED CCN',
			icon: 'success',
			showConfirmButton: false,
			toast: true,
			position: 'top-end',
			timer: 3000
		});
		var lista_lives = document.getElementById('lista_aprovadas').innerText;
		var textarea = document.createElement("textarea");
		textarea.value = lista_lives;
		document.body.appendChild(textarea);
		textarea.select();
		document.execCommand('copy');
		document.body.removeChild(textarea);
	});


	$('.btn-play').click(function() {
		var audio = new Audio('jail.mp3');
		audio['play']();
		var sec = $("#sec").val();
		var bot = $("#bot").val();
		var cst = $("#cst").val();
		var e = document.getElementById("gate");
		var gate = e.options[e.selectedIndex].value;
		var lista = $('.form-checker').val().trim();
		var array = lista.split('\n');
		var charge = 0,
			live = 0,
			lives = 0,
			dies = 0,
			testadas = 0,
			txt = '';

		if (!lista) {
			Swal.fire({
				title: 'You did not provide a card :(',
				icon: 'error',
				showConfirmButton: false,
				toast: true,
				position: 'top-end',
				timer: 3000
			});
			return false;
		}

		Swal.fire({
			title: 'Your cards are being checked...',
			icon: 'success',
			showConfirmButton: false,
			toast: true,
			position: 'top-end',
			timer: 3000
		});

		var line = array.filter(function(value) {
			if (value.trim() !== "") {
				txt += value.trim() + '\n';
				return value.trim();
			}
		});

		/*
		var line = array.filter(function(value){
		return(value.trim() !== "");
		});
		*/

		var total = line.length;


		/*
		line.forEach(function(value){
		txt += value + '\n';
		});
		*/

		$('.form-checker').val(txt.trim());
		// virtual ghost, don't get the code!!
		if (total > 5000) {
			Swal.fire({
				title: 'YOU CAN NOT PERFORM THAT ACTION: REDUCE NUMBER OF CARDS TO <4999',
				icon: 'warning',
				showConfirmButton: false,
				toast: true,
				position: 'top-end',
				timer: 3000
			});
			return false;
		}

		$('.carregadas').text(total);
		$('.btn-play').attr('disabled', true);
		$('.btn-stop').attr('disabled', false);

		line.forEach(function(data) {
			var callBack = $.ajax({
				url: gate + '?lista=' + data + '&sec=' + sec + '&bot=' + bot + '&cst=' + cst,
				success: function(retorno) {
					if (retorno.indexOf("CHARGED") >= 0) {
						audio['play']();
						Swal.fire({
							title: '+1 CHARGED CC',
							icon: 'success',
							showConfirmButton: false,
							toast: true,
							position: 'top-end',
							timer: 3000
						});
						$('#lista_charge').append(retorno);
						removelinha();
						charge = charge + 1;
					} else if (retorno.indexOf("CVV") >= 0) {
						audio['play']();
						Swal.fire({
							title: '+1 CVV CC',
							icon: 'success',
							showConfirmButton: false,
							toast: true,
							position: 'top-end',
							timer: 3000
						});
						$('#lista_cvvs').append(retorno);
						removelinha();
						live = live + 1;
					} else if (retorno.indexOf("CCN") >= 0) {
						audio['play']();
						Swal.fire({
							title: '+1 LIVE CC',
							icon: 'success',
							showConfirmButton: false,
							toast: true,
							position: 'top-end',
							timer: 3000
						});
						$('#lista_aprovadas').append(retorno);
						removelinha();
						lives = lives + 1;
					} else {
						$('#lista_reprovadas').append(retorno);
						removelinha();
						dies = dies + 1;
					}
					testadas = charge + live + lives + dies;
					$('.charge').text(charge);
					$('.cvvs').text(live);
					$('.aprovadas').text(lives);
					$('.reprovadas').text(dies);
					$('.testadas').text(testadas);

					if (testadas == total) {
						audio['play']();
						Swal.fire({
							title: 'ALL CARDS HAS BEEN CHECKED',
							icon: 'success',
							showConfirmButton: false,
							toast: true,
							position: 'top-end',
							timer: 3000
						});
						$('.btn-play').attr('disabled', false);
						$('.btn-stop').attr('disabled', true);
					}
				}
			});
			$('.btn-stop').click(function() {
				audio['play']();
				Swal.fire({
					title: 'PAUSED',
					icon: 'warning',
					showConfirmButton: false,
					toast: true,
					position: 'top-end',
					timer: 3000
				});
				$('.btn-play').attr('disabled', false);
				$('.btn-stop').attr('disabled', true);
				callBack.abort();
				return false;
			});
		});
	});
});

function removelinha() {
	var lines = $('.form-checker').val().split('\n');
	lines.splice(0, 1);
	$('.form-checker').val(lines.join("\n"));
}



var myVar = setInterval(function() {
	myTimer()
}, 1000);

function myTimer() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
	var d = new Date();
	document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}
   </script>
 </body>
</html>