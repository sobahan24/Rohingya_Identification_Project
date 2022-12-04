<?php
$devs = [
  "Md. Waya Rasul Khan" => ["des" => "Programmer &amp; App Designer", "img" => "waya", "edu" => "Diploma in Computer Technology", "mail" => "wayarasul2015@gmail.com", "social" => "waya.rasul" ],
  "Md. Abdus Sobahan" => ["des" => "Programmer &amp; App Designer", "img" => "sobahan", "edu" => "Diploma in Computer Technology", "mail" => "a.sobahan133@gmail.com", "social" => "100008831851913" ]


];


?>
<h1 class="section-title">Application এর মূল উদ্দেশ্যঃ</h1>
<p class="section-details">বর্তমানে রোহিঙ্গা একটি আলোচিত বিষয়। মূলত এই Application টি তৈরি করা হয়েছে, রোহিঙ্গাদের চিহ্নিত করণ এবং ভবিষ্যতে তাদের যাবতীয় তথ্য সম্পূর্ণরূপে প্রকাশ করার লক্ষ্যে। প্রতিনিয়ত বিভিন্ন তথ্য দ্বারা এটির উন্নয়ন সাধনের কাজ চলছে এবং চলবে।</p>



<?php foreach ($devs as $dev => $data) : ?>
    <div class="person-info">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img src="assets/img/<?php echo $data["img"]; ?>.jpg" alt="<?php echo $dev; ?>" class="person-thumb center">
            </div>
            <div class="col-md-7 person-details">
                <h2 class="dev-name"><?php echo $dev; ?></h2>
                <p class="dev-designation"><?php echo $data["des"]; ?></p>
                <p class="dev-edu"><?php echo $data["edu"]; ?></p>
                <p class="dev-mail"><a href="mailto:<?php echo $data["mail"]; ?>"><?php echo $data["mail"]; ?></a></p>
                <p class="dev-social"><a href="http://www.facebook.com/<?php echo $data["social"]; ?>"><?php echo "http://www.facebook.com/" . $data["social"]; ?></a></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>