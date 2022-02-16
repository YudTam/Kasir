<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="css/demo.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style type="text/css">
	/* style untuk link popup */
	a.popup-link {
		padding:17px 0;
		text-align: center;
		margin:10% auto;
		position: relative;
		width: 300px;
		color: #fff;
		text-decoration: none;
		background-color: #FFBA00;
		border-radius: 3px;
		box-shadow: 0 5px 0px 0px #eea900;
		display: block;
	}
	a.popup-link:hover {
		background-color: #ff9900;
		box-shadow: 0 3px 0px 0px #eea900;
		-webkit-transition:all 1s;
		transition:all 1s;
	}
	/* end link popup*/
	/* animasi popup */

	@-webkit-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@-moz-keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	@keyframes autopopup {
		from {opacity: 0;margin-top:-200px;}
		to {opacity: 1;}
	}
	/* end animasi popup */
	/*style untuk popup */	
	#popup {
		background-color: rgba(0,0,0,0.8);
		position: absolute;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		-webkit-animation:autopopup 2s;
		-moz-animation:autopopup 2s;
		animation:autopopup 2s;
	}
	#popup:target {
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
		opacity: 0;
		visibility: hidden;
	}

	@media (min-width: 768px){
		.popup-container {
			width:600px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:100%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:30px 50px;
		background-color: #fafafa;
		color:#333;
		border-radius: 3px;
	}

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			font-size: 37px;
			text-transform: uppercase;
		}
		.popup-form .input-group {
			margin:10px auto;
		}
			.popup-form .input-group input {
				padding:17px;
				text-align: center;
				margin-bottom: 10px;
				border-radius:3px;
				font-size: 16px; 
				display: block;
				width: 100%;
			}
			.popup-form .input-group input:focus {
				outline-color:#FB8833; 
			}
			.popup-form .input-group input[type="email"] {
				border:0px;
				position: relative;
			}
			.popup-form .input-group input[type="submit"] {
				background-color: #FB8833;
				color: #fff;
				border: 0;
				cursor: pointer;
			}
			.popup-form .input-group input[type="submit"]:focus {
				box-shadow: inset 0 3px 7px 3px #ea7722;
			}
	/* end style isi popup */

	</style>
</head>
<body>
    <div class="popup-wrapper" id="popup">
        <div class="popup-container"> 
    
            <!-- Konten popup, silahkan ganti sesuai kebutughan -->
            <div class="popup-form justify-content-center">
                <h2 style="margin-left: 40px;">Silakan Bayar Ke Kasir</h2>
                <h2 class="mt-3" style="text-align: center;">Atau Scan Disini</h2>
                <div class="input-group">
                    <img src="img/testqr.png" alt="" style="align-items: center; margin-left: 100px;" width="300px;" height="300px;">
					<div class="container">
					<div class="row mt-4">
						<div class="col" style="margin-left: 40px; margin-right: 10px;">
							<img src="img/dana.png" width="100px" height="100px">
						</div>
						<div class="col">
							<img src="img/ovo.png" width="100px" height="100px">
						</div>
						<div class="col" style="margin-left: 40px; margin-right: 10px;">
							<img src="img/doku.png" width="100px" height="100px">
						</div>
					</div>
					<div class="row mt-5">
						<div class="col" style="margin-left: 40px; margin-right: 10px;">
							<img src="img/gopay.png" width="100px" height="100px">
						</div>
						<div class="col">
							<img src="img/shopeepay.png" width="100px" height="100px">
						</div>
						<div class="col" style="margin-left: 40px; margin-right: 10px;">
							<img src="img/linkaja.png" width="110px" height="100px">
						</div>
					</div>
					</div>
					</div>
                </div>
            </div>
            {{-- <a class="popup-close" href="#popup">X</a> --}}
        </div>
	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>