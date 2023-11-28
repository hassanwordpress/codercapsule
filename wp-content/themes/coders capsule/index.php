<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coders Capsule
 */

get_header();
?>
    <section class="hero">
        <div class="swiper hero__slider">
            <div class="swiper-wrapper">
                <?php
                $rows = get_field('slider_data');
if($rows)
{
    foreach($rows as $row)
    {
$middle = strrpos(substr($row['title'], 0, floor(strlen($row['title']) / 2)), ' ') + 1;
$string1 = substr($row['title'], 0, $middle);
$string2 = substr($row['title'], $middle);
        ?>
        <div class="swiper-slide">
                    <div class="hero__slide">
                        <div class="slide__image">
                            <?php
$image =$row['image'];
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

                        </div>
                        <div class="container">
                            <div class="slide__content" data-aos="fade-up">
                                <h1><?=$string1?><br />
                                    <span class="text-primary"><?=$string2?></span>
                                </h1>
                                <p>
                                    <?=$row['description']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
   <?php }
}
?>




            <div class="swiper-pagination hero__slider--pagination"></div>
        </div>
    </section>

    <section id="services-area" data-aos="zoom-in">
        <div class="container">
            <?php
            $service_middle = strrpos(substr(get_field('service_title'), 0, floor(strlen(get_field('service_title')) / 2)), ' ') + 1;
$service_string1 = substr(get_field('service_title'), 0, $middle);
$service_string2 = substr(get_field('service_title'), $middle);
?>
            <h1 class="default-heading text-center" data-aos="fade-up"><?=$service_string1?>
            <span class="text-primary">
                <?=$service_string2?>
            </span>
            </h1>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.75 11.5C31.4793 11.5 32.1788 11.2103 32.6945 10.6945C33.2103 10.1788 33.5 9.47935 33.5 8.75V3.25C33.5 2.52065 33.2103 1.82118 32.6945 1.30546C32.1788 0.789731 31.4793 0.5 30.75 0.5H25.25C24.5207 0.5 23.8212 0.789731 23.3055 1.30546C22.7897 1.82118 22.5 2.52065 22.5 3.25V4.625H11.5V3.25C11.5 2.52065 11.2103 1.82118 10.6945 1.30546C10.1788 0.789731 9.47935 0.5 8.75 0.5H3.25C2.52065 0.5 1.82118 0.789731 1.30546 1.30546C0.789731 1.82118 0.5 2.52065 0.5 3.25V8.75C0.5 9.47935 0.789731 10.1788 1.30546 10.6945C1.82118 11.2103 2.52065 11.5 3.25 11.5H4.625V22.5H3.25C2.52065 22.5 1.82118 22.7897 1.30546 23.3055C0.789731 23.8212 0.5 24.5207 0.5 25.25V30.75C0.5 31.4793 0.789731 32.1788 1.30546 32.6945C1.82118 33.2103 2.52065 33.5 3.25 33.5H8.75C9.47935 33.5 10.1788 33.2103 10.6945 32.6945C11.2103 32.1788 11.5 31.4793 11.5 30.75V29.375H22.5V30.75C22.5 31.4793 22.7897 32.1788 23.3055 32.6945C23.8212 33.2103 24.5207 33.5 25.25 33.5H30.75C31.4793 33.5 32.1788 33.2103 32.6945 32.6945C33.2103 32.1788 33.5 31.4793 33.5 30.75V25.25C33.5 24.5207 33.2103 23.8212 32.6945 23.3055C32.1788 22.7897 31.4793 22.5 30.75 22.5H29.375V11.5H30.75ZM26.625 22.5H25.25C24.5207 22.5 23.8212 22.7897 23.3055 23.3055C22.7897 23.8212 22.5 24.5207 22.5 25.25V26.625H11.5V25.25C11.5 24.5207 11.2103 23.8212 10.6945 23.3055C10.1788 22.7897 9.47935 22.5 8.75 22.5H7.375V11.5H8.75C9.47935 11.5 10.1788 11.2103 10.6945 10.6945C11.2103 10.1788 11.5 9.47935 11.5 8.75V7.375H22.5V8.75C22.5 9.47935 22.7897 10.1788 23.3055 10.6945C23.8212 11.2103 24.5207 11.5 25.25 11.5H26.625V22.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">CAD Automation</h3>
                            <p class="services-item__text">
                                Revolutionize your CAD design. Unleash creativity, save time, and boost precision
                                effortlessly. Say goodbye to manual
                                hassles, embrace seamless efficiency. Elevate your projects with the power of automated
                                design excellence!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.375 0.625H2.625C2.02826 0.625 1.45597 0.862053 1.03401 1.28401C0.612053 1.70597 0.375 2.27826 0.375 2.875V23.125C0.375 23.7217 0.612053 24.294 1.03401 24.716C1.45597 25.1379 2.02826 25.375 2.625 25.375H27.375C27.9717 25.375 28.544 25.1379 28.966 24.716C29.3879 24.294 29.625 23.7217 29.625 23.125V2.875C29.625 2.27826 29.3879 1.70597 28.966 1.28401C28.544 0.862053 27.9717 0.625 27.375 0.625ZM6.5625 8.5C6.22874 8.5 5.90248 8.40103 5.62498 8.21561C5.34747 8.03018 5.13118 7.76663 5.00345 7.45828C4.87573 7.14993 4.84231 6.81063 4.90742 6.48328C4.97254 6.15594 5.13326 5.85526 5.36926 5.61926C5.60526 5.38326 5.90594 5.22254 6.23328 5.15742C6.56063 5.09231 6.89993 5.12573 7.20828 5.25345C7.51663 5.38118 7.78018 5.59747 7.96561 5.87498C8.15103 6.15248 8.25 6.47874 8.25 6.8125C8.25 7.26005 8.07221 7.68928 7.75574 8.00574C7.43928 8.32221 7.01005 8.5 6.5625 8.5ZM12.1875 8.5C11.8537 8.5 11.5275 8.40103 11.25 8.21561C10.9725 8.03018 10.7562 7.76663 10.6285 7.45828C10.5007 7.14993 10.4673 6.81063 10.5324 6.48328C10.5975 6.15594 10.7583 5.85526 10.9943 5.61926C11.2303 5.38326 11.5309 5.22254 11.8583 5.15742C12.1856 5.09231 12.5249 5.12573 12.8333 5.25345C13.1416 5.38118 13.4052 5.59747 13.5906 5.87498C13.776 6.15248 13.875 6.47874 13.875 6.8125C13.875 7.26005 13.6972 7.68928 13.3807 8.00574C13.0643 8.32221 12.6351 8.5 12.1875 8.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">Software Solution</h3>
                            <p class="services-item__text">
                                We sculpt dreams into reality. Elevate your business with our avant-garde software
                                solution - because in the world of
                                technology, we speak fluent success. Your vision, our expertise – let's build the future
                                together.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.0625 5.9375H5.9375C5.30761 5.9375 4.70352 6.18772 4.25812 6.63312C3.81272 7.07852 3.5625 7.68261 3.5625 8.3125V29.6875C3.5625 30.3174 3.81272 30.9215 4.25812 31.3669C4.70352 31.8123 5.30761 32.0625 5.9375 32.0625H32.0625C32.6924 32.0625 33.2965 31.8123 33.7419 31.3669C34.1873 30.9215 34.4375 30.3174 34.4375 29.6875V8.3125C34.4375 7.68261 34.1873 7.07852 33.7419 6.63312C33.2965 6.18772 32.6924 5.9375 32.0625 5.9375ZM13.775 21.6125C14.027 21.8015 14.1935 22.0828 14.2381 22.3946C14.2826 22.7063 14.2015 23.023 14.0125 23.275C13.8235 23.527 13.5422 23.6935 13.2304 23.7381C12.9187 23.7826 12.602 23.7015 12.35 23.5125L7.6 19.95C7.45252 19.8394 7.33281 19.696 7.25037 19.5311C7.16792 19.3662 7.125 19.1844 7.125 19C7.125 18.8156 7.16792 18.6338 7.25037 18.4689C7.33281 18.304 7.45252 18.1606 7.6 18.05L12.35 14.4875C12.602 14.2985 12.9187 14.2174 13.2304 14.2619C13.5422 14.3065 13.8235 14.473 14.0125 14.725C14.2015 14.977 14.2826 15.2937 14.2381 15.6054C14.1935 15.9172 14.027 16.1985 13.775 16.3875L10.2912 19L13.775 21.6125ZM22.5165 11.0141L17.7665 27.6391C17.726 27.7917 17.6555 27.9347 17.5591 28.0597C17.4627 28.1847 17.3423 28.2892 17.205 28.3672C17.0677 28.4452 16.9163 28.495 16.7595 28.5137C16.6028 28.5324 16.4439 28.5197 16.2921 28.4763C16.1403 28.4328 15.9987 28.3596 15.8755 28.2608C15.7524 28.162 15.6502 28.0396 15.5749 27.9008C15.4996 27.7621 15.4528 27.6097 15.4371 27.4526C15.4214 27.2955 15.4372 27.1369 15.4835 26.9859L20.2335 10.3609C20.3248 10.0637 20.5291 9.81408 20.8024 9.66578C21.0757 9.51749 21.3963 9.48233 21.6953 9.56787C21.9943 9.6534 22.2478 9.8528 22.4013 10.1232C22.5549 10.3936 22.5962 10.7135 22.5165 11.0141ZM30.4 19.95L25.65 23.5125C25.398 23.7015 25.0813 23.7826 24.7696 23.7381C24.4578 23.6935 24.1765 23.527 23.9875 23.275C23.7985 23.023 23.7174 22.7063 23.7619 22.3946C23.8065 22.0828 23.973 21.8015 24.225 21.6125L27.7088 19L24.225 16.3875C24.1002 16.2939 23.9951 16.1767 23.9157 16.0425C23.8362 15.9083 23.784 15.7598 23.7619 15.6054C23.7399 15.4511 23.7484 15.2939 23.7872 15.1428C23.8259 14.9917 23.8939 14.8498 23.9875 14.725C24.0811 14.6002 24.1983 14.4951 24.3325 14.4157C24.4667 14.3362 24.6152 14.284 24.7696 14.2619C24.9239 14.2399 25.0811 14.2485 25.2322 14.2872C25.3833 14.3259 25.5252 14.3939 25.65 14.4875L30.4 18.05C30.5475 18.1606 30.6672 18.304 30.7496 18.4689C30.8321 18.6338 30.875 18.8156 30.875 19C30.875 19.1844 30.8321 19.3662 30.7496 19.5311C30.6672 19.696 30.5475 19.8394 30.4 19.95Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">Programming Training</h3>
                            <p class="services-item__text">
                                From novice to ninja coder in weeks, our course turns aspirations into lines of code
                                that speaks. In the world of ones
                                and zeros, be the one to stand out. Our programming course is the gateway to tech
                                thrills!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="32" height="34" viewBox="0 0 32 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.2025 7.8192L17.14 0.671932C16.791 0.479086 16.3988 0.37793 16 0.37793C15.6012 0.37793 15.209 0.479086 14.86 0.671932L1.7975 7.82217C1.42446 8.02628 1.11306 8.3268 0.895819 8.69234C0.678578 9.05789 0.563465 9.47506 0.5625 9.90029V24.0969C0.563465 24.5221 0.678578 24.9393 0.895819 25.3048C1.11306 25.6704 1.42446 25.9709 1.7975 26.175L14.86 33.3252C15.209 33.5181 15.6012 33.6192 16 33.6192C16.3988 33.6192 16.791 33.5181 17.14 33.3252L30.2025 26.175C30.5755 25.9709 30.8869 25.6704 31.1042 25.3048C31.3214 24.9393 31.4365 24.5221 31.4375 24.0969V9.90178C31.4373 9.47579 31.3226 9.05769 31.1053 8.69129C30.888 8.32489 30.5762 8.02367 30.2025 7.8192ZM16 15.8126L4.07305 9.28131L16 2.75006L27.927 9.28131L16 15.8126ZM17.1875 30.6029V17.8654L29.0625 11.3669V24.0969L17.1875 30.6029Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">CAD Design</h3>
                            <p class="services-item__text">
                                Innovation at Every Pixel: Transforming Concepts into CAD Brilliance. Redefining
                                Possibilities in Every Blueprint. Your
                                Journey to CAD Excellence Starts Here. Choose us for unparalleled design precision.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M34.8125 19.3881C34.8197 19.1293 34.8197 18.8706 34.8125 18.6118L37.4934 15.2625C37.634 15.0866 37.7313 14.8802 37.7775 14.6598C37.8237 14.4395 37.8175 14.2114 37.7594 13.9939C37.3191 12.3421 36.6617 10.756 35.8044 9.27707C35.692 9.08358 35.5361 8.91898 35.3489 8.79639C35.1617 8.67379 34.9485 8.59658 34.7263 8.5709L30.4641 8.09652C30.2868 7.90965 30.1071 7.72996 29.925 7.55746L29.4219 3.28449C29.396 3.06206 29.3185 2.84875 29.1956 2.66157C29.0727 2.47439 28.9077 2.31851 28.7139 2.20637C27.2351 1.3497 25.6489 0.693484 23.9971 0.25496C23.7796 0.196849 23.5515 0.19064 23.3311 0.236831C23.1108 0.283023 22.9044 0.380325 22.7285 0.520897L19.3881 3.18746C19.1294 3.18746 18.8706 3.18746 18.6119 3.18746L15.2625 0.511913C15.0866 0.371341 14.8802 0.274039 14.6599 0.227847C14.4395 0.181655 14.2114 0.187865 13.9939 0.245975C12.3421 0.686259 10.756 1.34366 9.27711 2.20098C9.08362 2.31333 8.91902 2.46929 8.79643 2.65646C8.67383 2.84363 8.59662 3.05683 8.57094 3.2791L8.09656 7.54848C7.90969 7.72696 7.73 7.90665 7.5575 8.08754L3.28453 8.57808C3.0621 8.60396 2.84879 8.68145 2.66161 8.80436C2.47443 8.92728 2.31855 9.09223 2.20641 9.28605C1.34992 10.7652 0.69314 12.3512 0.253203 14.0029C0.195338 14.2205 0.18942 14.4487 0.235925 14.669C0.28243 14.8894 0.380057 15.0957 0.520937 15.2714L3.1875 18.6118C3.1875 18.8706 3.1875 19.1293 3.1875 19.3881L0.511953 22.7375C0.371381 22.9133 0.274079 23.1197 0.227887 23.3401C0.181696 23.5604 0.187905 23.7885 0.246015 24.0061C0.686299 25.6578 1.3437 27.2439 2.20102 28.7229C2.31337 28.9163 2.46933 29.0809 2.6565 29.2035C2.84367 29.3261 3.05687 29.4033 3.27914 29.429L7.54133 29.9034C7.71982 30.0903 7.89951 30.27 8.08039 30.4425L8.57812 34.7154C8.604 34.9379 8.68149 35.1512 8.8044 35.3384C8.92732 35.5255 9.09227 35.6814 9.28609 35.7936C10.7652 36.65 12.3513 37.3068 14.0029 37.7468C14.2205 37.8046 14.4487 37.8105 14.6691 37.764C14.8894 37.7175 15.0958 37.6199 15.2715 37.479L18.6119 34.8125C18.8706 34.8196 19.1294 34.8196 19.3881 34.8125L22.7375 37.4934C22.9134 37.634 23.1198 37.7313 23.3401 37.7775C23.5605 37.8237 23.7886 37.8174 24.0061 37.7593C25.6581 37.3198 27.2443 36.6624 28.7229 35.8043C28.9164 35.692 29.081 35.536 29.2036 35.3488C29.3262 35.1617 29.4034 34.9485 29.4291 34.7262L29.9034 30.464C30.0903 30.2867 30.27 30.107 30.4425 29.925L34.7155 29.4218C34.9379 29.396 35.1512 29.3185 35.3384 29.1956C35.5256 29.0726 35.6815 28.9077 35.7936 28.7139C36.6501 27.2347 37.3069 25.6487 37.7468 23.9971C37.8047 23.7794 37.8106 23.5512 37.7641 23.3309C37.7176 23.1105 37.6199 22.9042 37.4791 22.7285L34.8125 19.3881ZM19 26.1875C17.5784 26.1875 16.1888 25.7659 15.0068 24.9761C13.8249 24.1864 12.9036 23.0638 12.3596 21.7505C11.8156 20.4372 11.6733 18.992 11.9506 17.5977C12.2279 16.2035 12.9125 14.9228 13.9177 13.9176C14.9229 12.9124 16.2036 12.2279 17.5978 11.9506C18.992 11.6732 20.4372 11.8156 21.7505 12.3596C23.0639 12.9036 24.1864 13.8248 24.9762 15.0068C25.766 16.1888 26.1875 17.5784 26.1875 19C26.1875 20.9062 25.4302 22.7344 24.0823 24.0823C22.7344 25.4302 20.9062 26.1875 19 26.1875Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">Web Development</h3>
                            <p class="services-item__text">
                                Fuel your growth with a website that not only speaks your brand language but also
                                resonates with your audience. Our web
                                development services blend sleek design and powerful functionality for a website that
                                truly wows.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-left">
                    <div class="services-item">
                        <div class="services-item__icon">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.5 3.5625H9.5C8.87011 3.5625 8.26602 3.81272 7.82062 4.25812C7.37522 4.70352 7.125 5.30761 7.125 5.9375V32.0625C7.125 32.6924 7.37522 33.2965 7.82062 33.7419C8.26602 34.1873 8.87011 34.4375 9.5 34.4375H28.5C29.1299 34.4375 29.734 34.1873 30.1794 33.7419C30.6248 33.2965 30.875 32.6924 30.875 32.0625V5.9375C30.875 5.30761 30.6248 4.70352 30.1794 4.25812C29.734 3.81272 29.1299 3.5625 28.5 3.5625ZM19 28.5C18.6477 28.5 18.3033 28.3955 18.0104 28.1998C17.7175 28.0041 17.4892 27.7259 17.3543 27.4004C17.2195 27.0749 17.1842 26.7168 17.253 26.3712C17.3217 26.0257 17.4914 25.7083 17.7405 25.4592C17.9896 25.2101 18.307 25.0405 18.6525 24.9717C18.998 24.903 19.3562 24.9383 19.6817 25.0731C20.0071 25.2079 20.2853 25.4362 20.4811 25.7291C20.6768 26.0221 20.7812 26.3665 20.7812 26.7188C20.7812 27.1912 20.5936 27.6442 20.2595 27.9783C19.9255 28.3123 19.4724 28.5 19 28.5ZM23.75 16.625H14.25C13.9351 16.625 13.633 16.4999 13.4103 16.2772C13.1876 16.0545 13.0625 15.7524 13.0625 15.4375C13.0625 15.1226 13.1876 14.8205 13.4103 14.5978C13.633 14.3751 13.9351 14.25 14.25 14.25H23.75C24.0649 14.25 24.367 14.3751 24.5897 14.5978C24.8124 14.8205 24.9375 15.1226 24.9375 15.4375C24.9375 15.7524 24.8124 16.0545 24.5897 16.2772C24.367 16.4999 24.0649 16.625 23.75 16.625ZM23.75 11.875H14.25C13.9351 11.875 13.633 11.7499 13.4103 11.5272C13.1876 11.3045 13.0625 11.0024 13.0625 10.6875C13.0625 10.3726 13.1876 10.0705 13.4103 9.84781C13.633 9.62511 13.9351 9.5 14.25 9.5H23.75C24.0649 9.5 24.367 9.62511 24.5897 9.84781C24.8124 10.0705 24.9375 10.3726 24.9375 10.6875C24.9375 11.0024 24.8124 11.3045 24.5897 11.5272C24.367 11.7499 24.0649 11.875 23.75 11.875Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-item__content">
                            <h3 class="services-item__title">Technical Support</h3>
                            <p class="services-item__text">
                                Unlock a world of seamless operations with our round-the-clock technical support – where
                                every issue meets its match.
                                Our technical support is not just a service, but a commitment to your seamless success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="whychooseus">
        <div class="container">
            <h1 class="default-heading text-center" data-aos="fade-up">Why <span class="text-primary">Choose</span> Us?
            </h1>
            <div class="row">
                <div class="col-md-6" data-aos="fade-left">
                    <div class="chooseus-text">
                        <h2>Architects of excellence in CAD Automation</h2>
                        <p>Our journey in CAD Automation is perfectly interwoven with the achievements of top-tier MNCs
                            like Honeywell(USA), NTT
                            Data(Japan), MRF(India) etc. From New York's skyline to Tokyo's lights, our global journey
                            is etched in success stories.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="assets/images/whychoose-image.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-left">
                    <img src="assets/images/whychoose-image1.png" alt="">
                </div>
                <div class="col-md-6">
                    <div class="chooseus-text flr" data-aos="fade-right">
                        <h2>Your Go-To Gurus for Cutting-Edge Software Solutions</h2>
                        <p>Our seasoned team of software solution experts has delivered innovation to numerous clients
                            through a diverse array of
                            successful projects. Join the ranks of satisfied partners as we redefine possibilities in
                            the world of technology.</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-left">
                    <div class="chooseus-text">
                        <h2>Trusted by Students Worldwide</h2>
                        <p>Coders Capsule is the place where 500+ Coders have unlocked their true potential. Our
                            hands-on approach and expert
                            guidance ensure you graduate as a Code Wizard, ready to tackle real-world challenges.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <img src="assets/images/whychoose-image2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="about-section">
        <div class="container">
            <div class="blue-bg">
                <div class="bg-white">
                    <h1 class="default-heading text-center" data-aos="fade-up"><span class="text-primary">About</span>
                        us</h1>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-down">
                            <img src="assets/images/about-image.png" alt="">
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="about-text">
                                <h2>Our Mission</h2>
                                <p>Coders Capsule, where innovation meets expertise! Established in 2019, we have
                                    rapidly evolved into a global powerhouse,
                                    pioneering CAD automation, cutting-edge software solutions, Web development and
                                    unparalleled programming training. We
                                    envisions a future where technology seamlessly integrates with human ingenuity,
                                    driving innovation and transforming
                                    industries. We are dedicated to being at the forefront of this technological
                                    revolution, empowering businesses and
                                    individuals to achieve their fullest potential. We're not just shaping technology;
                                    we're shaping possibilities.</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="default-heading text-center mt-5" data-aos="fade-down">Meet our <span
                            class="text-primary">CEO</span></h1>

                    <div class="row">
                        <div class="col-md-6" data-aos="fade-left">
                            <div class="ceo-caption">
                                <h2>Praveen Kumar</h2>
                                <p>In a world where technology evolves at the speed of light, PRAVEEN stands as the
                                    beacon of change. With an unparalleled
                                    passion for innovation and an unwavering commitment to excellence, he has carved a
                                    path that goes beyond the ordinary.
                                    He fosters a culture of collaboration, empowerment, and inclusivity.</p>
                                <p>He founded his first company in the year 2019 at the age of 22 which offered design
                                    solutions to European Chemical and
                                    Petroleum industries. Amidst the chaos of Covid-19's early days, he didn't just
                                    navigate the storm; he seized the moment
                                    and embraced a transformative path. Choosing Automation and Software solutions, he
                                    scripted his own success story. From
                                    weathering a zero-profit storm between March 2020 and May 2021, to riding the waves
                                    of dedication, consistency, and hard
                                    work. By mid-2021, the tide shifted, and the journey transformed into a
                                    record-breaking surge of success. His love for
                                    Tech didn't just lead him somewhere; it shaped his destiny into a Trailblazing
                                    adventure.</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-right">
                            <img src="assets/images/ceo.png" alt="">
                        </div>
                    </div>
                    <h1 class="default-heading text-center mt-5" data-aos="fade-up">Roadmap</h1>

                    <!-- Roadmap Slider -->
                    <div class="swiper RoadmapSlider" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2015</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Foundation"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Foundation</h2>
                                    <p>
                                        Coder Capsule was founded with a vision to revolutionize automation solutions,
                                        laying the groundwork for future success.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2018</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover"
                                            data-bs-title="Technology Breakthrough"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Technology Breakthrough</h2>
                                    <p>
                                        Achieved a significant milestone with the development and implementation of
                                        groundbreaking technologies, establishing us
                                        as industry leaders.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2019 - 2020</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Industry Recognition"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Global Expansion</h2>
                                    <p>
                                        Expanded our footprint globally, reaching new markets and forging strategic
                                        partnerships to better serve clients around
                                        the world
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2019 - 2020</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Industry Recognition"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Industry Recognition</h2>
                                    <p>
                                        Achieved a significant milestone with the development and implementation of
                                        groundbreaking technologies, establishing us
                                        as industry leaders.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2015</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Foundation"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Foundation</h2>
                                    <p>
                                        Coder Capsule was founded with a vision to revolutionize automation solutions,
                                        laying the groundwork for future success.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2018</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover"
                                            data-bs-title="Technology Breakthrough"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Technology Breakthrough</h2>
                                    <p>
                                        Achieved a significant milestone with the development and implementation of
                                        groundbreaking technologies, establishing us
                                        as industry leaders.
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2019 - 2020</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Industry Recognition"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Global Expansion</h2>
                                    <p>
                                        Expanded our footprint globally, reaching new markets and forging strategic
                                        partnerships to better serve clients around
                                        the world
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap-item">
                                    <div class="roadmap-top">
                                        <h3>Year 2019 - 2020</h3>
                                        <span data-bs-toggle="popover" data-bs-placement="right"
                                            data-bs-custom-class="custom-popover" data-bs-title="Industry Recognition"
                                            data-bs-content="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,"
                                            class="dot"></span>
                                    </div>
                                    <h2>Industry Recognition</h2>
                                    <p>
                                        Achieved a significant milestone with the development and implementation of
                                        groundbreaking technologies, establishing us
                                        as industry leaders.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <a class="btn btn-primary" href="#" id="backtotop">
                    <i class="fa-solid fa-angle-up"></i>
                </a>
            </div>
        </div>
    </section>
    <section id="clients" data-aos="fade-down">
        <div class="container text-center">
            <h1 class="default-heading text-center mt-5">Our Clients</h1>
            <p>Meet Our partners in mission whom we delivered more than what they expect to get</p>
            <!-- Clients Slider -->
            <div class="swiper ClientsSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/client.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/client1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/client2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/client.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/client1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/client2.png" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section id="courses">
        <div class="container">
            <div class="blue-bg">
                <h1 class="default-heading text-center mt-5" data-aos="fade-up">Our Courses</h1>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-left">
                        <div class="course_item">
                            <img src="assets/images/course.png" alt="">
                            <h2>Automation Essentials</h2>
                            <p>Expanded our footprint globally, reaching new markets and forging strategic partnerships
                                to better serve clients around
                                the world</p>
                            <a href="#" class="btn-border">
                                <span>$199.99</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-left">
                        <div class="course_item">
                            <img src="assets/images/course1.png" alt="">
                            <h2>Advanced Robotic</h2>
                            <p>Dive deep into RPA strategies and implementation. Gain hands-on experience with advanced
                                automation techniques.</p>
                            <a href="#" class="btn-border">
                                <span>$199.99</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-right">
                        <div class="course_item">
                            <img src="assets/images/course2.png" alt="">
                            <h2>Machine Learning</h2>
                            <p>Explore algorithms, data analysis, and predictive modeling to create intelligent
                                automation solutions.</p>
                            <a href="#" class="btn-border">
                                <span>$199.99</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h1 class="default-heading text-center mt-5" data-aos="fade-up">Contact Us</h1>
            <p class="text-center" data-aos="fade-up">Request a Quote and Experience Excellence in Every Service.</p>
            <form method="post" action="#">
                <fieldset>
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="NameInput" class="form-label">Name</label>
                                <input type="text" name="name" id="NameInput" class="form-control"
                                    placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="PhoneInput" class="form-label">Phone</label>
                                <input type="text" name="phone" id="PhoneInput" class="form-control"
                                    placeholder="Enter Your Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="EmailInput" class="form-label">Email</label>
                                <input type="text" name="email" id="EmailInput" class="form-control"
                                    placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="ServiceInput" class="form-label">Service</label>
                                <select class="form-control" name="service" id="ServiceInput">
                                    <option value="">Choose Your Service</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="MessageInput" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="MessageInput" cols="30" rows="10"
                                    placeholder="Enter Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3" data-aos="fade-up">
                    <img src="assets/images/logo.svg" title="Coders Capsule" alt="Coders Capsule">
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <h2>Quick Links</h2>
                    <ul class="links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Why Choose Us?</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="#">Course</a></li>
                    </ul>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <h2>Contact Details</h2>
                    <ul class="links">
                        <li><a href="tel:631-696-7601"><i class="fa-solid fa-phone"></i> 631-696-7601</a></li>
                        <li><a href="mailto:hello@agency.com"><i class="fa-solid fa-envelope"></i> hello@agency.com</a>
                        </li>
                        <li><a href="#"><i class="fa-solid fa-location-dot"></i> 3110 Feathers Hooves DriveSelden,

                                New
                                York
                                11784</a></li>
                    </ul>
                </div>
                <div class="col-md-3" data-aos="fade-up">
                    <ul class="social-media">
                        <li><a href="#" class="btn-border"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#" class="btn-border"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="btn-border"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <p >© Copyright 2023. All Right Reserved</p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<!-- BEGIN: Customizer-->
    <div class="customizer">
        <a href="javascript:void(0);" class="customizer-btn">
            <i class="fa-solid fa-gear"></i>
        </a>
        <div class="customizer-content">
            <h4 class="text-uppercase mb-0 justify-content-between d-flex">Theme Customizer
                <a href="javascript:void(0);" class="close-customizer">
                    <i class="fa-solid fa-times"></i>
                </a>
            </h4>
            <hr>
            <p>Customize &amp; Preview in Real Time</p>
                <div class="d-flex row">
                    <a href="javascript:void(0);" class="color-switch" data-color="#4285F4"></a>
                    <a href="javascript:void(0);" class="color-switch" data-color="#000"></a>
                    <a href="javascript:void(0);" class="color-switch" data-color="#a7a"></a>
                    <a href="javascript:void(0);" class="color-switch" data-color="#FF0000"></a>
                    <a href="javascript:void(0);" class="color-switch" data-color="#ff710b"></a>
                </div>
                <p>Layout Customization</p>
                <a href="javascript:void(0);" class="layoutchange btn btn-primary" data-layout="boxed">Boxed</a>
                <a href="javascript:void(0);" class="layoutchange btn btn-danger" data-layout="full">Full Width</a>
        </div>
    </div>
<!-- End: Customizer-->

</body>

</html>