<main>
    <!-- herobanner start -->
    <section class="hero-banner ">
        <div class="hero-slider owl-carousel">
            <?php if($sliderhome):
                foreach ($sliderhome as $key => $slid) {  ?>
                <div class="hero-item bg-image" data-background="<?php echo base_url('uploads/project/'.$slid['image']) ?>" >
                    <div class="slider-caption">
                        <div class="capiton-wrapper">
                            <h1>
                            Be Ready Nepal
                            </h1>
                            <p><?php echo $slid['description']  ?></p>
                            <a href="<?php echo base_url('drrinfo') ?>"><button type="button" class="iset-btn btn-white">थप  जानकारी  <i class="la la-long-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>
            <?php } endif; ?>
        </div>
        <a class="scroll-down" href="#hazard-section">
            <i class="la la-angle-double-down"></i>
        </a>
    </section>
    <!-- hazard-section start -->
    <section class="hazard-section pdtb-50" id="hazard-section">
        <div class="container">
            <div class="section-title mrb-50">
                <h3><?php echo !empty(MUNPROFILE)?MUNPROFILE:'' ?></h3>
                <span><?php echo !empty(PROFILEDESC)?PROFILEDESC:'' ?></span>
            </div>
            <div class="row">
            <?php if($drrdata):
                foreach ($drrdata as $key => $value) {  ?>
                <div class="col-xl-3 iset-3" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="hazard-item" >
                        <?php echo $value['svgimage']; ?>
                        <div class="hazard-content">
                            <h4><a href="<?php echo base_url('/drrinfo/')?>drrdetails?id=<?php echo base64_encode($value['id']);?>"><?php echo $value['name']; ?></a></h4>
                            <p><?php echo $value['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } endif; ?>
                <div class="col-xl-3 iset-3" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="hazard-item hazard-button">
                        <a href="<?php echo base_url() ?>/drrinfo" class="iset-btn">थप  जानकारी  <i class="la la-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- drr start -->
    <section class="drr-section pdtb-50 bg-white">
        <div class="container">
            <div class="section-title mrb-50">
                <h3><?php echo !empty(INCIDENT)?INCIDENT:'' ?></h3>
                <span><?php echo !empty(INCIDENTDESC)?INCIDENTDESC:'' ?></span>
            </div>
            <div class="row drr-row">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="drr-item">
                        <figure>
                            <svg xmlns="http://www.w3.org/2000/svg" width="47.404" height="42.749" viewBox="0 0 47.404 42.749"><g transform="translate(1 -33)"><path d="M12.862,33.73c0,9.01,8.31,16.319,18.621,16.319,3.7,0,10.112-2.6,10.112-2.6s5.456,1.5,7.108,1.3a.522.522,0,0,0,.2-.951,7.707,7.707,0,0,1-2.953-3.8A14.987,14.987,0,0,0,50.1,33.73c0-9.01-8.31-16.319-18.621-16.319S12.862,24.72,12.862,33.73Zm25.529-3-6.057,6.007-2.653,2.6-2.6-2.653-2.5-2.553,2.653-2.6,2.5,2.553,6.057-6.007ZM6.1,29.275a12.317,12.317,0,0,1-3.4-8.46C2.7,13.357,9.608,7.3,18.068,7.3a15.829,15.829,0,0,1,13.415,6.908h0c-11.413,0-20.824,7.909-21.775,17.921h0A8.933,8.933,0,0,1,3.851,33.18a.4.4,0,0,1-.15-.751A6.93,6.93,0,0,0,6.1,29.275Z" transform="translate(-3.7 25.7)" fill=""/></g></svg>
                        </figure>
                        <div class="drr-content">
                            <h4>हाजिरीजवाफ खेल्नुहोस्</h4>
                            <p>विभिन्न विपदको जानकारी सम्बन्धि हाजिरीजवाफ खेल खेल्नुहोस् र वास्तविक जानकारी लिनुहोस्</p>
                            <a href="<?php echo base_url('quiz') ?>" class="iset-btn">हाजिरीजवाफ खेल्नुहोस् <i class="la la-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="drr-item">
                        <figure data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="39.734" height="40.801" viewBox="0 0 39.734 40.801"><g transform="translate(893.78 463.02)"><path d="M4.22,34.885a2.547,2.547,0,0,1,2.543-2.543H12.4a2.547,2.547,0,0,1,2.569,2.543v6.358a2.547,2.547,0,0,1-2.56,2.539H6.772a2.547,2.547,0,0,1-2.543-2.543Zm22.692-9.33H21.27A2.547,2.547,0,0,0,18.727,28.1V41.243a2.547,2.547,0,0,0,2.534,2.539H26.9a2.547,2.547,0,0,0,2.543-2.543V28.076a2.547,2.547,0,0,0-2.534-2.521ZM43.954,5.523v35.72a2.547,2.547,0,0,1-2.543,2.539H35.769A2.547,2.547,0,0,1,33.2,41.243V5.523a2.547,2.547,0,0,1,2.56-2.534H41.4A2.547,2.547,0,0,1,43.954,5.523Zm-3.545,1H36.763V40.245h3.645ZM4.22,12.562A9.582,9.582,0,1,1,13.8,22.144,9.582,9.582,0,0,1,4.22,12.562Zm8.415.482,4.144,4.144,1.649-1.649-3.472-3.472V6.834H12.635Z" transform="translate(-898 -466)" fill=""/></g></svg>
                        </figure>
                        <div class="drr-content">
                            <h4>MAJOR  DISASTER TIMELINE</h4>
                            <p>View major disaster events transpired in the past with its associated facts and statistics.</p>
                            <a href="#" class="iset-btn">timeline <i class="la la-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="drr-item">
                        <figure data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41.843" height="41.285" viewBox="0 0 41.843 41.285"><g transform="translate(830 -402.6)"><path d="M39.649,42.267h-3.1A1.55,1.55,0,0,0,35,43.817v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.549,1.549,0,0,0,1.55-1.55v-1.55A1.549,1.549,0,0,0,39.649,42.267Z" transform="translate(-851.052 377.38)" fill=""/><path d="M56.316,42.267h-3.1a1.55,1.55,0,0,0-1.55,1.55v1.55a1.549,1.549,0,0,0,1.55,1.55h3.1a1.549,1.549,0,0,0,1.55-1.55v-1.55A1.549,1.549,0,0,0,56.316,42.267Z" transform="translate(-859.971 377.38)" fill=""/><path d="M72.982,42.267h-3.1a1.55,1.55,0,0,0-1.55,1.55v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.55,1.55,0,0,0,1.55-1.55v-1.55A1.55,1.55,0,0,0,72.982,42.267Z" transform="translate(-868.888 377.38)" fill=""/><path d="M22.982,56.667h-3.1a1.549,1.549,0,0,0-1.55,1.55v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.55,1.55,0,0,0,1.55-1.55v-1.55A1.549,1.549,0,0,0,22.982,56.667Z" transform="translate(-842.134 369.675)" fill=""/><path d="M39.649,56.667h-3.1A1.55,1.55,0,0,0,35,58.217v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.55,1.55,0,0,0,1.55-1.55v-1.55A1.549,1.549,0,0,0,39.649,56.667Z" transform="translate(-851.052 369.675)" fill=""/><path d="M56.316,56.667h-3.1a1.549,1.549,0,0,0-1.55,1.55v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.55,1.55,0,0,0,1.55-1.55v-1.55A1.549,1.549,0,0,0,56.316,56.667Z" transform="translate(-859.971 369.675)" fill=""/><path d="M72.982,56.667h-3.1a1.55,1.55,0,0,0-1.55,1.55v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.55,1.55,0,0,0,1.55-1.55v-1.55A1.55,1.55,0,0,0,72.982,56.667Z" transform="translate(-868.888 369.675)" fill=""/><path d="M22.982,71.066h-3.1a1.55,1.55,0,0,0-1.55,1.55v1.55a1.549,1.549,0,0,0,1.55,1.55h3.1a1.549,1.549,0,0,0,1.55-1.55v-1.55A1.55,1.55,0,0,0,22.982,71.066Z" transform="translate(-842.134 361.97)" fill=""/><path d="M39.649,71.066h-3.1A1.55,1.55,0,0,0,35,72.616v1.55a1.55,1.55,0,0,0,1.55,1.55h3.1a1.549,1.549,0,0,0,1.55-1.55v-1.55A1.55,1.55,0,0,0,39.649,71.066Z" transform="translate(-851.052 361.97)" fill=""/><path d="M56.316,71.066h-3.1a1.55,1.55,0,0,0-1.55,1.55v1.55a1.549,1.549,0,0,0,1.55,1.55h3.1a1.549,1.549,0,0,0,1.55-1.55v-1.55A1.55,1.55,0,0,0,56.316,71.066Z" transform="translate(-859.971 361.97)" fill=""/><path d="M42.194,15.6H40.256v2.325a3.487,3.487,0,1,1-6.974,0V15.6H29.408v2.325a3.487,3.487,0,1,1-6.974,0V15.6H18.56v2.325a3.487,3.487,0,1,1-6.974,0V15.6H9.649A4.654,4.654,0,0,0,5,20.249V47.587a4.654,4.654,0,0,0,4.649,4.649H42.194a4.654,4.654,0,0,0,4.649-4.649V20.249A4.654,4.654,0,0,0,42.194,15.6Zm1.55,31.987a1.551,1.551,0,0,1-1.55,1.55H9.649a1.551,1.551,0,0,1-1.55-1.55V26.448a1.55,1.55,0,0,1,1.55-1.55H42.194a1.549,1.549,0,0,1,1.55,1.55Z" transform="translate(-835 391.649)" fill=""/><path d="M23.992,14.9a2.325,2.325,0,0,0,2.325-2.325V7.925a2.325,2.325,0,1,0-4.649,0v4.649A2.325,2.325,0,0,0,23.992,14.9Z" transform="translate(-843.918 397)" fill="rgba(255,255,255,0.9)"/><path d="M47.325,14.9a2.325,2.325,0,0,0,2.325-2.325V7.925a2.325,2.325,0,1,0-4.649,0v4.649A2.325,2.325,0,0,0,47.325,14.9Z" transform="translate(-856.403 397)" fill=""/><path d="M70.658,14.9a2.325,2.325,0,0,0,2.325-2.325V7.925a2.325,2.325,0,0,0-4.649,0v4.649A2.325,2.325,0,0,0,70.658,14.9Z" transform="translate(-868.888 397)" fill=""/></g></svg>
                        </figure>
                        <div class="drr-content">
                            <h4>मौसमी  तयारी पात्रो</h4>
                            <p>हाम्रो मौसमी  तयारी गाइडबुकको अध्ययनबाट मौसमी  विपदबाट सुरक्षित हुनुहोस्</p>
                            <a href="<?php echo base_url('calendar') ?>"  class="iset-btn">मौसमी पात्रो हेर्नुहोस् <i class="la la-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="drr-item">
                        <figure data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.942" height="58.736" viewBox="0 0 59.942 58.736"><g transform="translate(1701.5 749.5)"><g transform="translate(-1704 -753)"><path d="M72.341,42.013l-4.795-7.318a3.882,3.882,0,0,1-.442-1.451A18.836,18.836,0,0,0,51.838,16.4V32.424A4.5,4.5,0,0,1,47.359,36.9a38.527,38.527,0,0,0-15.014,3.091,4.453,4.453,0,0,1-1.766.379H30.2a21.628,21.628,0,0,0,6.813,10.851,2.332,2.332,0,0,1,.883,1.829V63.9a1.65,1.65,0,0,0,1.514,1.64l16.213,1.451a1.659,1.659,0,0,0,1.766-1.64V57.6a.9.9,0,0,1,.883-.883h5.678a3.124,3.124,0,0,0,3.154-3.154v-7.57a.632.632,0,0,1,.631-.631h2.776A2.2,2.2,0,0,0,72.341,42.013Z" transform="translate(-10.225 -4.762)" fill=""/><path d="M20.732,32.015a41.9,41.9,0,0,1,16.4-3.344,1,1,0,0,0,1.009-1.009V7.159A1,1,0,0,0,37.134,6.15a9.317,9.317,0,0,0-1.325.063h-.063v-1.7A1,1,0,0,0,34.737,3.5,37.485,37.485,0,0,0,20.353,6.339,37.485,37.485,0,0,0,5.97,3.5,1.013,1.013,0,0,0,4.9,4.509v1.7H4.834c-.442,0-.883-.063-1.325-.063A1,1,0,0,0,2.5,7.159V27.6a1,1,0,0,0,1.009,1.009,41.9,41.9,0,0,1,16.4,3.344.8.8,0,0,0,.379.063A.539.539,0,0,0,20.732,32.015ZM21.3,8.168A33.64,33.64,0,0,1,33.664,5.582v19.43A38.487,38.487,0,0,0,21.3,27.473V8.168Zm-2.019,19.3a36.865,36.865,0,0,0-12.365-2.46V5.519A36.415,36.415,0,0,1,19.281,8.105Z" fill=""/><path d="M13.383,13.652a38.873,38.873,0,0,1,6.435,1.325,2.732,2.732,0,0,0,.315.063,1.025,1.025,0,0,0,.946-.694,1,1,0,0,0-.694-1.262,41.354,41.354,0,0,0-6.75-1.388,1.052,1.052,0,0,0-1.136.883,1.68,1.68,0,0,0,.189.757A1.013,1.013,0,0,0,13.383,13.652Z" transform="translate(-3.691 -3.023)" fill=""/><path d="M13.383,19.752a38.873,38.873,0,0,1,6.435,1.325,2.732,2.732,0,0,0,.315.063,1.025,1.025,0,0,0,.946-.694,1,1,0,0,0-.694-1.262,41.354,41.354,0,0,0-6.75-1.388,1,1,0,0,0-1.136.883,1.68,1.68,0,0,0,.189.757A1.013,1.013,0,0,0,13.383,19.752Z" transform="translate(-3.691 -5.275)" fill=""/><path d="M13.346,25.952a36.891,36.891,0,0,1,6.372,1.325c.126,0,.189.063.315.063a1.025,1.025,0,0,0,.946-.694,1,1,0,0,0-.694-1.262A41.354,41.354,0,0,0,13.536,24a1.052,1.052,0,0,0-1.136.883,1.68,1.68,0,0,0,.189.757A3.859,3.859,0,0,0,13.346,25.952Z" transform="translate(-3.655 -7.564)" fill=""/><path d="M13.383,32.052a38.873,38.873,0,0,1,6.435,1.325,2.732,2.732,0,0,0,.315.063,1.025,1.025,0,0,0,.946-.694,1,1,0,0,0-.694-1.262,41.354,41.354,0,0,0-6.75-1.388,1,1,0,0,0-1.136.883,1.68,1.68,0,0,0,.189.757A1.013,1.013,0,0,0,13.383,32.052Z" transform="translate(-3.691 -9.815)" fill=""/><path d="M42.857,11.6a35.637,35.637,0,0,0-6.75,1.388.9.9,0,0,0-.568.5,1.055,1.055,0,0,0-.063.757.948.948,0,0,0,.946.694.569.569,0,0,0,.315-.063,31.655,31.655,0,0,1,6.372-1.262,1.1,1.1,0,0,0,.694-.379.829.829,0,0,0,.189-.757A1.156,1.156,0,0,0,42.857,11.6Z" transform="translate(-12.157 -2.99)" fill=""/><path d="M42.828,17.8h0a35.637,35.637,0,0,0-6.75,1.388,1.078,1.078,0,0,0-.694,1.262.948.948,0,0,0,.946.694.569.569,0,0,0,.315-.063,36.891,36.891,0,0,1,6.372-1.325,1.1,1.1,0,0,0,.694-.379.829.829,0,0,0,.189-.757A.944.944,0,0,0,42.828,17.8Z" transform="translate(-12.128 -5.275)" fill=""/><path d="M42.857,23.9h0a35.637,35.637,0,0,0-6.75,1.388.9.9,0,0,0-.568.5,1.055,1.055,0,0,0-.063.757.948.948,0,0,0,.946.694.569.569,0,0,0,.315-.063,36.891,36.891,0,0,1,6.372-1.325,1.1,1.1,0,0,0,.694-.379.786.786,0,0,0,.189-.757A1.1,1.1,0,0,0,42.857,23.9Z" transform="translate(-12.157 -7.527)" fill=""/><path d="M42.828,30h0a35.636,35.636,0,0,0-6.75,1.388,1.078,1.078,0,0,0-.694,1.262.948.948,0,0,0,.946.694.569.569,0,0,0,.315-.063,31.655,31.655,0,0,1,6.372-1.262,1.1,1.1,0,0,0,.694-.379.829.829,0,0,0,.189-.757A1.038,1.038,0,0,0,42.828,30Z" transform="translate(-12.128 -9.782)" fill=""/></g></g></svg>
                        </figure>
                        <div class="drr-content">
                            <h4>जानकारी पोर्टल </h4>
                            <p>विविन्न पुस्तक र प्रकाशनको अध्ययनबाट विपदसम्बन्धि जानकारी बढाउनुहोस्</p>
                            <a href="<?php echo base_url('knowledge-portal') ?>" class="iset-btn">थप  जानकारी <i class="la la-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="drr-item">
                        <figure data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64.567" height="45.444" viewBox="0 0 64.567 45.444"><g transform="translate(1090 350.112)" opacity="0.9"><path d="M14.925,96.055l-.611,2.852L8,98.3V63.262c0-9.98,24.849-9.98,32.386-5.5,7.333-4.481,32.182-4.481,32.182,5.5V98.3l-6.314.611-.407-2.852c-2.852-2.648-19.35-2.648-22.2,0l-3.259,4.277-3.463-4.277C34.275,93.407,17.573,93.407,14.925,96.055Zm1.222-29.941a43.236,43.236,0,0,1,17.72-.611v3.463c-5.7-1.018-13.239-.815-17.72.815Zm48.273,0A42.975,42.975,0,0,0,46.7,65.5v3.463c5.7-1.018,13.239-.815,17.72.815Zm0,17.313C59.328,82,52.4,82,46.7,82.815v3.463c5.7-1.018,13.239-.611,17.72.815Zm0-8.555c-5.092-1.629-12.017-1.629-17.72-.815v3.666c5.7-1.018,13.239-.815,17.72.815ZM16.147,83.426C21.443,82,28.368,82,33.868,82.815v3.463c-5.7-1.018-13.239-.611-17.72.815Zm0-8.555c5.3-1.629,12.221-1.629,17.72-.815v3.666c-5.7-1.018-13.239-.815-17.72.815ZM38.552,93V60.817c-6.11-3.87-27.09-3.055-27.09,2.444V95.036C12.481,89.74,32.442,89.129,38.552,93Zm3.463-32.182V93c6.11-3.87,26.071-3.259,27.09,2.037V63.262C69.1,57.762,48.329,56.948,42.015,60.817Z" transform="translate(-1098 -405)" fill="" fill-rule="evenodd"/></g></svg>
                        </figure>
                        <div class="drr-content">
                            <h4>विपद् शब्दावली </h4>
                            <p>विपद् शब्दावलीको अर्थ र टिप्पणीको अध्ययन गर्नुहोस्</p>
                            <a href="<?php echo base_url('terminologies') ?>" class="iset-btn">विपद् शब्दावली हेर्नुहोस्<i class="la la-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- beready start -->
    <section class="beready-section pdtb-50">
        <div class="section-title mrb-50">
             <h3><?php echo !empty(MUNTITLE)?MUNTITLE:'' ?></h3>
                <span><?php echo !empty(MUNTITLEDESC)?MUNTITLEDESC:'' ?></span>
        </div>
        <div class="container">
            <div class="row">
            <?php if($beready):
                foreach ($beready as $key => $rdy) {  ?>
                <div class="col-lg-3 col-md-6">
                    <div class="beready-item">
                        <div class="beready-content">
                        <?php 
                            switch ($rdy['id']) {
                                case "6":
                                    $rdyimage = '<figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76.742" height="83.718" viewBox="0 0 76.742 83.718">
                                        <g id="local_government" data-name="local government" transform="translate(-13.333 -10)">
                                            <path id="Path_129" data-name="Path 129" d="M90.075,70.31V63.333H13.333V70.31H20.31V84.263H13.333v6.977H90.075V84.263H83.1V70.31Zm-34.883,0h6.977V84.263H55.192ZM48.216,84.263H41.239V70.31h6.977ZM27.287,70.31h6.976V84.263H27.287ZM76.122,84.263H69.146V70.31h6.976Z" transform="translate(0 2.479)" fill=""/>
                                            <path id="Path_130" data-name="Path 130" d="M60.62,10H46.667V20.465H64.108Z" transform="translate(1.549)" fill=""/>
                                            <path id="Path_131" data-name="Path 131" d="M75.532,44.263a24.384,24.384,0,0,0-48.276,0H20v6.977h6.977v6.977h6.976V51.239H40.93v6.977h6.977V51.239h6.976v6.977h6.977V51.239h6.977v6.977h6.976V51.239h6.977V44.263Z" transform="translate(0.31 0.62)" fill=""/>
                                        </g>
                                        </svg>
                                </figure>';
                                    break;
                                case "4":
                                     $rdyimage = '<figure>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="83.848" height="83.849" viewBox="0 0 83.848 83.849">
                                            <g id="home_ready" data-name="home ready" transform="translate(-241 1204)">
                                              <g id="Group_46" data-name="Group 46" transform="translate(241 -1204)">
                                                <path id="Path_132" data-name="Path 132" d="M29.4,41.683a5.294,5.294,0,1,1,5.294,5.294A5.294,5.294,0,0,1,29.4,41.683Zm19.7,5.294A5.294,5.294,0,1,0,43.8,41.683,5.294,5.294,0,0,0,49.094,46.978ZM18.831,57.4a3.74,3.74,0,1,0-3.74-3.74A3.74,3.74,0,0,0,18.831,57.4Zm46.3.4a3.74,3.74,0,1,0-3.74-3.74A3.739,3.739,0,0,0,65.131,57.8Zm-3.866.305-1.659-3.418c-1.95-4.032-3.171-6.8-7.053-6.8H45.638c-3.035,0-4.721,1.939-6.181,4.841l-.2-.931a9.6,9.6,0,0,1,2.063-3.022,6.3,6.3,0,0,0-3.177-.889H31.233c-3.882,0-5.2,2.768-7.146,6.8l-1.449,2.985c1.614.333,2.484,1.522,3.388,3.267l3.366-6.518L27.257,64.766l-.933-1.923c-1.378-2.847-2.306-4.8-5.048-4.8H16.388c-2.743,0-3.671,1.955-5.048,4.8L8.812,68.051a1.551,1.551,0,0,0,2.79,1.354l3.485-6.751V82.132a1.681,1.681,0,1,0,3.362,0V71.962h.764V82.133a1.681,1.681,0,1,0,3.362,0V62.655l3.485,6.751a1.567,1.567,0,0,0,.18.281l-.557,2.7h3.708v9.087a2.38,2.38,0,0,0,4.759,0V72.382h1.066V81.45a2.38,2.38,0,0,0,4.759,0V72.382h3.615L40.968,59.911l2.842-5.49V81.45a2.38,2.38,0,0,0,4.759,0V67.595h1.066V81.468a2.38,2.38,0,0,0,4.759,0V54.422l3.526,6.96C58.818,59.644,59.68,58.455,61.265,58.106ZM75.152,68.465l-2.526-5.2c-1.377-2.847-2.3-4.8-5.045-4.8h-4.9c-2.741,0-3.668,1.954-5.045,4.8l-2.526,5.2A1.549,1.549,0,0,0,57.9,69.818l3.483-6.746-2.618,12.68h2.618v6.414a1.68,1.68,0,0,0,3.361,0V75.752h.778v6.414a1.68,1.68,0,1,0,3.36,0V75.752H71.5L68.88,63.072l3.482,6.746a1.55,1.55,0,0,0,2.79-1.352ZM64.025,4.925H41.737V13.4H28.429V4.925H21.047L0,28.112l6.275.491V52.95l7.51,1.043.431-1.659-6.278-.891V28.719l34.6,2.749,1.544-1.908v7.909l1.663-1.4V27.506l16.188-20L76.606,25.639v25.48l-6.9,1.211L70.241,54l8.028-1.394V27.693l1.372,1.695h4.207ZM43.158,0H27.008V3.437h16.15Z" fill=""/>
                                              </g>
                                            </g>
                                          </svg>
                                </figure>';
                                    break;
                                case "3":
                                     $rdyimage = '<figure>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="101.091" height="81.34" viewBox="0 0 101.091 81.34">
                                            <g id="school" transform="translate(-108.388 800.341)">
                                              <g id="Group_45" data-name="Group 45" transform="translate(108.388 -800.341)">
                                                <path id="Path_120" data-name="Path 120" d="M202.314,85.56h3.3V55.582h1.03V52.4H187.533v3.185h1.03V79.971a10.077,10.077,0,0,1,13.751,5.589Z" transform="translate(-117.259 -32.762)" fill=""/>
                                                <path id="Path_121" data-name="Path 121" d="M122.925,66.439V59.46c.131,0,.261,0,.395,0s.263,0,.394,0v5.626a10.179,10.179,0,0,1,4.73-4.189V59.005a19.96,19.96,0,0,0,5.124-1.567l-4.121-21.211c.037.046.074.088.112.136,1.588,2.03,3.492,5.948,4.465,13.332a1.538,1.538,0,0,0,1.522,1.336,1.61,1.61,0,0,0,.2-.013,1.538,1.538,0,0,0,1.324-1.725c-1.09-8.262-3.333-12.8-5.5-15.318a8,8,0,0,0-4.423-2.923c-.125-.031-.35-.085-.645-.145a4.452,4.452,0,0,1-1.732,3.615,1.99,1.99,0,0,1-1.035,2.457c-2.632,1.246-4.834,2.187-6.543,2.8q-.387.135-.745.254l-3.381,17.4A19.96,19.96,0,0,0,118.2,59v6.582c.21-.013.421-.022.634-.022A10.042,10.042,0,0,1,122.925,66.439Z" transform="translate(-70.701 -19.326)" fill=""/>
                                                <path id="Path_122" data-name="Path 122" d="M131.935,9.218a2.18,2.18,0,0,1,1.59.689,5.082,5.082,0,1,0-4.344-.556,5.023,5.023,0,0,0,1.163.558A2.181,2.181,0,0,1,131.935,9.218Z" transform="translate(-79.316 0)" fill=""/>
                                                <path id="Path_123" data-name="Path 123" d="M138.084,29.087a1.813,1.813,0,1,0-1.38,0v.765a2.059,2.059,0,0,1,.25-.017,2.011,2.011,0,0,1,1.129.353Z" transform="translate(-84.775 -16.006)" fill=""/>
                                                <path id="Path_124" data-name="Path 124" d="M113.627,39.337c1.626-.582,3.744-1.476,6.5-2.78a1.537,1.537,0,1,0-1.314-2.779h0c-2.695,1.275-4.738,2.134-6.219,2.662-.372.136-.711.248-1.015.34l-.1-.463q.427-.13.955-.321c1.381-.493,3.141-1.234,5.242-2.208a4.882,4.882,0,0,1-.953-2.878c-.236.054-.461.107-.683.154a9.288,9.288,0,0,0-2.521,1.066,22.535,22.535,0,0,0-3.709,2.7,11.628,11.628,0,0,0-1.4,1.475,4.814,4.814,0,0,0-.508.8,2.522,2.522,0,0,0-.281,1.115,1.941,1.941,0,0,0,.3,1.047,1.975,1.975,0,0,0,.827.717h0a2.737,2.737,0,0,0,1.166.231,8.629,8.629,0,0,0,2.323-.422C112.656,39.666,113.112,39.518,113.627,39.337Z" transform="translate(-67.289 -19.328)" fill=""/>
                                                <path id="Path_125" data-name="Path 125" d="M72.881,128.062c0,.224-.011.444-.027.664a7.846,7.846,0,0,0,10.1-.2q-.011-.229-.012-.462A8.932,8.932,0,0,1,85.6,121.7,7.863,7.863,0,0,0,70,121.49,8.938,8.938,0,0,1,72.881,128.062Z" transform="translate(-43.771 -71.736)" fill=""/>
                                                <path id="Path_126" data-name="Path 126" d="M144.083,121.3a8.941,8.941,0,0,1,3.1,6.767c0,.284-.015.563-.04.84a7.84,7.84,0,0,0,9.629-.177c-.016-.219-.027-.44-.027-.663a8.936,8.936,0,0,1,2.877-6.571,7.86,7.86,0,0,0-15.535-.2Z" transform="translate(-90.091 -71.738)" fill=""/>
                                                <circle id="Ellipse_14" data-name="Ellipse 14" cx="7.836" cy="7.836" r="7.836" transform="translate(12.314 48.49)" fill=""/>
                                                <path id="Path_127" data-name="Path 127" d="M17.687,185.358a13.094,13.094,0,0,1,.669-1.421v7.644H35.45v-7.643a18.014,18.014,0,0,1,1.562,4.192q.4,1.54.69,3.45h6.382a27.988,27.988,0,0,1,1.584-6.224,13.105,13.105,0,0,1,.669-1.419v7.643H63.43v-7.643a18.023,18.023,0,0,1,1.562,4.192q.4,1.54.69,3.45h5.882a28.007,28.007,0,0,1,1.583-6.223,13.012,13.012,0,0,1,.669-1.42v7.643H90.91v-7.643a18.022,18.022,0,0,1,1.562,4.192q.4,1.54.69,3.45h5.3a34.621,34.621,0,0,0-2.021-8.192,13.921,13.921,0,0,0-3.233-5.031,7.311,7.311,0,0,0-4.31-2.021,2.243,2.243,0,0,0-.237-.013h-.025c-.114-.006-.226-.017-.34-.016a2.7,2.7,0,0,0-.288.016H76.715a2.655,2.655,0,0,0-.285-.016c-.112,0-.223.011-.334.016h-.031a2.29,2.29,0,0,0-.239.013,7.305,7.305,0,0,0-4.308,2.021,13.241,13.241,0,0,0-2.9,4.244,13.138,13.138,0,0,0-2.894-4.244,7.311,7.311,0,0,0-4.31-2.021,2.243,2.243,0,0,0-.237-.013h-.025c-.114-.006-.226-.017-.34-.016a2.7,2.7,0,0,0-.288.016h-11.3a2.7,2.7,0,0,0-.283-.016h0c-.114,0-.227.011-.34.016h-.025a2.243,2.243,0,0,0-.237.013,7.309,7.309,0,0,0-4.31,2.021,13.748,13.748,0,0,0-3.146,4.822,13.711,13.711,0,0,0-3.142-4.822,7.313,7.313,0,0,0-4.31-2.021,2.243,2.243,0,0,0-.237-.013h-.025c-.114-.006-.226-.017-.34-.016a2.687,2.687,0,0,0-.287.016H21.254a2.648,2.648,0,0,0-.285-.016c-.112,0-.223.011-.334.016H20.6a2.29,2.29,0,0,0-.239.013,7.305,7.305,0,0,0-4.308,2.021c-2.016,1.907-3.37,4.72-4.346,8.469a42.426,42.426,0,0,0-.909,4.753h5.3A28.038,28.038,0,0,1,17.687,185.358Z" transform="translate(-6.754 -110.241)" fill=""/>
                                                <ellipse id="Ellipse_15" data-name="Ellipse 15" cx="7.835" cy="7.836" rx="7.835" ry="7.836" transform="translate(40.294 48.489)" fill=""/>
                                                <circle id="Ellipse_16" data-name="Ellipse 16" cx="7.836" cy="7.836" r="7.836" transform="translate(67.774 48.49)" fill=""/>
                                                <rect id="Rectangle_89" data-name="Rectangle 89" width="14.685" height="1.874" transform="translate(26.219 36.807)" fill=""/>
                                                <rect id="Rectangle_90" data-name="Rectangle 90" width="10.539" height="1.874" transform="translate(0 36.807)" fill=""/>
                                                <rect id="Rectangle_91" data-name="Rectangle 91" width="11.156" height="1.874" transform="translate(89.935 36.807)" fill=""/>
                                                <path id="Path_128" data-name="Path 128" d="M44.352,86.786V65.8H30.862V86.786Zm-6.745-2.5a2.78,2.78,0,1,1,2.78-2.78A2.779,2.779,0,0,1,37.607,84.288Zm0-15.989a4.528,4.528,0,1,1-4.527,4.528A4.529,4.529,0,0,1,37.607,68.3Z" transform="translate(-19.297 -41.143)" fill=""/>
                                                <circle id="Ellipse_17" data-name="Ellipse 17" cx="1.843" cy="1.843" r="1.843" transform="translate(16.468 29.841)" fill=""/>
                                                <circle id="Ellipse_18" data-name="Ellipse 18" cx="1.131" cy="1.131" r="1.131" transform="translate(17.179 39.234)" fill=""/>
                                              </g>
                                            </g>
                                          </svg>
                                          
                                </figure>';
                                    break;
                                case "4":
                                     $rdyimage = '<figure>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83.111" height="91.631" viewBox="0 0 83.111 91.631">
                                        <g id="hospital" transform="translate(-6.414 -4.369)">
                                            <path id="Path_116" data-name="Path 116" d="M30.391,40.332v41L49.827,73.22l1.77-.739,19.435-8.111v-41ZM40.445,76.759V55.978l9.383-3.913V72.845ZM60.98,68.19,51.6,72.1V51.325l9.383-3.915Z" transform="translate(18.493 14.659)" fill=""/>
                                            <path id="Path_117" data-name="Path 117" d="M6.414,64.62l40.7,16.535v-41L6.414,23.616Zm35.693,5.022L32.59,65.775V52.137L42.107,56S42.107,69.641,42.107,69.641ZM30.821,65.056l-9.069-3.684V47.732l9.069,3.686Zm-19.4-21.518,8.559,3.477V60.654l-8.559-3.479Z" transform="translate(0 14.845)" fill=""/>
                                            <path id="Path_118" data-name="Path 118" d="M39.381,4.369A20.646,20.646,0,1,0,60.028,25.015,20.647,20.647,0,0,0,39.381,4.369ZM52.34,28.689H43.053v9.285H35.711V28.689H26.424V21.343h9.287V12.058h7.342v9.285H52.34Z" transform="translate(9.503 0)" fill=""/>
                                            <path id="Path_119" data-name="Path 119" d="M70.779,19.418a23.274,23.274,0,0,1-45.235-.391L7.287,25.873,47.324,42.137,87.309,25.453Z" transform="translate(0.673 11.306)" fill=""/>
                                        </g>
                                    </svg>
                                          
                                </figure>';
                                    break;
                            }
                                          ?>
                            <figure>             
                                <?php echo !empty($rdyimage)?$rdyimage:''; ?>
                            </figure>
                            <h3><a href="<?php echo base_url('home/disasterdetails/'.$rdy['slug']) ?>"><?php echo $rdy['name'] ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } endif; ?>
        </div>
    </section>
</main>

