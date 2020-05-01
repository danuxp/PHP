
<h1> Daftar Mahasiswa </h1>

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
	<?php foreach($data['mhs'] as $mhs) : ?>

    <li class="list-group-item d-flex justify-content-between align-items-center"> 
		<?= $mhs['nama']; ?>
		
		<a href="<?= baseurl; ?>/mahasiswa/detail/<?= $mhs['id_mhs']; ?>" class=" badge badge-pill badge-primary"> detail </a>
    </li>
  
	<?php endforeach; ?>

  </ul>
</div>
