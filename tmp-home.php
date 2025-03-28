<?php 
# Template Name: Home page
get_header(); 
$banner_image = carbon_get_the_post_meta('banner_image');
?>
<section style="background: url(<?php echo esc_url($banner_image); ?>) no-repeat center / cover;" class="hero">
    <div class="container hero__container">
        <div class="hero__content">
            <div class="hero__text">
                <span><?php echo esc_html(carbon_get_the_post_meta('banner_title')); ?></span>
                <h1 class="hero__title">
                    <?php echo apply_filters('the_content', carbon_get_the_post_meta('banner_text')); ?>
                </h1>
            </div>
            <div class="hero__bottom">
                <div class="hero__btn-wrapper">
                    <a class="anchor hero__btn btn" href="#contact-form">Запис на консультацію</a>
                </div>
                <div class="hero__social">
                    <ul class="hero__social-list">
                        <li class="hero__social-item">
                            <a href="tel:<?php echo carbon_get_theme_option( 'eazycarsolutions_phone' ); ?>"
                                class="hero__social-link">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6_125)">
                                        <path
                                            d="M6.85166 2.49025C6.74097 2.34786 6.60126 2.23066 6.44179 2.14642C6.28232 2.06218 6.10676 2.01284 5.92676 2.00166C5.74676 1.99049 5.56644 2.01775 5.39778 2.08162C5.22912 2.14549 5.07598 2.24452 4.94853 2.37212L3.00978 4.31275C2.10416 5.22025 1.77041 6.50462 2.16603 7.6315C3.80805 12.2957 6.47909 16.5304 9.98104 20.0215C13.4721 23.5234 17.7068 26.1944 22.371 27.8365C23.4979 28.2321 24.7823 27.8984 25.6898 26.9927L27.6285 25.054C27.7561 24.9266 27.8552 24.7734 27.919 24.6048C27.9829 24.4361 28.0102 24.2558 27.999 24.0758C27.9878 23.8958 27.9385 23.7202 27.8542 23.5607C27.77 23.4013 27.6528 23.2616 27.5104 23.1509L23.1848 19.7871C23.0327 19.6691 22.8557 19.5872 22.6674 19.5476C22.479 19.508 22.284 19.5117 22.0973 19.5584L17.991 20.584C17.4429 20.721 16.8687 20.7137 16.3242 20.5629C15.7798 20.4121 15.2837 20.1229 14.8842 19.7234L10.2792 15.1165C9.87935 14.7172 9.58977 14.2212 9.43862 13.6767C9.28747 13.1322 9.27991 12.5579 9.41666 12.0096L10.4442 7.90337C10.4909 7.71662 10.4945 7.52169 10.4549 7.3333C10.4153 7.14492 10.3334 6.96799 10.2154 6.81587L6.85166 2.49025ZM3.53291 0.958373C3.86103 0.630153 4.25521 0.375492 4.6893 0.2113C5.12338 0.0471081 5.58743 -0.0228581 6.05063 0.00604739C6.51382 0.0349529 6.96557 0.162069 7.37587 0.378954C7.78618 0.59584 8.14565 0.897532 8.43041 1.264L11.7942 5.58775C12.411 6.38087 12.6285 7.414 12.3848 8.389L11.3592 12.4952C11.3061 12.7079 11.309 12.9307 11.3675 13.142C11.426 13.3532 11.5381 13.5457 11.6929 13.7009L16.2998 18.3077C16.4551 18.4629 16.648 18.5752 16.8596 18.6337C17.0712 18.6922 17.2943 18.6949 17.5073 18.6415L21.6117 17.6159C22.0928 17.4956 22.595 17.4862 23.0803 17.5885C23.5656 17.6909 24.0213 17.9022 24.4129 18.2065L28.7367 21.5702C30.291 22.7796 30.4335 25.0765 29.0423 26.4659L27.1035 28.4046C25.716 29.7921 23.6423 30.4015 21.7092 29.7209C16.7614 27.98 12.269 25.1474 8.56541 21.4334C4.85158 17.7303 2.01905 13.2386 0.27791 8.2915C-0.40084 6.36025 0.208535 4.28462 1.59604 2.89712L3.53478 0.958373H3.53291Z"
                                            fill="#F7FAFF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_125">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo carbon_get_theme_option( 'eazycarsolutions_phone' ); ?>
                            </a>
                        </li>
                        <li class="hero__social-item">
                            <a href="mailto:<?php echo carbon_get_theme_option( 'eazycarsolutions_email' ); ?>"
                                class="hero__social-link">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.9375 6.5625V29.0625H29.0625V6.5625H0.9375ZM13.875 20.0156C14.2002 20.2575 14.5947 20.3882 15 20.3882C15.4053 20.3882 15.7998 20.2575 16.125 20.0156L17.5 18.9844L27.1875 26.25V27.1875H2.8125V26.25L12.5 18.9844L13.875 20.0156ZM15 18.5156L2.8125 9.375V8.4375H27.1875V9.375L15 18.5156ZM2.8125 11.7188L10.9375 17.8125L2.8125 23.9062V11.7188ZM27.1875 23.9062L19.0625 17.8125L27.1875 11.7188V23.9062Z"
                                        fill="#F7FAFF" />
                                </svg>
                                <?php echo carbon_get_theme_option( 'eazycarsolutions_email' ); ?>
                            </a>
                        </li>
                        <li class="hero__social-item">
                            <a target="_blank"
                                href="<?php echo carbon_get_theme_option( 'eazycarsolutions_address-google' ); ?>"
                                class="hero__social-link">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_6_135)">
                                        <path
                                            d="M22.8113 16.7625C21.8288 18.7537 20.4975 20.7375 19.1363 22.5188C17.8449 24.198 16.4642 25.8066 15 27.3375C13.5358 25.8066 12.155 24.1981 10.8638 22.5188C9.5025 20.7375 8.17125 18.7537 7.18875 16.7625C6.195 14.7506 5.625 12.8662 5.625 11.25C5.625 8.7636 6.61272 6.37903 8.37087 4.62087C10.129 2.86272 12.5136 1.875 15 1.875C17.4864 1.875 19.871 2.86272 21.6291 4.62087C23.3873 6.37903 24.375 8.7636 24.375 11.25C24.375 12.8662 23.8031 14.7506 22.8113 16.7625ZM15 30C15 30 26.25 19.3388 26.25 11.25C26.25 8.26631 25.0647 5.40483 22.955 3.29505C20.8452 1.18526 17.9837 0 15 0C12.0163 0 9.15483 1.18526 7.04505 3.29505C4.93526 5.40483 3.75 8.26631 3.75 11.25C3.75 19.3388 15 30 15 30Z"
                                            fill="#F7FAFF" />
                                        <path
                                            d="M15 15C14.0054 15 13.0516 14.6049 12.3483 13.9017C11.6451 13.1984 11.25 12.2446 11.25 11.25C11.25 10.2554 11.6451 9.30161 12.3483 8.59835C13.0516 7.89509 14.0054 7.5 15 7.5C15.9946 7.5 16.9484 7.89509 17.6516 8.59835C18.3549 9.30161 18.75 10.2554 18.75 11.25C18.75 12.2446 18.3549 13.1984 17.6516 13.9017C16.9484 14.6049 15.9946 15 15 15ZM15 16.875C16.4918 16.875 17.9226 16.2824 18.9775 15.2275C20.0324 14.1726 20.625 12.7418 20.625 11.25C20.625 9.75816 20.0324 8.32742 18.9775 7.27252C17.9226 6.21763 16.4918 5.625 15 5.625C13.5082 5.625 12.0774 6.21763 11.0225 7.27252C9.96763 8.32742 9.375 9.75816 9.375 11.25C9.375 12.7418 9.96763 14.1726 11.0225 15.2275C12.0774 16.2824 13.5082 16.875 15 16.875V16.875Z"
                                            fill="#F7FAFF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6_135">
                                            <rect width="30" height="30" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo carbon_get_theme_option( 'eazycarsolutions_address' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$values_title = carbon_get_theme_option('values_title');
$values_intro_text = carbon_get_theme_option('values_intro_text');
$values_list = carbon_get_theme_option('values_list');
$values_video_id = carbon_get_theme_option('crb_video_1_uk');
$values_video_url = $values_video_id ? wp_get_attachment_url($values_video_id) : '';

?>

<section class="values">
    <div class="container values__container">
        <div class="title__wrapper values__title-wrapper">
            <h2 class="title"><?php echo esc_html($values_title); ?></h2>
        </div>
    </div>
    <div class="container">
        <div class="values__content">
            <?php if ($values_video_url): ?>
            <div class="values__video">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($values_video_url); ?>" type="video/mp4" />
                    Ваш браузер не підтримує відео.
                </video>
            </div>
            <?php endif; ?>
            <div class="values__content-text">
                <?php if ($values_intro_text): ?>
                <div class="values__text-top">
                    <p><?php echo wp_kses_post($values_intro_text); ?></p>
                </div>
                <?php endif; ?>

                <?php if (!empty($values_list)): ?>
                <ul class="values__list">
                    <?php foreach ($values_list as $value): ?>
                    <li class="values__item">
                        <div class="values__item-icon">
                            <!-- SVG-іконка -->
                            <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.4115 36.5952L37.0934 50.968C37.8356 51.8091 39.1451 51.8156 39.8955 50.9817L72.2672 15.0132"
                                    stroke="#22C55E" stroke-width="7.41072" stroke-linecap="round" />
                                <path
                                    d="M66.7184 28.9908C69.8475 35.2992 70.4988 42.5512 68.5436 49.3161C66.5884 56.0809 62.1689 61.8674 56.1569 65.5338C50.1449 69.2002 42.9771 70.4802 36.0677 69.1213C29.1583 67.7624 23.0091 63.8633 18.8333 58.1933C14.6575 52.5232 12.7584 45.4941 13.5107 38.4926C14.263 31.4911 17.612 25.0259 22.897 20.3724C28.1821 15.7189 35.0192 13.2151 42.0596 13.3551C49.1 13.4951 55.8322 16.2687 60.9281 21.1286"
                                    stroke="#22C55E" stroke-width="3.75339" />
                            </svg>
                        </div>
                        <div class="values__item-text">
                            <span class="values__item-text-bold"><?php echo esc_html($value['value_title']); ?></span>
                            <span><?php echo esc_html($value['value_description']); ?></span>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php 
$team_members =  carbon_get_the_post_meta('team'); // Отримуємо масив учасників
if ($team_members): 
    $team_title =  carbon_get_the_post_meta('team_title');
    
?>
<section class="team blue">
    <div class="container team__container">
        <div class="title__wrapper team__title-wrapper">
            <h2 class="title"><?php echo esc_html($team_title); ?></h2>
        </div>
    </div>
    <div class="team__content">
        <div class="container team__container">
            <div class="swiper team__swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($team_members as $member):
                        $name = esc_html($member['team_name']);
                        $position = esc_html($member['team_position']);
                        $photo = esc_url($member['team_image']);
                        $qr = esc_url($member['team_member_qr']);
                        $link = esc_url($member['team_member_qr-link']);
                    ?>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="slide-content__img">
                                <img src="<?php echo $photo; ?>" alt="team" />
                                <a target="_blank" href="<?php echo $link; ?>" class="team__member-qr--wrapper">
                                    <img class="team__member-qr" src="<?php echo $qr; ?>" alt="qr code" />
                                </a>
                                <button class="team__member-icon">
                                    <svg class="desktop-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 0.9375C0 0.68886 0.0987721 0.450403 0.274587 0.274587C0.450403 0.0987721 0.68886 0 0.9375 0L6.5625 0C6.81114 0 7.0496 0.0987721 7.22541 0.274587C7.40123 0.450403 7.5 0.68886 7.5 0.9375C7.5 1.18614 7.40123 1.4246 7.22541 1.60041C7.0496 1.77623 6.81114 1.875 6.5625 1.875H1.875V6.5625C1.875 6.81114 1.77623 7.0496 1.60041 7.22541C1.4246 7.40123 1.18614 7.5 0.9375 7.5C0.68886 7.5 0.450403 7.40123 0.274587 7.22541C0.0987721 7.0496 0 6.81114 0 6.5625V0.9375ZM22.5 0.9375C22.5 0.68886 22.5988 0.450403 22.7746 0.274587C22.9504 0.0987721 23.1889 0 23.4375 0L29.0625 0C29.3111 0 29.5496 0.0987721 29.7254 0.274587C29.9012 0.450403 30 0.68886 30 0.9375V6.5625C30 6.81114 29.9012 7.0496 29.7254 7.22541C29.5496 7.40123 29.3111 7.5 29.0625 7.5C28.8139 7.5 28.5754 7.40123 28.3996 7.22541C28.2238 7.0496 28.125 6.81114 28.125 6.5625V1.875H23.4375C23.1889 1.875 22.9504 1.77623 22.7746 1.60041C22.5988 1.4246 22.5 1.18614 22.5 0.9375ZM0.9375 22.5C1.18614 22.5 1.4246 22.5988 1.60041 22.7746C1.77623 22.9504 1.875 23.1889 1.875 23.4375V28.125H6.5625C6.81114 28.125 7.0496 28.2238 7.22541 28.3996C7.40123 28.5754 7.5 28.8139 7.5 29.0625C7.5 29.3111 7.40123 29.5496 7.22541 29.7254C7.0496 29.9012 6.81114 30 6.5625 30H0.9375C0.68886 30 0.450403 29.9012 0.274587 29.7254C0.0987721 29.5496 0 29.3111 0 29.0625V23.4375C0 23.1889 0.0987721 22.9504 0.274587 22.7746C0.450403 22.5988 0.68886 22.5 0.9375 22.5ZM29.0625 22.5C29.3111 22.5 29.5496 22.5988 29.7254 22.7746C29.9012 22.9504 30 23.1889 30 23.4375V29.0625C30 29.3111 29.9012 29.5496 29.7254 29.7254C29.5496 29.9012 29.3111 30 29.0625 30H23.4375C23.1889 30 22.9504 29.9012 22.7746 29.7254C22.5988 29.5496 22.5 29.3111 22.5 29.0625C22.5 28.8139 22.5988 28.5754 22.7746 28.3996C22.9504 28.2238 23.1889 28.125 23.4375 28.125H28.125V23.4375C28.125 23.1889 28.2238 22.9504 28.3996 22.7746C28.5754 22.5988 28.8139 22.5 29.0625 22.5ZM5.625 5.625H11.25V11.25H5.625V5.625ZM5.625 18.75H11.25V24.375H5.625V18.75ZM18.75 5.625H24.375V11.25H18.75V5.625ZM13.125 3.75H3.75V13.125H13.125V3.75ZM13.125 16.875H3.75V26.25H13.125V16.875ZM16.875 3.75H26.25V13.125H16.875V3.75ZM7.5 7.5H9.375V9.375H7.5V7.5ZM20.625 7.5H22.5V9.375H20.625V7.5ZM9.375 20.625H7.5V22.5H9.375V20.625ZM15.9375 15H15V18.75H16.875V20.625H15V22.5H18.75V18.75H20.625V22.5H22.5V20.625H26.25V18.75H20.625V15H15.9375ZM18.75 18.75V16.875H16.875V18.75H18.75ZM26.25 25.3125V22.5H24.375V24.375H20.625V26.25H26.25V25.3125ZM18.75 26.25V24.375H15V26.25H18.75ZM22.5 16.875H26.25V15H22.5V16.875Z"
                                            fill="#1E3A8A" />
                                    </svg>
                                    <svg class="mobile-svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_79_9)">
                                            <path
                                                d="M4.5676 1.66012C4.49381 1.5652 4.40066 1.48706 4.29435 1.43091C4.18804 1.37475 4.071 1.34185 3.951 1.3344C3.831 1.32695 3.71078 1.34512 3.59835 1.38771C3.48591 1.43029 3.38381 1.4963 3.29885 1.58137L2.00635 2.87512C1.4026 3.48012 1.1801 4.33638 1.44385 5.08763C2.53852 8.19711 4.31922 11.0202 6.65385 13.3476C8.98126 15.6822 11.8044 17.4629 14.9139 18.5576C15.6651 18.8214 16.5214 18.5989 17.1264 17.9951L18.4188 16.7026C18.5039 16.6177 18.5699 16.5156 18.6125 16.4031C18.6551 16.2907 18.6733 16.1705 18.6658 16.0505C18.6584 15.9305 18.6255 15.8134 18.5693 15.7071C18.5132 15.6008 18.435 15.5077 18.3401 15.4339L15.4564 13.1914C15.3549 13.1127 15.237 13.0581 15.1114 13.0317C14.9858 13.0053 14.8559 13.0077 14.7313 13.0389L11.9939 13.7226C11.6285 13.814 11.2456 13.8091 10.8827 13.7086C10.5197 13.608 10.1889 13.4152 9.9226 13.1489L6.8526 10.0776C6.58606 9.81142 6.39301 9.48073 6.29224 9.11775C6.19148 8.75477 6.18643 8.37188 6.2776 8.00638L6.9626 5.26888C6.99373 5.14437 6.99619 5.01442 6.96977 4.88883C6.94335 4.76324 6.88876 4.64529 6.8101 4.54387L4.5676 1.66012ZM2.3551 0.638875C2.57384 0.420061 2.83664 0.250288 3.12602 0.140826C3.41541 0.0313647 3.72478 -0.0152795 4.03358 0.0039909C4.34238 0.0232613 4.64354 0.108005 4.91708 0.252596C5.19061 0.397186 5.43026 0.598314 5.6201 0.842625L7.8626 3.72512C8.27385 4.25387 8.41885 4.94263 8.25635 5.59263L7.5726 8.33013C7.53725 8.47191 7.53916 8.62043 7.57814 8.76126C7.61713 8.90209 7.69187 9.03045 7.7951 9.13388L10.8664 12.2051C10.9699 12.3086 11.0985 12.3834 11.2395 12.4224C11.3806 12.4614 11.5294 12.4632 11.6714 12.4276L14.4076 11.7439C14.7284 11.6637 15.0632 11.6574 15.3867 11.7257C15.7102 11.7939 16.014 11.9347 16.2751 12.1376L19.1576 14.3801C20.1939 15.1864 20.2889 16.7176 19.3614 17.6439L18.0689 18.9364C17.1439 19.8614 15.7614 20.2676 14.4726 19.8139C11.1741 18.6533 8.17919 16.7649 5.7101 14.2889C3.23421 11.8201 1.34586 8.8257 0.1851 5.52763C-0.2674 4.24013 0.13885 2.85637 1.06385 1.93137L2.35635 0.638875H2.3551Z"
                                                fill="#1E3A8A" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_79_9">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                            <div class="slide-content__text">
                                <h3 class="slide-content__title"><?php echo $name; ?></h3>
                                <p class="slide-content__description"><?php echo $position; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--team"></div>
        </div>
        <div class="swiper-button-prev swiper-button-prev--team">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM21 9H1V7H21V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next--team">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9H20V7H0V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="issues">
    <div class="container">
        <div class="title__wrapper issues__title-wrapper">
            <h2 class="title issues__title">
                <?php echo esc_html( carbon_get_the_post_meta( 'issue_section_title' ) ); ?>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="issues__grid">
            <?php 
            $issues = carbon_get_the_post_meta( 'issues_list' );
            if ( ! empty( $issues ) ) :
                foreach ( $issues as $issue ) :
                    $image_url = esc_url( $issue['issue_image'] );
                    $title = esc_html( $issue['issue_title'] );
            ?>
            <div class="issues__item">
                <div class="issues__img-wrapper">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>" class="issues__image" />
                    <p class="issues__text"><?php echo $title; ?></p>
                </div>
            </div>
            <?php 
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<section
    style="background: url(<?php echo esc_url(carbon_get_the_post_meta('work_section_image') ); ?>) no-repeat center / cover;"
    class="work blue">
    <div class="container work__container">
        <div class="title__wrapper work__title-wrapper">
            <h2 class="title work__title">
                <?php echo wp_kses_post( carbon_get_the_post_meta('work_section_title') ); ?>
            </h2>
        </div>
    </div>
    <div class="work__content">
        <div class="container work__container">
            <div class="work__content">
                <div class="work__img-wrapper">
                    <img src="<?php echo esc_url( carbon_get_the_post_meta('work_section_image') ); ?>"
                        alt="Як це працює?" class="work__image" />
                </div>
                <div class="steps">
                    <?php 
                    $steps = carbon_get_the_post_meta('work_steps');
                    if ( ! empty($steps) ) :
                        foreach ( $steps as $index => $step ) :
                            $step_number = $index + 1;
                            $slice_value = ($step_number * 250);
                            $is_last_step = ($step_number === count($steps)); // Значення для анімації кола
                            ?>
                    <div class="step__wrapper">
                        <div class="circle-wrapper">
                            <?php if ( $is_last_step ) : ?>
                            <svg class="svg-circle svg-circle--finish" width="100%" height="100%" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45" pathLength="1000" class="inner-circle"></circle>
                                <circle cx="50" cy="50" r="45" pathLength="1000" style="--slice: 1000" class="circle">
                                </circle>
                            </svg>
                            <svg class="logo__element" width="75" height="59" viewBox="0 0 75 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 34.2157L22.5516 55.2409C23.1665 55.9377 24.2513 55.943 24.8729 55.2523L71 4"
                                    stroke="#22C55E" stroke-width="6.13898" stroke-linecap="round" />
                            </svg>
                            <?php else : ?>
                            <svg class="svg-circle" width="100%" height="100%" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="45" pathLength="1000" class="inner-circle"></circle>
                                <circle cx="50" cy="50" r="45" pathLength="1000"
                                    style="--slice: <?php echo $slice_value; ?>" class="circle"></circle>
                            </svg>
                            <?php endif; ?>
                            <span><?php echo $step_number; ?></span>
                        </div>
                        <div class="description"><?php echo esc_html($step['step_description']); ?></div>
                    </div>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container team__container">
        <div class="title__wrapper team__title-wrapper">
            <h2 class="title">Наші партнери</h2>
        </div>
    </div>
    <div class="partners__content">
        <div class="container partners__container">
            <div class="swiper partners__swiper">
                <div class="swiper-wrapper">
                    <?php 
                    $partners = carbon_get_the_post_meta('partners_logos'); // Отримуємо партнерів
                    if (!empty($partners)) :
                        foreach ($partners as $partner) :
                            ?>
                    <div class="swiper-slide">
                        <div class="slide-content--partners">
                            <?php 
                                    if (!empty($partner['logos'])) :
                                        foreach ($partner['logos'] as $logo) :
                                            ?>
                            <div class="partners__img-wrapper">
                                <img src="<?php echo esc_url($logo['logo']); ?>" alt="лого партнера"
                                    class="partners__image" />
                            </div>
                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--partners"></div>
        </div>

        <div class="swiper-button-prev swiper-button-prev--partners">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM21 9H1V7H21V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next--partners">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9H20V7H0V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
    </div>
</section>

<section class="portfolio blue">
    <div class="container team__container">
        <div class="title__wrapper team__title-wrapper">
            <h2 class="title">Наші роботи</h2>
        </div>
    </div>
    <div class="portfolio__content">
        <div class="container portfolio__container">
            <div class="swiper portfolio__swiper">
                <div class="swiper-wrapper">
                    <?php 
                    $portfolio_items = carbon_get_the_post_meta('portfolio_items'); // Отримуємо роботи з Carbon Fields
                    if (!empty($portfolio_items)) :
                        foreach ($portfolio_items as $item) :
                            ?>
                    <div class="swiper-slide">
                        <div class="slide-content--portfolio">
                            <div class="portfolio__img-wrapper">
                                <img src="<?php echo esc_url($item['portfolio_image']); ?>" alt="Наші роботи"
                                    class="portfolio__image" />
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--portfolio"></div>
        </div>

        <div class="swiper-button-prev swiper-button-prev--portfolio">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM21 9H1V7H21V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next--portfolio">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9H20V7H0V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
    </div>
</section>

<?php
$reviews = carbon_get_theme_option('reviews_items');

if ($reviews) :
?>
<section class="reviews">
    <div class="container reviews__container">
        <div class="title__wrapper reviews__title-wrapper">
            <h2 class="title">Відгуки</h2>
        </div>
    </div>
    <div class="reviews__content">
        <div class="container reviews__container">
            <div class="swiper reviews__swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $review) : ?>
                    <div class="swiper-slide">
                        <div class="slide-content--reviews">
                            <div class="reviews__text-wrapper">
                                <div class="reviews__text-name-wrapper">
                                    <span
                                        class="reviews__text-name"><?php echo esc_html($review['review_name']); ?></span>
                                    <span
                                        class="reviews__text-job"><?php echo esc_html($review['review_job']); ?></span>
                                </div>
                                <?php if (!empty($review['review_logo'])) : ?>
                                <div class="reviews__logo-wrapper">
                                    <img src="<?php echo esc_url($review['review_logo']); ?>" alt="логотип клієнта"
                                        class="reviews__logo" />
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="reviews__value">
                                <?php echo esc_html($review['review_text']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--reviews"></div>
        </div>
        <div class="swiper-button-prev swiper-button-prev--reviews">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM21 9H1V7H21V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next--reviews">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9H20V7H0V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="contact-form" class="promo">
    <div class="container promo__container">
        <div style="background: url(<?php echo esc_url(carbon_get_theme_option('promo_image') ); ?>) no-repeat center / cover;"
            class="promo__container-wrapper">
            <div class="promo__image">
                <img src="<?php echo carbon_get_theme_option('promo_image'); ?>" alt="Доставка щастя" />
            </div>
            <div class="promo__content-wrapper">
                <div class="promo__content">
                    <div class="promo__title-wrapper">
                        <h2 class="promo__title"><?php echo carbon_get_theme_option('form_title'); ?></h2>
                        <svg width="124" height="124" viewBox="0 0 124 124" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.4749 54.6727L55.399 76.1201C56.5197 77.3902 58.497 77.3999 59.6301 76.1409L107.97 22.4297"
                                stroke="#22C55E" stroke-width="5.66734" stroke-linecap="round" />
                            <path
                                d="M99.6489 43.3249C104.32 52.7427 105.293 63.5693 102.374 73.6687C99.4549 83.7681 92.8569 92.4068 83.8815 97.8804C74.9061 103.354 64.2052 105.265 53.89 103.236C43.5749 101.207 34.3947 95.3865 28.1606 86.9216C21.9265 78.4567 19.0913 67.9628 20.2144 57.5102C21.3375 47.0577 26.3374 37.4056 34.2274 30.4583C42.1175 23.5111 52.3248 19.7732 62.8355 19.9822C73.3462 20.1911 83.3968 24.3318 91.0045 31.5872"
                                stroke="#22C55E" stroke-width="5.66734" />
                        </svg>
                    </div>
                    <div class="promo__form form">
                        <?php echo do_shortcode('[contact-form-7 id="b1f289c" title="Контактна форма"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>