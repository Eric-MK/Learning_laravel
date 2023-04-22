
<h1>{{ $heading }}</h1>

<?php foreach($listings as $listing): ?>{{-- //for each for array listings --}}
 <h2><?php echo $listing['title']; ?></h2>
 <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?>
<p>yesss</p>
