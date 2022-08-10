<?php require_once('connection.php'); ?>

<?php 
    $query_course = "SELECT * from CLASS ";
    $result_course =  mysqli_query($connection,$query_course);
    $row_course = mysqli_num_rows($result_course);
    
    $data_course = mysqli_fetch_assoc($result_course);
?>

<section class="cid-qVlkxyAfTj" id="pricing-tables1-d">
    <div class="container">

        <?php 
            while($rows = mysqli_fetch_assoc($result_course)){
                echo '
                <div class="col-12 mx-2 my-2 ">
                    <div class="plan-header text-center pt-5">
                        <h3 class="plan-title">'.$rows['CLASS_LEVEL'].'</h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">$</span>
                        <span class="price-figure mbr-fonts-style display-1">
                        '.$rows['CLASS_PRICE'].'</span>
                        <small class="price-term mbr-fonts-style display-7">per semester
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">Instructor : '.$rows['CLASS_INSTRUCTOR'].'</li>
                            <li class="list-group-item">'.$rows['CLASS_DESCRIPTION'].'</li>
                            <button class=" btn btn-default">'.$rows['CLASS_DAY'].'</button>
                            <button class=" btn btn-default">Starting Time'.$rows['CLASS_TIME'].'
                            </button>
                        </ul>
                    </div> 
                </div>
                ';
            }
        ?>
    </div>
</section>

<section class="mbr-section article content9 cid-qVlpKamaN2" id="content9-g">

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">Chinese Martial Arts (Wushu), Shaolin, Tai Chi (Tai Ji), Forms (Taolu), Animal Forms, Weapons, fitness<br><br></div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>

</section>

<section class="features18 popup-btn-cards cid-qVlyR4RTM8" id="features18-l">

    <div class="container">
        <div class="media-container-row pt-5 ">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper ">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center"></div>
                        <img src="assets/images/timg-5-556x371.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">Punch (Quan)</h4>
                        <p class="mbr-text mbr-fonts-style align-left display-7">
                            Forms are sequences of techniques; these are the antiques and treasures of the Temple,succinctly moving scriptures that you can enjoy on many levels. On a weekly basis laying down the basic fitness foundations
                        </p>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>
                        <div class="mbr-section-btn text-center">
                        </div>
                        <img src="assets/images/timg-3-556x371.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Stances (Mabu)</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Unique insight of Shaolin Foundation Stances training from his lifetime of training and teaching of kung fu. Master Yan Xin will share with us his secret to solid stance training 
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <div class="mbr-overlay"></div>

                        <img src="assets/images/timg-7-556x417.jpg" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">Steps( Qinggong )</h4>
                        <p class="mbr-text mbr-fonts-style display-7">Agility, flexibility, stamina, coordination, 
                            speed and strength, & nourishing your mind and spirit through breathing (Qi Gong) exercises, 
                            deep stretches and meditation. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-qVljHvIuwA" id="form4-b">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div>
                    <div class="icon-block pb-3"></div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7"></h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">Email: huang15n@uwindsor.ca</p>
                    </div>
                </div>

                <div data-form-type="formoid">
                    <div data-form-alert="" hidden="">Thanks for filling out the form!</div>
                    <form class="block mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="v/dlB3QZpsExwqAaQRS6brQKs/gHCEM0Oz5/qtYFuV5M0HXyNwtb+Hcyfxiv5ZUxyqZbEc2XU2L/8EijWpJZMHlA4oexAtpynunbn6Fbw4Sve9cae2bFKK8WMgrOExBp" data-form-field="Email">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="First Name" required="" id="name-form4-b">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-b">
                            </div>
                            <div class="col-md-12" data-for="email">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-b">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-b"></textarea>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>