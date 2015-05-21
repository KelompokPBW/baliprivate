	<section class="bottom2">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-5">
	        <article>
	          <div class="row">
	            <div class="col-md-4">
	              <img src="<?php echo HTTP_IMAGES_PATH; ?>maps.gif"><br/>
	            </div>
	            <div class="col-md-8">
	              <h5>Contact Us!</h5>
	              <i class="fa fa-map-marker"></i>&nbsp;Jalan Nusa Indah No.37 Denpasar<br/>
	              <i class="fa fa-phone-square"></i>&nbsp;0361 - 295275 (24-Hours)<br/>
	              <i class="fa fa-envelope"></i>&nbsp;cc@baliprivate.com<br/>
	              Bali Private &copy;&nbsp;2015<br/>
	            </div>
	          </div>
	        </article>
	      </div>
	      <div class="col-md-4">
	        <article>
	          <a href="<?php echo site_url('pengajar');?>">Pengajar</a><br/>
	          <a href="<?php echo site_url('faq');?>">FAQ</a><br/>
	          <a href="<?php echo site_url('career');?>">Career</a><br/>
	          <a href="<?php echo site_url('benefit');?>">Benefits</a><br/>
	          <a href="<?php echo site_url('terms');?>">Terms & Conditions</a><br/>
	          <a href="<?php echo site_url('about');?>">About Us</a><br/>
	        </article>
	      </div>
	      <div class="col-md-3">
	        <h5>Our Partners:</h5>
	        <img src="<?php echo HTTP_IMAGES_PATH; ?>mandiri.jpg">
	        <img src="<?php echo HTTP_IMAGES_PATH; ?>bca.jpg">
	        <img src="<?php echo HTTP_IMAGES_PATH; ?>bni.png">
	        <img src="<?php echo HTTP_IMAGES_PATH; ?>bri.png" style="background-color: #fff;">
	      </div>
	    </div>
	  </div>
	</section>

	<section class="bottom3">
	  <div class="container">
	    <article style="margin-top:20px;"><center>Created by: Safira - Putri - Andre - Agus - Wahyu</br>
	      E-Commerce 2015</center></article>
	  </div>
	</section>
  

	<div class="modal fade" id="modal_detailPengajar" tabindex="-1" role="dialog" aria-labelledby="modal_tambahAdminLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="modal_tambahAdminLabel">Detail Pengajar</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-6">
	      			<center>
			      	  <div class="photo" style="width: 150px;">
		                <i class="fa fa-user"></i>
		              </div>
		              <table style="margin-top: 30px;" class="table" id="tbl">
		              	<tbody>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Nama</b></td>
		              			<td>I Wayan Safira Sri Artha</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Status</b></td>
		              			<td>Freelancer</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Pekerjaan</b></td>
		              			<td>Mahasiswa</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Jenis Kelamin</b></td>
		              			<td>Laki-laki</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Tempat, tanggal lahir</b></td>
		              			<td>Denpasar, 21 Agustus 1994 (21 tahun)</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Alamat</b></td>
		              			<td>Jalan Batu Intan IIA/10 Batubulan, Gianyar</td>
		              		</tr>
		              		<tr>
		              			<td style="text-align: right; width: 30%;"><b>Telepon</b></td>
		              			<td>0856 3839 206</td>
		              		</tr>
		              	</tbody>
		              </table>
			      	</center>
	      		</div>
	      		<div class="col-md-6">
	      			<h3>
	      				<div class="row">
	      					<div class="col-md-4"><i class="fa fa-star"></i> 89</div>
	      					<div class="col-md-4"><i class="fa fa-thumbs-up"></i> 30</div>
	      					<div class="col-md-4"><i class="fa fa-thumbs-down"></i> 5</div>
	      				</div>
	      			</h3>
	      			<h4><b>Now:</b> Open request</h4>
	      			<h4><b>Salary:</b> Rp 50.000/jam</h4>
	      			<article>
	      				<b>Joined since:</b> 2012<br/>
	      				<b>Requested:</b> 56 times<br/>
	      				<b>Job made:</b> 35 times<br/>
	      				<b>Job missed:</b> 9 times</br>
	      				<b>Request rejected:</b> 12 times<br/>
	      				<b>Promoted:</b> 27 times<br/>
	      				<b>Exp:</b> 38761<br/>
	      				<br/>
	      				<b>Bidang yang dikuasai:</b>
	      				<ul>
	      					<li>Desain grafis (90 %)</li>
		                    <li>Pemrograman OOP (87 %)</li>
		                    <li>Pemrograman web, MVC framework (79 %)</li>
	      				</ul>
	      				<br/>
	      				<b>Preferensi mengajar:</b>
	      				<ul>
	      					<li>SMA</li>
		                    <li>Umum</li>
	      				</ul>
	      				<br/>
	      				<b>Portfolio:</b> 12
	      			</article>
	      		</div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	      	<a href="<?php echo site_url('detail_pengajar'); ?>" type="button" class="btn btn-default">Request Private</a>
	        <input type="button" id="promote" onclick="promote()" class="btn btn-success" value="Promote!"></input>
	        <a href="<?php echo site_url('detail_pengajar'); ?>" type="button" class="btn btn-primary">Lihat Profil</a>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
	  <div class="modal-dialog" style="width: 60%;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="login">Log In</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-6">
	      			<h4>Pengajar</h4>
	      			<input class="form-control" type="text" placeholder="Username" required><br>
			      	<input class="form-control" type="password" placeholder="Password" required><br>
			      	<input type="checkbox"> Remember me<br><br>
			      	<button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button><a href=""> &nbsp; Lupa password</a>
			      	<br>
			      	<h5>Belum terdaftar? Registrasi <a href="<?php echo site_url('registrasi_pengajar');?>">di sini</a></h5>
	      		</div>
	      		<div class="col-md-6">
	      			<h4>Orang tua / Siswa / Umum</h4>
	      			<input class="form-control" type="text" placeholder="Username" required><br>
			      	<input class="form-control" type="password" placeholder="Password" required><br>
			      	<input type="checkbox"> Remember me<br><br>
			      	<button class="btn btn-info"><i class="fa fa-sign-in"></i> Log in</button><a href=""> &nbsp; Lupa password</a>
			      	<br>
			      	<h5>Belum terdaftar? Registrasi <a href="<?php echo site_url('registrasi_user');?>">di sini</a> gratis sampai kapanpun!</h5>
	      		</div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	      	<div class="row">
	      		<div class="col-md-4">
	      			<center><a href=""><i class="fa fa-book"></i> Terms & Condition</a></center>
	      		</div>
	      		<div class="col-md-4">
	      			<center><a href=""><i class="fa fa-question"></i> Help</a></center>
	      		</div>
	      		<div class="col-md-4">
	      			<center><a href=""><i class="fa fa-file-text"></i> About</a></center>
	      		</div>
	      	</div>
	      </div>
	  	</div>
	  </div>
	</div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.min.js"></script>
    <script type="text/javascript">
    	function promote()
    	{
    		document.getElementById("promote").value = "Thanks!";
    	}
    </script>
</body>
</html>
