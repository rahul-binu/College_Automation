<?= $this->extend("/layout/structure1") ?>
<?= $this->section("content"); ?>
<style>

.myDiv {
    background-color: rgba(255, 255, 255, 0.1); /* White background with 50% opacity */
    background-image: url('<?= base_url() ?>public/assets/images/NSSCollegeLogo.jpg');
    height: 15em;
    background-position: center;
    background-repeat: no-repeat;
}

</style>
<img src="<?= base_url() ?>public\assets\images" alt="">
<h2>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque autem distinctio et ea rem, velit temporibus illo
    consequuntur amet necessitatibus debitis, neque totam exercitationem libero aut ducimus recusandae at reprehenderit
    assumenda odit natus voluptates. Molestiae possimus architecto repudiandae fuga, eveniet aspernatur hic enim
    recusandae molestias facere debitis, tempora qui laboriosam repellat maxime praesentium ipsa dicta. Laudantium
    saepe, laborum tempora odit officiis excepturi incidunt consequuntur doloremque in similique blanditiis et, atque
    omnis magnam itaque dolorem inventore harum non! Distinctio in animi laboriosam ipsum dolores corporis aut numquam
    id deleniti reiciendis quibusdam praesentium esse reprehenderit non quidem ullam, atque minima laborum debitis?
    </2h>
    <img src="<?= base_url() ?>public\assets\images\collegelogo.png" alt="">
    <div class="" style="background-image: url('<?= base_url() ?>public\assets\images\NSSCollegeLogo.jpg');">haia</div>
    <div class="myDiv">hia
        <div class="he">
            hello
        </div>
    </div>
    <?= $this->endSection() ?>