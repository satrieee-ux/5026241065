<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satrio Designs</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        @font-face {
            font-family: 'Link Sans Product';
            src: url('https://assets.production.linktr.ee/fonts/LinkSansProduct.woff2') format('woff2');
            font-display: swap;
        }

        body, h1, h2, h3, h4, h5, h6, p, span, a {
            font-family: 'Link Sans Product', -apple-system, sans-serif;
        }

        body {
            background-color: #333333;
        }

        .bg-gradient-custom {
            background: linear-gradient(135deg, #cce4f5 0%, #e2d2f2 50%, #ebd4eb 100%);
            border-radius: 40px;
        }

        .top-btn {
            width: 42px;
            height: 42px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            transition: transform 0.2s;
        }
        .top-btn:hover {
            background: #ffffff;
            transform: scale(1.1);
        }

        .btn-left {
            position: absolute; top: 25px; left: 25px;
        }
        .btn-right {
            position: absolute; top: 25px; right: 25px;
        }

        .profile-pic {
            width: 96px;
            height: 96px;
            object-fit: cover;
        }

        .custom-link-btn {
            border-radius: 12px;
            min-height: 65px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .custom-link-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 16px rgba(0,0,0,0.1);
        }

        .link-icon-img {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 8px;
        }

        .footer-icon-link {
            font-size: 28px;
            transition: transform 0.2s;
        }
        .footer-icon-link:hover {
            transform: scale(1.1);
            color: #333333;
        }
    </style>
</head>
<body>

    <div class="container min-vh-100 d-flex align-items-center py-4">
        <div class="row w-100 justify-content-center mx-0">

            <div class="col-12 col-md-8 col-lg-6 px-0">
                <div class="bg-gradient-custom shadow-lg position-relative p-4 p-md-5">

                    <a href="#" class="top-btn btn-left d-flex align-items-center justify-content-center text-dark text-decoration-none shadow-sm">
                        <i class="fas fa-asterisk"></i>
                    </a>
                    <a href="#" class="top-btn btn-right d-flex align-items-center justify-content-center text-dark text-decoration-none shadow-sm">
                        <i class="fas fa-share-alt"></i>
                    </a>

                    <div class="text-center mb-5">
                        <img src="https://ugc.production.linktr.ee/fqBi97H3Tam3hCdwdH8F_nAQmdSDaKiA5d42H?io=true&size=avatar-v3_0" alt="Satrio Designs" class="profile-pic rounded-circle shadow-sm mb-3">
                        <h1 class="h4 font-weight-bold text-dark mb-1">Satrio Designs</h1>
                        <p class="text-dark" style="font-size: 15px; font-weight: 500;">Where the imaginary becomes reality.</p>
                    </div>

                    <!-- Tombol Links -->
                    <a href="https://www.behance.net/gallery/214024213/PORTOFOLIO-Muhammad-Satrio-Adjie-(2024)" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <div style="width: 45px;"></div>
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">PORTFOLIO 2024</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <a href="https://displate.com/satriodesigns" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/sI02UUWoSWmi1draCYzk_Displate.jpg?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="Displate">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">Metal Prints on Displate!</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <h2 class="h6 font-weight-bold text-center text-dark mt-5 mb-3">Socials:</h2>

                    <a href="https://www.youtube.com/channel/UCE3u4fb4lcOI--wWRcXmY4w?sub_confirmation=1" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/TAhaPwvTnmDbqrMdxO79_n5b7U7VgLwWBuPeE?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="Youtube">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">🚀 Youtube Channel</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <a href="http://twitter.com/satriodesigns" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/dUxGDjnpSG6K69b1G4uN_rjKvp4k50KRMwaK0?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="Twitter">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">Twitter</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <a href="https://vt.tiktok.com/ZSJPCcRE5/" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/GHGBuvHZRHKKVBugRJLt_YHjxQZ213MK0sQ8e?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="TikTok">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">TikTok</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <h2 class="h6 font-weight-bold text-center text-dark mt-5 mb-3">Portofolio:</h2>

                    <a href="https://www.artstation.com/satriodesigns" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/bzuXHGYT7G1DknjBms8A_VLFr2nk6CLBzTZ6u?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="Artstation">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">Artstation</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <a href="https://www.behance.net/thesatriodesigns" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/SFVJLzf1SmX24TEH0J2L_zyRnLbjvnwKTkWxb?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="Behance">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">Bēhance</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>

                    <a href="http://deviantart.com/satriodesigns" target="_blank" class="custom-link-btn bg-white text-dark d-flex align-items-center mb-3 px-2 shadow-sm text-decoration-none">
                        <img src="https://ugc.production.linktr.ee/Q6Ct2GWqT3Kv6AE8GJgt_0Ws4jBlOMGEjWhcp?io=true&size=thumbnail-stack_v1_0" class="link-icon-img" alt="DeviantArt">
                        <span class="flex-grow-1 text-center font-weight-bold" style="font-size: 16px;">DeviantArt</span>
                        <div style="width: 45px;" class="text-center text-secondary">
                            <i class="fas fa-ellipsis-v" style="font-size: 18px;"></i>
                        </div>
                    </a>


                    <div class="d-flex justify-content-center mt-5">
                        <a href="mailto:satriodesigns@gmail.com" class="footer-icon-link text-dark mx-3" aria-label="Email">
                            <i class="far fa-envelope"></i>
                        </a>
                        <a href="https://www.paypal.me/satriodesigns" target="_blank" class="footer-icon-link text-dark mx-3" aria-label="Paypal">
                            <i class="fab fa-paypal"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
