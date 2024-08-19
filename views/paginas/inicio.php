<?php

//require_once 'controllers/PermisoController.php';
//$objeto = new PermisoController();
//$usuario_id = $_SESSION['id_usuario'];
//$permisos = $objeto->obtenerPermisos($usuario_id);

?>

<main role="main" class="container">
	<div class="row container">
		<div class="wrapper">
  			<canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
		</div>
		<div class="wrapper2">
  			<canvas id="signature-pad2" class="signature-pad2" width=400 height=200></canvas>
		</div>
		<button id="save-svg">Save as SVG</button>
		<button id="undo">Undo</button>
		<button id="clear">Clear</button>
	</div>
	<style>
	.wrapper {
		position: relative;
		width: 400px;
		height: 200px;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
		user-select: none;
		}

		.signature-pad {
		position: absolute;
		left: 0;
		top: 0;
		width:400px;
		height:200px;
		background-color: white;
		}
	</style>
	<script>
		var canvas = document.getElementById('signature-pad');
		var canvas2 = document.getElementById('signature-pad2');
		function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

document.getElementById('save-svg').addEventListener('click', function () {
  if (signaturePad.isEmpty()) {
    return alert("Please provide a signature first.");
  }

  var data = signaturePad.toDataURL('image/svg+xml');
  console.log(data);
  console.log(atob(data.split(',')[1]));
 window.open(data);
});

document.getElementById('clear').addEventListener('click', function () {
  signaturePad.clear();
});

document.getElementById('undo').addEventListener('click', function () {
	var data = signaturePad.toData();
  if (data) {
    data.pop(); // remove the last dot or line
    signaturePad.fromData(data);
  }
});

</script>
	<!-- /.row -->
</main><!-- /.container -->

