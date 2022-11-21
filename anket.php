<?php
$choices=1;
$baslik="Ankete katıl";

print_r($_POST);
?>
<?php include("kutuphane/baglanti.php"); ?>

<?php
$sql = "SELECT * FROM ders";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
		$dersler[]=$row;
}

if(@$_POST['gonder']==1) { //echo "Tebrikler butona bastın";

  $eposta=$_POST['eposta'];
  $ders_id=$_POST['ders_id'];

  if(empty($eposta)==false && empty($ders_id)==false) {
    //echo "Tebrikler bilgiler geldi $eposta $ders_id";
    $sql="INSERT INTO ders_anket (eposta,ders_id) VALUES ('{$eposta}','{$ders_id}')";
    $result = mysqli_query($conn, $sql);
    if($result==true) {
      header('Location: index.php');
    }else {
      echo "Opppss! Bir hata oluştu";
    }
  }else {
    //echo "Bilgiler boş!!!!";
  }


}

//print_r($dersler);


?>
<?php include("kutuphane/ust.php"); ?>

<section>
	<div class="container">
		<div class="row g-5 justify-content-between">
			<!-- Admission form START -->
			<div class="col-md-8 mx-auto">
				<!-- Title -->
				<h2 class="mb-3">Ankete Katılın</h2>

				<!-- Form START -->
				<form class="row g-3" method="post">
					<h5 class="mb-0">Seçmeli Ders Anketi</h5>
					<!-- Email -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Eposta <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="email" name="eposta" class="form-control" id="email">
							</div>
						</div>
					</div>

					<!-- City -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Favori Dersiniz <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<select name="ders_id" class="form-select js-choice z-index-9 rounded-3 border-0 bg-light" aria-label=".form-select-sm">
									<option value="0" sel>aDers Seçiniz</option>
                  <?php foreach($dersler as $ders) : ?>
                	<option value="<?php echo $ders['id']; ?>"><?php echo $ders['adi']; ?></option>
                <?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>



					<!-- Button -->
					<div class="col-12 text-sm-end">
						<button class="btn btn-primary mb-0" name="gonder" value="1">Gönder</button>
					</div>
				</form>
				<!-- Form END -->
			</div>
			<!-- Admission form END -->
		</div>
	</div>
</section>
<?php include("kutuphane/alt.php"); ?>
