<div class="content">

		<div class="content-wrapper">
			<div class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0 text-dark">Order List</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Order List</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Order List</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          #
                      </th>
                      <th>
                          ID Order
                      </th>
                      <th >
                          ID Customer
                      </th>
                      <th >
                        Date
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($order as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><?php echo $u['id'] ?></td>
                  <td><?php echo $u['pelanggan'];?></td>	
              	 	<td><?php echo $u['tanggal'];?></td>
              	 </tr>
              </tbody>
                  <?php } ?>
              </table>
		        </div>
          </div>

          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Order Detail</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>id</th>
                      <th>Order ID</th>
                      <th>ID Produk</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                  </tr>
              </thead>

              <tbody>
                <?php 
                  $no = 1;
                  foreach($order_detail as $k){
                 ?>
                 <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k['id'] ?></td>
                  <td><?php echo $k['order_id'];?></td>  
                  <td><?php echo $k['produk'];?></td>
                  <td><?php echo $k['qty'];?></td>
                  <td><?php echo $k['harga'];?></td>
                 </tr>
              </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>

          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pelanggan</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>id</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Telp</th>
                  </tr>
              </thead>

              <tbody>
                <?php 
                  $no = 1;
                  foreach($pelanggan as $p){
                 ?>
                 <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $p['id'] ?></td>
                  <td><?php echo $p['nama'];?></td>  
                  <td><?php echo $p['email'];?></td>
                  <td><?php echo $p['alamat'];?></td>
                  <td><?php echo $p['telp'];?></td>
                 </tr>
              </tbody>
                  <?php } ?>
              </table>
            </div>
          </div>
</div>